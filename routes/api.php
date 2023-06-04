<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
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

Route::get('/todo', [TodoController::class, "index"]);
Route::get('/user', [UserController::class, "index"]);

Route::post('/todo', [TodoController::class, "store"]);
Route::post('/user', [UserController::class, "create"]);

Route::get('/todo/{id}', [TodoController::class, "show"]);

Route::put('/todo/{id}', [TodoController::class, "update"]);

Route::delete('/todo/{id}', [TodoController::class, "destroy"]);
Route::delete('/user/{id}', [UserController::class, "delete"]);
