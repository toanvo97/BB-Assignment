<?php

use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\NewsDetailController;
use App\Http\Controllers\client\Products_DetailController;
use App\Http\Controllers\client\ProductsController;
use App\Http\Controllers\client\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::group(['prefix' => 'product'], function(){
    Route::get('/', [ProductsController::class, 'index'])->name('product.index');
    Route::get('/ajax-fetch-product', [ProductsController::class, 'fetchProduct'])->name('product.index.ajax');
    Route::get('/{id}', [ProductsController::class, 'show'])->name('product.detail');
});

Route::group(['prefix' => 'cart'], function(){
    Route::get('/', [CartController::class, 'index'])->name('product.cart.index');
    Route::post('/store', [CartController::class, 'addProductToCart'])->name('product.cart.store');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/login',[UserController::class, 'showLoginForm'])->name('user.client.login.index');
    Route::post('/login-store',[UserController::class, 'login'])->name('user.client.login');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.client.logout');
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('user.client.signup');
    Route::post('/register', [UserController::class, 'register'])->name('user.client.register');
});
// Route::get('/san-pham',[ProductsController::class,'index'])->name('products');
// Route::get('/chi-tiet-san-pham',[Products_DetailController::class,'index'])->name('productDetail');
Route::get('/lien-he',[ContactController::class,'index'])->name('contact');
Route::get('/tin-tuc', [NewsController::class,'index'])->name('news');
Route::get('/chi-tiet-tin-tuc', [NewsDetailController::class,'index'])->name('newsDetail');
