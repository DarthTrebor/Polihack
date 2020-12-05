<?php

use Illuminate\Support\Facades\Hash;
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
    $data = array(
        'title' => 'NETMED',
        'breadcrumbs' => ''
    );
    return view('pages.landing')->with($data);
});


Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'userIndex'])->name('calendar-userIndex');
    Route::get('/panou-doctors/calendar', [App\Http\Controllers\CalendarController::class, 'userIndex'])->name('calendar-doctorIndex');
    Route::post('/calendar/createBooking', [App\Http\Controllers\CalendarController::class, 'doctorCreate'])->name('calendar-createBooking');

    Route::get('/retetele-mele', [App\Http\Controllers\PrescriptionsController::class, 'userIndex'])->name('prescriptions-userIndex');
    Route::get('/retetele-mele/{id}', [App\Http\Controllers\PrescriptionsController::class, 'userView'])->name('prescriptions-userView');
    Route::get('/panou-doctors/retetele-mele', [App\Http\Controllers\PrescriptionsController::class, 'doctorIndex'])->name('prescriptions-doctorIndex');

    Route::get('/asteptare/{medicName}', [App\Http\Controllers\QueueController::class, 'index'])->name('waiting-room');

    Route::get('/consultatie-medicala/doctor-{name}', [App\Http\Controllers\ExaminationController::class, 'index'])->name('asistance-room');

});

Auth::routes();

