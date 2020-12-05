<?php

namespace App\Http\Controllers\API;

use App\Events\NewConverastion;
use App\Events\ReceivedMessage;
use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
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
}
