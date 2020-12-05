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

class EndConversation implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function broadcastOn()
    {
        return ['examination-channel'];
    }

    public function broadcastAs()
    {
        return 'endConversation';
    }

    public function broadcastWith() {
        $test = $this->test;

        return [
            'test' => $test
        ];
    }
}
