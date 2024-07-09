<?php

use App\Http\Controllers\Indexcontroller;
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
