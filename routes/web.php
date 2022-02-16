<?php

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

Route::get('/', function () {
    return redirect('products');
});

Route::get('/products/itens', [ProductsController::class, 'productsItens'])->name('products.itens');
Route::resource('products',ProductsController::class);
Route::resource('tags',TagsController::class);


