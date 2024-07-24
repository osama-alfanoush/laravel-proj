<?php


use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\auth\AdminLoginController;
use App\Http\Controllers\admin\auth\AdminRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\direct\AdminProductsController;
use App\Http\Controllers\admin\direct\AdminCategoriesController;
use App\Http\Controllers\direction\ProductsController;
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin/dashboard/login',[AdminLoginController::class,'login'])->name('admin.dashboard.login');
Route::post('admin/dashboard/login',[AdminLoginController::class,'checkLogin'])->name('admin.dashboard.check');

Route::get('admin/dashboard/register',[AdminRegisterController::class,'register'])->name('admin.dashboard.register');
Route::post('admin/dashboard/register',[AdminRegisterController::class,'store'])->name('admin.dashboard.store');


    Route::get('category/requests', [AdminCategoriesController::class, 'indexReq'])->name('admin.category_requests.index');

    Route::get('category/requests/{id}/approve', [AdminCategoriesController::class, 'approve'])->name('admin.category_requests.approve');
    Route::get('category/requests/{id}/cancel', [AdminCategoriesController::class, 'cancel'])->name('admin.category_requests.cancel');
    Route::get('categories', [AdminCategoriesController::class, 'index'])->name('categories.index');
    Route::post('categories', [AdminCategoriesController::class, 'store'])->name('categories.store');
    Route::get('categories/create', [AdminCategoriesController::class, 'create'])->name('categories.create');
    Route::get('categories/{id}/edit', [AdminCategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{id}', [AdminCategoriesController::class, 'update'])->name('categories.update');
    Route::delete('categories/{id}', [AdminCategoriesController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories/{id}/show', [AdminCategoriesController::class, 'show'])->name('categories.show');



    Route::post('admin/dashboard/logout',[AdminLoginController::class,'logout'])->name('admin.dashboard.logout');
    Route::get('admin/dashboard/home',[AdminController::class,'index'])->name('admin.dashboard.home');


