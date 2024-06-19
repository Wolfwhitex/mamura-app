<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TemplateController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// halaman non login
Route::get('/home', function () {
    return view('nonlogin.home');
});

Route::get('/about', function () {
    return view('nonlogin.about');
});

Route::get('/menu', function () {
    return view('nonlogin.menu');
});

Route::get('/join', function () {
    return view('nonlogin.join');
});

Route::get('/team', function () {
    return view('nonlogin.team');
});
// end halaman non login

Route::get('/cust_page', function () {
    return view('cust_page');
});

Route::get('/nasi', function () {
    return view('nasi');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/histori', function () {
    return view('histori');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/seller_page', function () {
    return view('seller.seller_page');
});

Route::get('/seller_edit', function () {
    return view('seller.seller_edit');
});

Route::get('/seller_produk', function () {
    return view('seller.seller_produk');
});

Route::get('/seller_transaksi', function () {
    return view('seller.seller_transaksi');
});

Route::get('/history_transaksi', function () {
    return view('seller.history_transaksi');
});

Route::get('/seller_profile', function () {
    return view('seller.seller_profile');
});
// Route::get('home',  [TemplateController::class, 'homePage']);
// Route::get('home/{logo}',  [TemplateController::class, 'homePage']);
// Route::get('/homepage/{logo}', [TemplateController::class, 'homePage'])->name('homepage');

Route::get('/home', [GeneralController::class, 'create'])->name('datatoko.create');
Route::get('/menu', [GeneralController::class, 'kategoricreate'])->name('kategori.create');
Route::get('/seller_profile', [GeneralController::class, 'sellercreate'])->name('seller.create');