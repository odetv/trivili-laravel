<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('package',[BookingController::class,'package'])->name('package');

Route::get('checkout',[BookingController::class,'checkout'])->name('checkout');

Route::get('/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::resource('admin', AdminController::class);
});

Route::get('comunity/{id}', [AdminController::class,'comunity'])->name('paket.comunity');

// Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//     Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
//     Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

//     Route::group(['middleware' => 'adminauth'], function () {
//         Route::get('/', function () {
//             return view('admin.daftarpaket');
//         })->name('adminDashboard');

//     });
// });


require __DIR__.'/auth.php';