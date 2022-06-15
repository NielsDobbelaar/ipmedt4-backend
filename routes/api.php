<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bedrijven', [\App\Http\Controllers\BedrijvenController::class, 'index']);

Route::post('/irrelevant', [\App\Http\Controllers\BedrijvenController::class, 'store']);
Route::put('/planLijst', [\App\Http\Controllers\BedrijvenController::class, 'update']);
