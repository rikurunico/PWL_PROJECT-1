<?php

use App\Http\Controllers\CustomerPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

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
    Route::get('/homeAdmin', [DashboardController::class, 'index']) -> name('homePageAdmin');
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
    Route::resource('orderDetail', OrderDetailController::class);
    Route::get('/admin/profil', [UserController::class, 'profil'])->name('profiladmin');
    Route::put('/admin/profil/{id}', [UserController::class, 'updateprofil']);
});
Route::get('/produk/cetak_pdf', [ProdukController::class, 'cetak_pdf'])->name('cetak_pdf');

Route::middleware(['auth','cekStatus:customer'])->group(function () {
    Route::get('/homecust', function () {
        return view('customerpage.home'); 
    })->name('homePageCustomer');
});

Route::get('/customer/produk/{keyword}',[CustomerPageController::class, 'produk'])->name('LD');
Route::get('/customer/supplier', [CustomerPageController::class, 'supplier']);
Route::get('/customer/profil', [CustomerPageController::class, 'profil'])->name('profile');
Route::put('/customer/profil/{id}', [CustomerPageController::class, 'update']);
Route::view('/customer/about', 'customerpage.about');

