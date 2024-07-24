<?php

use App\Http\Controllers\admin\direct\AdminCategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\seller\SellerProfileController;
use App\Http\Controllers\seller\auth\LoginSellerrController;
use App\Http\Controllers\seller\SellerController;
use App\Http\Controllers\seller\direct\SellerCategoriesController;
use App\Http\Controllers\seller\direct\SellerProductsController;
/*
|--------------------------------------------------------------------------
| seller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




  Route::get('seller/login', [LoginSellerrController::class, 'login'])
  ->name('seller.login');
  Route::post('seller/login', [LoginSellerrController::class, 'authenticate'])
  ->name('seller.login.auth');

  Route::prefix('seller')->group(function() {
    Route::post('categories/request', [SellerController::class, 'requestCategory'])->name('categories.request');
    Route::get('categories/request', [SellerController::class, 'reqindex'])->name('categories.request.index');

});




Route::middleware('verified')->prefix('seller')->name('seller.')->group(function() {


  Route::get('seller/profile/setup', [SellerProfileController::class, 'setup'])
  ->name('seller.profile.setup');

Route::post('seller/profile', [SellerProfileController::class, 'store'])
  ->name('seller.profile');

  Route::get('/seller/home', [SellerController::class, 'index'])
  ->name('seller.home');

});


