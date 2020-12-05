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

Route::get('/examination-room/newConversation/{userId}/{medicId}', [App\Http\Controllers\API\ChatController::class, 'onLoad']);
Route::post('/examination-room/sendMessage', [App\Http\Controllers\API\ChatController::class, 'sendMessage']);

Route::post('/prescription/add', [App\Http\Controllers\API\ChatController::class, 'addPrescription']);
Route::post('/booking/add', [App\Http\Controllers\API\ChatController::class, 'addBooking']);

Route::get('/endConversation/{medicId}/{userId}', [App\Http\Controllers\API\ChatController::class, 'endConversation']);
