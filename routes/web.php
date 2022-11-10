<?php

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

Route::get('/dashboard', function () {
    return view('welcome');
});//with login (aktifkan jika perlu)
// Route::get('/', function () {
//     return view('dashboard');
// });//without login (aktifkan jika perlu)
Route::get('/booking', function () {
    return view('booking.booking');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// 
require __DIR__.'/auth.php';
