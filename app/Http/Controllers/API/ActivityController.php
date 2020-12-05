<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\PricingController;
use App\Models\NewActivity;
use App\Models\Queue;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function create($id) {

        $lastActivity = NewActivity::where('userId', $id)->orderBy('created_at', 'desc')->first();

        if($lastActivity) {
            $lastActivity->delete();
        }

        NewActivity::create([
            'userId' => $id
        ]);

        $users = User::all();

        foreach($users as $user) {
            $userId = $user->id;
            $lastActivity =  NewActivity::where('userId', $userId)->orderBy('created_at', 'desc')->first();

            if($lastActivity) {
                $current_time = new Carbon();
                $lastActivity_time = $lastActivity->created_at;

                if(strtotime($current_time) - strtotime($lastActivity_time) > 5) {
                    $inactiveUser = Queue::where('userId', $userId)->first();

                    if($inactiveUser) {
                        $position = $inactiveUser->position;
                        for($pos = $position + 1; $pos <= Queue::all()->count(); $pos++) {
                            $q = Queue::where('position', $pos)->first();
                            $q->position = $pos-1;
                            $q->update();
                        }


                        Queue::where('userId', $userId)->first()->delete();
                    }
                }
            }
        }

        return response()->json(200);
    }

    public function checkPosition($id) {
        $userInQueue = Queue::where('userId', $id)->first();

        if($userInQueue) {
            $pos = $userInQueue->position;
        } else {
            $pos = 'none';
        }

        return response()->json($pos);
    }

    public function addInQueue($id) {
        $this->create($id);

        $lastUser = Queue::orderBy('position', 'desc')->get()->first();

        $position = 1;

        if(!Queue::where('userId', $id)->first()) {
            $position = 1;
            if($lastUser) {
                $position =  Queue::orderBy('position', 'desc')->get()->first()->position + 1;
            }

            $user = Queue::create([
                'userId' => $id,
                'position' => $position
            ]);
        } else if($lastUser) {
            if($id != $lastUser->id) {
                $position = $lastUser->position;
            }
        }
        return response()->json($position);
    }

    public function removeInactive($id) {
        $userInQueue = Queue::where('userId', $id)->first();

        for($position = $userInQueue->position + 1; $position <= Queue::all()->count(); $position++) {
            Queue::where('position', $position)->update([
                'position' => $position - 1
            ]);
        }

        $userInQueue->delete();

        return response()->json('200');
    }
}
