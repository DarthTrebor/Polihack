<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    public function index($medicName) {
        if(Auth::user()->rank == 1) {
            return redirect()->back()->withErrors('Doctorii nu pot vizita alti doctori!');
        }
        if(!User::where('lastname', $medicName)->first()) {
            return redirect()->route('home')->withErrors('Acest medic nu exista!');
        }
        $data = array(
            'title' => 'Camera de asteptare',
            'breadcrumbs' => 'Asteptare',
            'medic' => User::where('lastname', $medicName)->first()
        );
        return view('pages.userPanel.queue')->with($data);
    }
}
