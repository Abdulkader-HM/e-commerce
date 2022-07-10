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

Route::get('/', function () {
    return view('product.index');
});

Route::get('/create', function () {
    return view('product.create');
});

Route::get('/show', function () {
    return view('product.show');
});



// Route::controller(TestController::class)->Group(function () {
//     Route::get('test', 'test');
// });

// Route::controller(ProductController::class)->group(function () {
//     Route::get('index', 'index');
//     // Route::post('store', 'store')->name('store');
// });
