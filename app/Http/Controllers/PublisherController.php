<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewTopicPublished;

class PublisherController extends Controller
{
    //
    public function publishSubscription(Request $request, $topic)
    {
        $subscribers = $this->subscriptionService->getByTopic($topic);

        if($subscribers->count() > 0) {
            event(new NewTopicPublished($subscribers, $request->all()));

            return response()->json(["message" =>"Message published"]);
        }
        return response()->json(["message" =>"Wrong Topic"]);
    }
}
