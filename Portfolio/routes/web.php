<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\TasteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Taste;
use App\Models\Topping;
use App\Models\User;

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

Route::get('/', function () {
    return view('/main');
});
Route::get('/register', [App\Http\Controllers\register::class, 'show']);
Route::get('/main', [App\Http\Controllers\main::class, 'show'])->name('main');
Route::get('/products', [TasteController::class, 'show'])->name('products');
Route::get('/products/{id}', [TasteController::class, 'get'])->name('product');
Route::get('/cart', [CartController::class, 'show'])->name('cart_show');
Route::get('/cart/add/{id}', [CartController::class, 'store'])->name('cart_add');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart_remove');
Route::get('/cart/empty', [CartController::class, 'empty'])->name('cart_empty');
Route::get('/order/add', [OrderController::class, 'store'])->name('order_add');
Route::get('/order/show', [OrderController::class, 'show'])->name('order_show');
Route::get('/order/details/{id}', [OrderController::class, 'details'])->name('order_details');
////////////////////////////////////////////// admin //////////////////////////////////////////////////
Route::get('/admin', [App\Http\Controllers\admin::class, 'show']);
Route::get('/addproducts', [App\Http\Controllers\admin::class, 'addproducts']);
Route::get('/editproducts', [App\Http\Controllers\admin::class, 'editproducts']);
////////////////////////////////////////////// admin taste //////////////////////////////////////////////////
Route::get('/addTaste', [App\Http\Controllers\addTaste::class, 'show']);
Route::post('addTaste', [App\Http\Controllers\addTaste::class, 'store']);
Route::get('/editTaste', function () {
    $taste = Taste::all();
    return view('admin/editTaste', ['taste' => $taste]);
});
Route::get('/editTaste/{id}', [App\Http\Controllers\editTaste::class, 'show']);
Route::post('/editTaste/{id}', [App\Http\Controllers\editTaste::class, 'update']);
////////////////////////////////////////////// admin topping //////////////////////////////////////////////////
Route::get('/addTopping', [App\Http\Controllers\addTopping::class, 'show']);
Route::post('addTopping', [App\Http\Controllers\addTopping::class, 'store']);
Route::get('/editTopping', function () {
    $topping = Topping::all();
    return view('admin/editTopping', ['topping' => $topping]);
});
Route::get('/editTopping/{id}', [App\Http\Controllers\editTopping::class, 'show']);
Route::post('/editTopping/{id}', [App\Http\Controllers\editTopping::class, 'update']);
////////////////////////////////////////////// dashboard //////////////////////////////////////////////////
Route::get('/dashboard', [App\Http\Controllers\dashboard::class, 'show'])->middleware(['auth'])->name('dashboard');
Route::get('/editUser', function () {
    $user = auth()->user();
    return view('editUser', ['user' => $user]);
});
Route::get('/editUser/{id}', [App\Http\Controllers\editUser::class, 'show']);
Route::post('/editUser/{id}', [App\Http\Controllers\editUser::class, 'update']);

require __DIR__.'/auth.php';
