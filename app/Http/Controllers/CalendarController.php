<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function userIndex() {
        $bookings = Booking::where('userId', Auth::id())->get();

        $data = array(
            'title' => 'Programari',
            'breadcrumbs' => 'Calendar',
            'bookings' => $bookings
        );

        return view('pages.userPanel.calendar')->with($data);
    }

    public function doctorIndex() {
        $bookings = Booking::where('userId', Auth::id());

        $data = array(
            'title' => 'Programari',
            'breadcrumbs' => 'Calendar',
            'bookings' => $bookings
        );

        return view('pages.doctorPanel.calendar')->with($data);
    }

    public function create(Request $request) {
        Booking::create([
            'scheduled' => $request->input('inputDate'),
            'userId' => $request->input('inputClientID')
        ]);

        return redirect()->back();
    }

    public function delete($id) {
        Booking::find($id)->delete();

        return redirect()->back();
    }
}
