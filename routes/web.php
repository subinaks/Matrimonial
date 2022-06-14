<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user-login', [HomeController::class, 'login'])->name('user-login');
Route::post('/login-user', [HomeController::class, 'loginUser'])->name('login-user');
Route::get('login/{provider}',  [SocialController::class, 'redirect']);
Route::get('login/{provider}/callback',[SocialController::class, 'Callback']);
Route::post('/add-user', [HomeController::class, 'register'])->name('add-user');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user-home', [HomeController::class, 'home'])->name('user-home');
    Route::get('/view-users', [HomeController::class, 'viewUser'])->name('view-users');

});
