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

Route::get('/', [App\Http\Controllers\LoginController::class, 'domain']);

Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
    Route::post('login', [App\Http\Controllers\LoginController::class, 'loginPost']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    Route::get('home', function () {
        return view('welcome');
        // return view('vendor.laravelpwa.offline');
    })->name('home');

    Route::get('offline', function () {
        return view('vendor.laravelpwa.offline');
    })->name('offline');
    
});