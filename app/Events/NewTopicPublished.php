<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewTopicPublished
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $subscribers;
    public $payload;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($subscribers, $payload)
    {
        $this->subscribers = $subscribers;
        $this->payload = $payload;
    }
}
