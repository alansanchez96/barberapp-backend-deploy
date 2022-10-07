<?php

use App\Http\Controllers\View\AuthController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.index')->middleware('guest');
    Route::post('/login', 'login')->name('auth.login');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard')->middleware('auth');
    Route::get('/logout', 'logout')->name('auth.logout')->middleware('auth');
});
