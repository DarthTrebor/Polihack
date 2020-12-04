<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionsController extends Controller
{
    public function userIndex() {
        $prescriptions = Prescription::where('pacientId', Auth::id())->get();

        $data = array(
            'title' => 'Retete',
            'breadcrumbs' => 'Retetele mele',
            'prescriptions' => $prescriptions
        );

        return view('pages.userPanel.prescription')->with($data);
    }

    public function userView($id) {
        $prescription = Prescription::find($id);

        $data = array(
            'title' => 'Vezi reteta '.$prescription->title,
            'breadcrumbs' => 'Retetele mele',
            'prescription' => $prescription
        );

        return view('pages.userPanel.viewprescription')->with($data);
    }

    public function doctorIndex() {
        $prescriptions = Prescription::where('medicId', Auth::id());

        $data = array(
            'title' => 'Retete',
            'breadcrumbs' => 'Retetele mele',
            'prescriptions' => $prescriptions
        );

        return view('pages.doctorPanel.retete')->with($data);
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
