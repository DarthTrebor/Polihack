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

Route::get('/newActivity/{id}', [App\Http\Controllers\API\ActivityController::class, 'create']);

Route::get('/checkPosition/{id}', [App\Http\Controllers\API\ActivityController::class, 'checkPosition']);

Route::get('/queue/add/{id}', [App\Http\Controllers\API\ActivityController::class, 'addInQueue']);

Route::get('queue/removeInactive/{id}', [App\Http\Controllers\API\ActivityController::class, 'removeInactive']);
