<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\ProductController;
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
Route::get('detail-product',[Indexcontroller::class,'DetailController'])->name('detailPro');


// route admin
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('variant',VariantController::class);
    Route::resource('banner',BannerController::class);

});
