<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TagsController;

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


// Login
Route::get('/','App\Http\Controllers\LoginController@showFormLogin')->name('login');
Route::post('/login/do','App\Http\Controllers\LoginController@login')->name('login.do');
Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('/index',[LoginController::class,'index'])->name('index');


//Produtos

Route::get('/products/itens', [ProductsController::class, 'productsItens'])->name('products.itens');
Route::resource('products',ProductsController::class);


//Tags
Route::get('/tags/products', [TagsController::class, 'tagsItens'])->name('tags.itens');
Route::resource('tags',TagsController::class);


