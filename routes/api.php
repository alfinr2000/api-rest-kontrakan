<?php

use App\Http\Controllers\KontrakanController;
use App\Http\Controllers\GetByIdController;
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

Route::get('kontrakan',[KontrakanController::class,'index']);
Route::get('Idkontrakan',[GetByIdController::class,'showbyId']);
Route::post('kontrakan',[KontrakanController::class,'create']);
Route::put('kontrakan',[KontrakanController::class,'update']);
Route::delete('kontrakan',[KontrakanController::class,'delete']);
