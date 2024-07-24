<?php

 use App\Http\Controllers\admin\direct\AdminCategoriesController;
use App\Http\Controllers\User\ProfileController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\seller\SellerProfileController;
 use App\Http\Controllers\seller\auth\LoginSellerrController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\CartItemController;
use App\Http\Controllers\seller\SellerController;
use App\Http\Controllers\direction\ProductsController;
use App\Http\Controllers\User\OrderItemController;
use App\Http\Controllers\direction\OrderRequestController;
use App\Http\Controllers\direction\ContactUsController;
use App\Http\Controllers\Delev\DelivieriesController;
use Illuminate\Support\Facades\Auth;
require __DIR__.'/admin.php';

require __DIR__.'/seller.php';
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
    return view('welcome');
});

Auth::routes(['verify'  =>true]);
Route::middleware('verified')->group(function(){
    Route::get('user/profile',[ProfileController::class,'index'])->name('user.profile');
    Route::get('user/becomeseller', [ProfileController::class,'becomeSeller'])
    ->name('user.become.seller');
    Route::get('user/profile/{user}/edit', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::post('user/profile/{user}/edit', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
    Route::post('/account/delete', [ProfileController::class, 'deleteAccount'])->name('account.delete');



});
Route::post('/user/profile/update-email', [ProfileController::class, 'updateEmail'])->name('user.profile.update.email');
Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/seller/home', [SellerController::class, 'home'])
->name('seller.home');

Route::get('/seller/home', [SellerController::class, 'index'])
->name('seller.home');

Route::get('seller/login', [LoginSellerrController::class, 'login'])
->name('seller.login');
Route::post('seller/login', [LoginSellerrController::class, 'authenticate'])
->name('seller.login.auth');

Route::get('seller/profile/setup', [SellerProfileController::class, 'setup'])
->name('seller.profile.setup');

Route::post('seller/profile', [SellerProfileController::class, 'store'])
->name('seller.profile');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/seller/{products}/products', [ProductsController::class, 'shopProducts'])->name('shop.products');


Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');


Route::post('/products', [ProductsController::class, 'store'])->name('products.store');


Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');

Route::get('products/{products}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::get('categories/{product}/Products',[ProductsController::class,'showProductsInCategory'])->name('categories.products');

Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');

Route::get('/orders', [OrderController::class, 'listOrders'])
->name('orders.index');
Route::get('/orders/get/orders', [OrderController::class, 'getOrders'])
->name('orders.get');
Route::post('/orders/add', [OrderController::class, 'addOrder'])
->name('orders.add');
Route::post('/orders/{orderId}/cancel', [OrderController::class, 'cancelOrder'])
->name('orders.cancel');
Route::post('/orders/{orderId}/approve', [OrderController::class, 'apprcoveOrder'])
->name('orders.approve');
Route::get('orders/show',[OrderController::class,'showOrders'])->name('ordershow');

Route::get('/cart/items', [CartItemController::class, 'index'])->name('cart.items.index');
Route::post('/cart/items', [CartItemController::class, 'store'])->name('cart.items.store');
Route::put('/cart/items/{id}', [CartItemController::class, 'update'])->name('cart.items.update');
Route::delete('/cart/items/{id}', [CartItemController::class, 'destroy'])->name('cart.items.destroy');



Route::get('/cart/items/show', [CartItemController::class, 'showCartItems'])->name('cartItemshow');


Route::post('/products/{id}/rate', [ProductsController::class, 'rate'])->name('products.rate');
Route::get('/popular/products', [ProductsController::class, 'popularProducts'])->name('popular.products');
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');


Route::get('/contact', [ContactUsController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/orders/request',[OrderController::class,'getOrderDetailes'])->name('order.detailes');
