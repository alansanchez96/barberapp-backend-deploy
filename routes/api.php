<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Barber\BarberController;
use App\Http\Controllers\Api\Cite\CiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(
    function () {
        Route::get('/users', 'users');
        Route::post('/user/login', 'login');
        Route::post('/user/logout', 'logout');
    }
);

Route::controller(CiteController::class)->group(
    function () {
        Route::get('/cites', 'getCites');
    }
);

Route::controller(BarberController::class)->group(
    function () {
        Route::get('/barbers', 'getBarbers');
    }
);
