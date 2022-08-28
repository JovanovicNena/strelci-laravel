<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KlubKontroler;
use App\Http\Controllers\LigaKontroler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('liga', LigaKontroler::class)->only('index', 'show', 'store', 'destroy');
    Route::resource('klub', KlubKontroler::class)->only('index', 'show');
    Route::post('logout', [AuthController::class, 'logout']);
});
