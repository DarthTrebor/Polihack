<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Camera de asteptare',
            'breadcrumbs' => 'Asteptare'
        );
        return view('pages.userPanel.queue')->with($data);
    }
}
