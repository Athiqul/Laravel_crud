<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Products;

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
//Home Page
Route::get('/',[Products::class,'index'])->name('home');
Route::get('/create',[Products::class,'create'])->name('product.create');
Route::post('/store',[Products::class,'store'])->name('product.store');
Route::get('/show/{id}',[Products::class,'show'])->name('product.show');
Route::get('/edit/{id}',[Products::class,'edit'])->name('product.edit');
Route::post('/update/{id}',[Products::class,'storeUpdate'])->name('product.update');
Route::get('/status/{id}',[Products::class,'statusChange'])->name('product.status');
Route::get('/product-delete/{id}',[Products::class,'deleteProduct'])->name('product.delete');



