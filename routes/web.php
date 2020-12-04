<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'userIndex'])->name('calendar-userIndex');
Route::get('/panou-doctor/calendar', [App\Http\Controllers\CalendarController::class, 'userIndex'])->name('calendar-doctorIndex');
Route::post('/calendar/createBooking', [App\Http\Controllers\CalendarController::class, 'doctorCreate'])->name('calendar-createBooking');

Route::get('/retetele-mele', [App\Http\Controllers\PrescriptionsController::class, 'userIndex'])->name('prescriptions-userIndex');
Route::get('/retetele-mele/{id}', [App\Http\Controllers\PrescriptionsController::class, 'userView'])->name('prescriptions-userView');
Route::get('/panou-doctor/retetele-mele', [App\Http\Controllers\PrescriptionsController::class, 'doctorIndex'])->name('prescriptions-doctorIndex');

Route::get('/pricing', [App\Http\Controllers\PricingController::class, 'index'])->name('pricing-index');
