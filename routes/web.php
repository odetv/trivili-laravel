<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Livewire\ProductTable;

Route::get('/',[HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware('admin')->group(function () {
    Route::resource('admin', AdminController::class);
});
Route::get('/action', [AdminController::class, 'action'])->name('action');

Route::get('comunity/{id}', [AdminController::class,'comunity'])->name('paket.comunity');

Route::get('package', [PackageController::class, 'package'])->name('package');
Route::get('checkout', [PackageController::class, 'checkout'])->name('checkout');
Route::get('detail/{package_id}', [PackageController::class, 'detail']);
Route::get('search', [PackageController::class, 'search']);
Route::get('add-to-cart/{package_id}', [PackageController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [PackageController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PackageController::class, 'remove'])->name('remove_from_cart');

require __DIR__.'/auth.php';