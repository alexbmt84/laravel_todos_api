<?php

use App\Http\Controllers\TodosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/todos", [TodosController::class, 'index']);
Route::post("/todos", [TodosController::class, 'store']);
Route::post("/todos/delete", [TodosController::class, 'delete']);
Route::post("/todos/complete", [TodosController::class, 'complete']);
