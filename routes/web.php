<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('product.index');
// });
// Route::post('products/store', [ProductController::class, 'store']);
// Route::resource('products', ProductController::class);

Route::controller(ProductController::class)->group(function () {
    Route::get('products/index', 'index')->name('index');
    Route::get('products/create', 'create')->name('create');
    Route::post('products/store', 'store')->name('store');
    Route::get('products/show', 'show')->name('show');
    Route::get('products/edit/{id}', 'edit')->name('edit');
    Route::put('products/update{id}', 'update')->name('update');
    Route::get('products/delete/{id}', 'destroy')->name('delete');
    Route::get('products/delete/all','products')->name('delete.all');
    Route::get('products/truncate','truncate')->name('truncate');
});
