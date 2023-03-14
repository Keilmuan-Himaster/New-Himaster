<?php

use App\Http\Controllers\api\InventarisController;
use App\Http\Controllers\api\PresensiController;
use App\Http\Controllers\api\UserController;
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

Route::post('login', [UserController::class,'index']);
Route::middleware('auth:sanctum')->group(function(){
    Route::resource('inventaris', InventarisController::class);
});
Route::post('login/presensi',[UserController::class,'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('index',[PresensiController::class,'index']);
    Route::post('post',[PresensiController::class,'post']);
    Route::post('addEvent',[PresensiController::class,'addEvent']);
    Route::post('logout',[PresensiController::class,'logout']);
});
