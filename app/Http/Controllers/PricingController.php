<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Abonamente',
            'breadcrumbs' => 'Abonamente',

        );
        return view("/pages/userPanel/pricing")->with($data);
    }
}
