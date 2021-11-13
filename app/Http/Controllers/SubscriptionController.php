<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SubscriberRequest;
use App\Http\Resources\CreateSubscriptionResource;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function subscribeToTopic(Request $request, $topic)
    {

        $validator = Validator::make($request->all(), [
            "url" => ["required", "url"]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $subscription = $this->subscriptionService->createSubscription($request->url, $topic);

        if($subscription["success"])
            return response()->json(new CreateSubscriptionResource($subscription["data"]));

        return response()->json($subscription, 201);
    }


    public function firstSubscriber(Request $request)
    {
        Log::info('First Subscriber playload '.json_encode($request->all()));
        return response($request->all());

    }

    public function secondSubscriper(Request $request)
    {
        Log::info('Second Subscriber playload '.json_encode($request->all()));
        return response($request->all());
    }

    public function thirdSubscriper(Request $request)
    {
        Log::info('Third Subscriber playload '.json_encode($request->all()));
        return response($request->all());

    }

}
