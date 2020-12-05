<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index($name) {
        $medic = User::where('lastname', $name)->first();

        $data = array(
            'title' => 'Camera de consultanta',
            'breadcrumbs' => 'Consultatie Medicala',
            'medic' => $medic
        );

        return view('pages.userPanel.examination')->with($data);
    }

}
