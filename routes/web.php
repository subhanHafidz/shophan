<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarangController;

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
    return view ('welcome');
});

Route::get('/beranda', function () {
    return view ('beranda');
});
Route::get('user/logout',[Usercontroller::class,'logout']);

// Route::get('detail_product', function () {
//     return view('detail_product');
// });

Route::get('/template', function (){
    return view ('template');
});


Route::get('/product',[ProductController::class,'show']);
Route::get('product/add',[ProductController::class,'add']);
Route::post('product/create',[ProductController::class,'create']);
Route::get('product/hapus/{id}',[ProductController::class,'hapus']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);


Route::get('beranda',[BarangController::class,'show']);
Route::get('product/detail/{id}',[BarangController::class,'detail']);


