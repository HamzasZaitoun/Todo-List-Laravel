<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskController::class,"index"]);

Route::get('/tasks', [TaskController::class,"index"]);

Route::get('/tasks/create',[TaskController::class,"create"]);

Route::POST('/tasks',[TaskController::class,"store"]);