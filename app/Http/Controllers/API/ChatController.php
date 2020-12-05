<?php

namespace App\Http\Controllers\API;

use App\Events\EndConversation;
use App\Events\NewConverastion;
use App\Events\ReceivedMessage;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Prescription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function onLoad($userId, $medicId) {
        $conversation = Conversation::create([
            'medicId' => $medicId,
            'pacientId'  => $userId
        ]);

        $welcomeMessage = Message::create([
            'senderId' => $medicId,
            'receiverId' => $userId,
            'conversationId' => $conversation->id,
            'text' => 'Salut, cu ce te pot ajuta?'
        ]);

        broadcast(new NewConverastion($conversation));
        broadcast(new ReceivedMessage($welcomeMessage));

        return response()->json($conversation);
    }

    public function sendMessage(Request $request) {
        $message = Message::create([
            'senderId'       => $request->input('senderId'),
            'receiverId'     => $request->input('receiverId'),
            'text'           => $request->input('text'),
            'conversationId' => $request->input('conversationId')
        ]);

        broadcast(new ReceivedMessage($message));

        return response()->json($message);
    }

    public function addPrescription(Request $request) {
        $title        = $request->input('title');
        $cnp          = $request->input('cnp');
        $pacient      = User::find($request->input('pacientId'));
        $sex          = $request->input('sex');
        $age          = $request->input('age');
        $city         = $request->input('city');
        $county       = $request->input('county');
        $address      = $request->input('address');
        $prescription = $request->input('prescription');
        $diagnostic   = $request->input('diagnostic');
        $id           = Prescription::orderBy('created_at', 'desc')->first()->id + 1;

        $content = '<h5 class="text-center">Unitatea Medicala : NEDMTED - Online</h5>
                    <h5 class="text-center">Localitatea : Braila</h5>
                    <h5 class="text-center">Judetul : Braila</h5>
                    <h5 class="text-danger float-right"> Gratuit: DA</h5>
                    <div class="text-center pt-20">
                        <h2>'.$title.'</h2>
                        <h3>CNP: '.$cnp.'</h3>
                        <h3>Nume:'.$pacient->lastname.'</h3>
                        <h3>Prenume:'.$pacient->firstname.'</h3>
                        <h3>Sex:'.$sex.'</h3>
                        <h3>Varsta:'.$age.'</h3>
                        <h3>Judet:'.$county.'</h3>
                        <h3>Oras:'.$city.'</h3>
                        <h3>Adresa:'.$address.'</h3>
                        <h3>Id fisa medicala: #'.$id.' </h3>
                    </div>
                    <div class="mt-20">
                        <h1 class="text-center">Diagnostic</h1>
                        <textarea class="form-control" rows="10" disabled="disabled">'.$diagnostic.'</textarea>
                    </div>
                    <div class="mt-20">
                        <h1 class="text-center">Reteta propriu zisa</h1>
                        <textarea class="form-control" rows="10" disabled="disabled">'.$prescription.'</textarea>
                    </div>
                    <div class="mt-20">
                        <h2 class="text-right">2020© NETMED</h2>
                    </div>
                    ';

        Prescription::create([
            'content' => $content,
            'title'   => $title,
            'pacientId' => $pacient->id,
            'medicId'   => $request->input('medicId')
        ]);

        return response()->json('200');
    }

    public function addBooking(Request $request) {
        $dateStart  = strtotime($request->input('date'));
        $timeStart  = strtotime($request->input('time'));

        $startsAt = Carbon::create(
            date('Y', $dateStart), date('m', $dateStart), date('d', $dateStart),
            date('H', $timeStart), date('i', $timeStart), 0
        );

        Booking::create([
            'doctorId' => $request->input('medicId'),
            'userId' => $request->input('pacientId'),
            'startsAt' => $startsAt
        ]);

        return response()->json(200);
    }

    public function endConversation($medicId, $userId) {
        broadcast(new EndConversation('test'));

        return response()->json(200);
    }
}
