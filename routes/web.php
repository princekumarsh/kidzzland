<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//     return view('home');
// });

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/blog1', [UserController::class, 'blog1'])->name('blog1');
Route::get('/blog-details', [UserController::class, 'blogDetails'])->name('blogDetails');
Route::get('/shop', [UserController::class, 'shop'])->name('shop');
Route::get('/test', [UserController::class, 'test'])->name('test');
Route::get('/details', [UserController::class, 'product'])->name('product');
Route::get('/cart', [UserController::class, 'cart'])->name('cart');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
Route::get('/checkout-payment', [UserController::class, 'checkoutPayment'])->name('checkoutPayment');
Route::get('/order', [UserController::class, 'order'])->name('order');
Route::get('/order-details', [UserController::class, 'orderDetails'])->name('orderDetails');
Route::get('/track-order', [UserController::class, 'trackOrder'])->name('trackOrder');
Route::get('/account-details', [UserController::class, 'accountDetails'])->name('accountDetails');
Route::get('/account-address', [UserController::class, 'accountAddress'])->name('accountAddress');
Route::get('/edit-address', [UserController::class, 'editAddress'])->name('editAddress');
Route::get('/add-address', [UserController::class, 'addAddress'])->name('addAddress');
Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
Route::get('/support-ticket', [UserController::class, 'supportTicket'])->name('supportTicket');
Route::get('/ticket-details', [UserController::class, 'ticketDetails'])->name('ticketDetails');
Route::get('/moments', [UserController::class, 'moments'])->name('moments');
Route::get('/moment-details', [UserController::class, 'momentdetails'])->name('momentdetails');
Route::get('/moment-profile', [UserController::class, 'momentProfile'])->name('momentProfile');
