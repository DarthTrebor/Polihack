<?php

namespace App\Http\Controllers;

use App\Models\NewActivity;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function create(Request $request) {
        NewActivity::find(Auth::id())->delete();

        NewActivity::create([
            'userId' => Auth::id()
        ]);

        return response()->json(200);
    }

    public function check() {
        $users = User::all();

        foreach($users as $user) {
            $id = $user->id;
            $lastActivity =  NewActivity::where('userId', $id)->orderBy('created_at', 'desc')->first();

            $current_time = Carbon::now();
            $lastActivity_time = $lastActivity->created_at;

            if(strtotime($current_time) - strtotime($lastActivity_time) > 5) {
                $inactiveUser = Queue::where('userId', $id)->first();

                $position = $inactiveUser->position;

                for($pos = $position + 1; $pos <= Queue::all()->count(); $pos++) {
                    Queue::where('position', $pos)->update([
                        'position' => $pos - 1
                    ]);
                }

                Queue::where('userId', $id)->first()->delete();
            }
        }

        return response()->json(Queue::where('userId', Auth::id())->position);
    }
}
