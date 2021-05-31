<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VilleController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoyageController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/voyage', [VoyageController::class, 'index']);
Route::get('/ville', [VilleController::class, 'index']);
Route::get('/vill', [VilleController::class, 'me']);

Route::post('upload-agence', [AgenceController::class, 'upload']);
Route::get('voyage/search/{id}', [VoyageController::class, 'show']);
Route::post('client', [ClientController::class, 'addClient']);
