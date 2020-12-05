<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExaminationController extends Controller
{
    public function index($name) {
        $firstInQueue = Queue::where('position', 1)->first();
        if($firstInQueue && $firstInQueue->userId == Auth::id()) {
            $medic = User::where('lastname', $name)->first();

            if(!$medic) {
                return redirect()->back()->withErrors('Acest doctor nu exista!');
            }

            $data = array(
                'title' => 'Camera de consultanta',
                'breadcrumbs' => 'Consultatie Medicala',
                'medic' => $medic
            );
            return view('pages.userPanel.examination')->with($data);
        }
        return redirect()->route('home')->withErrors( 'Nu esti inca primul in coada!');
    }

}
