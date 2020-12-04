<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors = User::where('rank', 1)->get();

        $data = array(
            'title' => 'Acasa',
            'breadcrumbs' => '',
            'doctors' => $doctors
        );

        return view('pages.userPanel.pricing')->with($data);
    }
}
