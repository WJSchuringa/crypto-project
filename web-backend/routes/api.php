<?php

use App\Http\Controllers\TestTableController;
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

//public routes
Route::get('/test', function () {
    return 'test success';
});
Route::apiResource('test_table', TestTableController::class);

//
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function () {
        return response()->json(auth()->user());
    });
});
