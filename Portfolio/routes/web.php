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
Route::get('/projects', [App\Http\Controllers\projects::class, 'show'])->name('projects');
Route::get('/aboutme', [App\Http\Controllers\aboutme::class, 'show'])->name('aboutme');
require __DIR__.'/auth.php';
