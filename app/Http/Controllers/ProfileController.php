<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Profilul meu',
            'breadcrumbs' => 'Profil'
        );
        return view('pages.userPanel.profile')->with($data);
    }

    public function updateProfile(Request $request) {
        $user = Auth::user();


        $user->update([
            'lastname' => $request->input('lastname') ? $request->input('lastname') : '',
            'firstname' => $request->input('firstname') ? $request->input('firstname') : '',
            'specialization' => $request->input('specialization') ? $request->input('specialization') : '',
            'description' => $request->input('description') ? $request->input('description') : '',
            'CNP' => $request->input('cnp') ? $request->input('cnp') : '',
            'phone' => $request->input('phone') ? $request->input('phone') : '',
            'email' => $request->input('email') ? $request->input('email'): '',
            'rank'  => $request->input('rank')
        ]);

        return redirect()->back()->with('status', 'Profilul a fost actualizat!');
    }
}
