<?php

namespace App\Events;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewConverastion implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $conversation;

    public function __construct(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }

    public function broadcastOn()
    {
        return ['examination-channel'];
    }

    public function broadcastAs()
    {
        return 'newConversation';
    }

    public function broadcastWith() {
        $conversation = Conversation::find($this->conversation->id);
        $conversation->medic = User::find($conversation->medicId);
        $conversation->pacient = User::find($conversation->pacientId);
        return [
            'conversation' => $conversation
        ];
    }
}
