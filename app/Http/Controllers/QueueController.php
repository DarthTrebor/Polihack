<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index($medicName) {
        $data = array(
            'title' => 'Camera de asteptare',
            'breadcrumbs' => 'Asteptare',
            'medic' => User::where('lastname', $medicName)->first()
        );
        return view('pages.userPanel.queue')->with($data);
    }
}
