<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('booking',[BookingController::class,'index'])->name('booking');

Route::get('/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::resource('admin', AdminController::class);
});

require __DIR__.'/auth.php';