<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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