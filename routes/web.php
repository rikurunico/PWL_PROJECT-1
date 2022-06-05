<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('loginpage.loginPage',
        ['tittle' => 'Login Page']); 
}) -> name('LoginPage') -> middleware('guest');

Route::get('/register',[RegisterController::class, 'index'])->name('RegisterPage')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::post('/postlogin', [LoginController::class, 'login']) -> name('login');
Route::post('/postregister', [RegisterController::class, 'store']) -> name('register');

Route::middleware(['auth','cekStatus:admin'])->group(function () {
    Route::get('/homeAdmin', function () {
        return view('admin.dashboard',
            ['tittle' => 'Admin Dashboard']); 
    }) -> name('homePageAdmin');
});

Route::middleware(['auth','cekStatus:customer'])->group(function () {
    Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
});
