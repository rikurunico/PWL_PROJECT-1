<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return redirect()->route('LoginPage');
});

Route::get('/login', function () {
    return view('loginPage.loginPage',
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
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
});

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.homepage');

Route::middleware(['auth','cekStatus:customer'])->group(function () {
    // Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
    Route::get('/home', function () {
        return view('customer.dashboard',
            ['tittle' => 'Customer Dashboard']); 
    }) -> name('homePageCustomer');
});
