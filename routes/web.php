<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ShoppingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);

Route::get('/about', [PagesController::class,'about']);
Route::get('/cakes', [PagesController::class,'cakes']);
Route::get('/pastries', [PagesController::class,'pastries']);
Route::get('/training', [PagesController::class,'training']);
Route::get('/blog ', [PagesController::class,'blog']);
Route::get('/checkout', [PagesController::class,'checkout']);
Route::get('/shopping-cart', [PagesController::class,'shopping-cart']);

Route::get('/store', [StoreController::class,'store']);
