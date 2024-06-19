<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\GeneralController;
use App\Http\Middleware\SellerMiddleware;
use App\Http\Controllers\ProductController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginuser', function () {
    return view('loginuser');
});
Route::post('/user/login', [UserController::class, 'loginuser']);

Route::get('/loginseller', function () {
    return view('loginseller');
});
Route::post('/loginseller', [SellerController::class, 'loginseller']);

Route::get('/registeruser', function () {
    return view('registeruser');
});
Route::post('/user/register', [UserController::class, 'registeruser']);

Route::get('/registerseller', function () {
    return view('registerseller');
});
Route::post('/seller/register', [SellerController::class, 'registerseller']);

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


// Route::get('/payment', function () {
//     return view('payment');
// });


Route::middleware(['auth:seller'])->group(function () {
    Route::get('/seller_page', [ProductController::class, 'index']);
    

    Route::get('/seller_edit', [ProductController::class, '']);

    // Example of a route definition with a placeholder for product ID
    Route::get('/seller/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');


// Route untuk menyimpan perubahan data produk
   Route::post('/seller/update/{id}', [ProductController::class, 'update'])->name('products.update');

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

    Route::post('/logout', [SellerController::class,'logoutseller'])->name('logout');

    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/seller/products', [ProductController::class, 'index']);

});



    // // Halaman seller page
    // Route::get('/seller_page', function () {
    //     return view('seller.seller_page');
    // });
    
    // Route::get('/seller_edit', function () {
    //     return view('seller.seller_edit');
    // });
    
    // Route::get('/seller_produk', function () {
    //     return view('seller.seller_produk');
    // });
    
    // Route::get('/seller_transaksi', function () {
    //     return view('seller.seller_transaksi');
    // });
    
    // Route::get('/history_transaksi', function () {
    //     return view('seller.history_transaksi');
    // });
    
    // Route::get('/seller_profile', function () {
    //     return view('seller.seller_profile');
    // });

// Route::get('home',  [TemplateController::class, 'homePage']);
// Route::get('home/{logo}',  [TemplateController::class, 'homePage']);
// Route::get('/homepage/{logo}', [TemplateController::class, 'homePage'])->name('homepage');

Route::get('/home', [GeneralController::class, 'create'])->name('datatoko.create');
Route::get('/menu', [GeneralController::class, 'kategoricreate'])->name('kategori.create');
// Route::get('/seller_profile', [GeneralController::class, 'sellercreate'])->name('seller.create');