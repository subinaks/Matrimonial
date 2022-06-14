<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Matrimonial
        </h2>
        <head>
                
            <title>Users</title>
        
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        
            <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        
        </head>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body>
                <div class="container">
                    <h1>Users</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="form-group">
                                    <label><strong>Age :</strong></label>
                                    <select id='age' class="form-control" style="width: 200px">
                                        <option value="">--Select Age--</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label><strong>Gender :</strong></label>
                                    <select id='gender' class="form-control" style="width: 200px">
                                        <option value="">--Select Gender--</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label><strong>income range :</strong></label>
                                    <select id='annual_income' class="form-control" style="width: 200px">
                                        <option value="">--Select Income--</option>
                                        <option value="0-10000">0-10000</option>
                                        <option value="10000-20000">10000-20000</option>
                                        <option value="20000-40000">20000-40000</option>
                                        <option value="40000-60000">40000-60000</option>
                                        <option value="60000-100000">60000-100000</option>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label><strong>Family Type:</strong></label>
                                    <select id='family' class="form-control" style="width: 200px">
                                        <option value="">--Select Family Type--</option>
                                        <option value="1">Joint Family</option>
                                        <option value="2">Nuclear Family</option>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label><strong>Manglik:</strong></label>
                                    <select id='manglik' class="form-control" style="width: 200px">
                                        <option value="">--Select Manglik--</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                           
                       
                        </div>
                    </div><br>
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Occupation</th>
                                <th>Income</th>
                                <th>Family Type</th>
                                <th width="100px">Manglik</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                </body>
                <script type="text/javascript">
                  $(function () {
                    var table = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        scrollX: true,
                        ajax: {
                          url: "{{ route('view-users') }}",
                          data: function (d) {
                                d.age = $('#age').val(),
                                d.family = $('#family').val(),
                                d.gender = $('#gender').val(),
                                d.annual_income = $('#annual_income').val(),
                                d.manglik = $('#manglik').val(),
                                d.search = $('input[type="search"]').val()
                            }
                        },
                        columns: [
                            {data: 'DT_RowIndex',orderable: false, searchable: false},
                            {data: 'first_name', name: 'first_name'},
                            {data: 'last_name', name: 'last_name'},
                            {data: 'email', name: 'email'},
                            {data: 'gender', name: 'gender'},
                            {data: 'age', name: 'age'},
                            {data: 'occupation', name: 'occupation'},
                            {data: 'annual_income', name: 'annual_income'},
                            {data: 'family', name: 'family'},
                            {data: 'manglik', name: 'manglik'},
                        ]
                    });
                    $('#age').change(function(){
                        table.draw();
                    });
                    $('#family').change(function(){
                        table.draw();
                    });
                    $('#manglik').change(function(){
                        table.draw();
                    });
                    $('#gender').change(function(){
                        table.draw();
                    });
                    $('#annual_income').change(function(){
                        table.draw();
                    });
                  });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
