<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProductsController;


Route::get('/',[HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::resource('admin', AdminController::class);
});

Route::get('comunity/{id}', [AdminController::class,'comunity'])->name('paket.comunity');

Route::get('package', [BookingController::class, 'package']);
Route::get('checkout', [BookingController::class, 'checkout'])->name('checkout');
Route::get('detail/{package_id}', [BookingController::class, 'detail']);
Route::get('search', [BookingController::class, 'search']);
Route::get('add-to-cart/{package_id}', [BookingController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [BookingController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [BookingController::class, 'remove'])->name('remove_from_cart');

require __DIR__.'/auth.php';