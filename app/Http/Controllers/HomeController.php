<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\FamilyType;
use App\Models\User;
use App\Models\UserPartnerPreference;
use App\Models\UserDetail;
use App\Models\Occupation;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Traits\CommonFunction;
use App\Actions\Fortify\PasswordValidationRules;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
class HomeController extends Controller
{
    use CommonFunction;
    use PasswordValidationRules;
    public function index()
    {
        $familyTypes=FamilyType::get();
        $occupations=Occupation::get();
        return view('welcome',compact('familyTypes','occupations'));
    }
    public function login()
    {
        return view('user_login');
    }
    public function home()
    {
        $gender=UserDetail::where('user_id',\Auth::user()->id)->first();
        $users=User::join('user_details','user_details.user_id','users.id')
        ->join('user_partner_preferences','user_partner_preferences.user_id','user_details.user_id')
        ->join('occupations','occupations.id','user_details.occupation')
        ->select('users.first_name','users.last_name','users.email',
        'user_details.gender','user_details.annual_income','user_details.occupation','user_details.family','user_details.manglik',
        'occupations.title')
        ->where('users.id','!=',\Auth::user()->id)
        ->where('user_details.gender','!=',$gender->gender)
        ->get();
        $userArray=array();
        foreach($users as $user)
        {
            $percentage=$this->getPercentage($user->annual_income,$user->manglik,$user->family,$user->occupation);
            array_push($userArray,
            ['occupation'=>$user->title,
            'first_name'=>$user->first_name,
            'last_name'=>$user->last_name,
            'gender'=>$user->gender,
            'percentage'=>$percentage
        ]);
        }
        usort($userArray, function($a, $b) {
            return $a['percentage'] <= $b['percentage'];
        });
        
        return view('home',compact('userArray'));
    }
    public function viewUser(Request $request)
    {
        if ($request->ajax()) {

            $data = User::join('user_details','user_details.user_id','users.id')
            ->join('occupations','occupations.id','user_details.occupation')
            ->join('family_types','family_types.id','user_details.family')
            ->select('users.*','user_details.dob','user_details.gender','user_details.annual_income',
            'family_types.title as family','user_details.manglik','occupations.title as occupation');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('age', function($row){
                         if($row->dob){
                            return \Carbon\Carbon::parse($row->dob)->age;
                         }
                    })
                    ->addColumn('manglik', function($row){
                        if($row->manglik==1){
                           return 'Yes';
                        }
                        if($row->manglik==0){
                            return 'No';
                         }
                   })
                    ->filter(function ($instance) use ($request) {

                        if ($request->get('age')) {

                            $instance->whereDate('dob', '>=', now()->subYears($request->get('age')));
                        }
                        if ($request->get('annual_income')) {
                            $income=explode('-',$request->get('annual_income'));
                            // dd($income);
                            $instance->whereBetween('annual_income', [$income[0],$income[1]]);
                        }
                        if ($request->get('family') == '1' || $request->get('family') == '2') {

                            $instance->where('family', $request->get('family'));
                        }
                        if ($request->get('manglik') == '1' || $request->get('manglik') == '0') {

                            $instance->where('manglik', $request->get('manglik'));
                        }
                        if ($request->get('gender') == 'female' || $request->get('gender') == 'male') {

                            $instance->where('gender', $request->get('gender'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('first_name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%");
                            });
                        }
                    })
                    ->rawColumns(['age'])
                    ->make(true);
        }
        return view('view_users');
    }
    public function register(Request $request)
    {
        Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        DB::beginTransaction();
        try{
        $user=User::Create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
        UserDetail::Create([
            'user_id'=>$user->id,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'annual_income'=>$request->income,
            'occupation'=>$request->occupation,
            'family'=>$request->family,
            'manglik'=>$request->manglik

        ]);
        $income=explode(' ',$request->expected_income);
        if(isset($income))
        {
            $minIncome=ltrim($income[0],'₹');
            $maxIncome=ltrim($income[2],'₹');
        }
        else
        {
            $minIncome=0;
            $maxIncome=0; 
        }
        UserPartnerPreference::Create([
            'user_id'=>$user->id,
            'partner_income_min'=>$minIncome,
            'partner_income_max'=>$maxIncome,
            'partner_occupation'=>$request->partner_occupation,
            'partner_family'=>$request->partner_family,
            'partner_manglik'=>$request->partner_manglik
        ]);
        DB::commit();
        return response()->json(['status' => true, 'message' => "Registration Completed Successfully !!",'data'=>$user], 200);
    
    }catch (\Exception $exception)
    {
        DB::rollBack();
        return response()->json(['status' => false, 'message' => $exception->getMessage(), 'data' => []], 500);
    }
    }
    public function loginUser(Request $request)
    {
       $email=$request->email;
       $password=$request->password;
    if (Auth::attempt(['email'=>$email,'password'=>$password])) {
        return redirect('/user-home');
    } else {
        return redirect('/user-login')->with('error', 'Invalid Email address or Password');
    }

    }
}
