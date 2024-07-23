<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\VariantController;
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

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
// cấu trúc viết router
// Route::get/post/delete/patch/resource('/product/{id}'[controller muốn trỏ đến::class,'tên function'])

Route::get('/',[Indexcontroller::class,'HomeController']);
Route::get('detail-product/{id}',[Indexcontroller::class,'DetailController'])->name('detailPro');
Route::get('add-cart',[CartController::class,'addCart'])->name('addCart');
Route::get('check-cart',[CartController::class,'CheckCart'])->name('CheckCart');
Route::get('update-cart',[CartController::class,'UpdateCart'])->name('UpdateCart');



// route admin
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('variant',VariantController::class);
    Route::resource('banner',BannerController::class);
    Route::resource('sale',SaleController::class);



});


Route::get('/home', [Indexcontroller::class, 'HomeController'])->name('home');
Route::post('search', [Indexcontroller::class, 'search'])->name('search');
// Authentication Routes...
Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class,'register']);

// Password Reset Routes...
Route::get('password/reset', [ResetPasswordController::class,'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::post('password/emails',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// Cart
Route::get('cart/{id}',[IndexController::class,'showCart'])->name('cart');
Route::get('update_qt_cart',[Indexcontroller::class,'cartQt'])->name('cartQt');
// Checkout
Route::get('checkout/{id}',[Indexcontroller::class,'checkout'])->name('checkout');

// Sale
