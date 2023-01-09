<?php

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

//Route::get('/',[App\Http\Controllers\AdsController::class,'index']);

Route::name('categories.')->prefix('categories')->group(function (){
    Route::get('/',[App\Http\Controllers\CategoriesController::class,'index'])->name('index');
    Route::get('/create',[App\Http\Controllers\CategoriesController::class,'create'])->name('create');
    Route::post('/',[App\Http\Controllers\CategoriesController::class,'store'])->name('store');
    Route::get('/{id}',[App\Http\Controllers\CategoriesController::class,'show'])->name('show');
    Route::get('/{categories}/edit',[App\Http\Controllers\CategoriesController::class,'edit'])->name('edit');
    Route::put('/{categories}',[App\Http\Controllers\CategoriesController::class,'update'])->name('update');
    Route::delete('/{categories}',[App\Http\Controllers\CategoriesController::class,'destroy'])->name('destroy');
});

Route::name('products.')->prefix('products')->group(function (){
    Route::get('/',[App\Http\Controllers\ProductsController::class,'index'])->name('index');
    Route::get('/create',[App\Http\Controllers\ProductsController::class,'create'])->name('create');
    Route::post('/',[App\Http\Controllers\ProductsController::class,'store'])->name('store');
    Route::get('/{id}',[App\Http\Controllers\ProductsController::class,'show'])->name('show');
    Route::get('/{products}/edit',[App\Http\Controllers\ProductsController::class,'edit'])->name('edit');
    Route::put('/{products}',[App\Http\Controllers\ProductsController::class,'update'])->name('update');
    Route::delete('/{products}',[App\Http\Controllers\ProductsController::class,'destroy'])->name('destroy');
});
