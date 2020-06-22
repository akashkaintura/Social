<?php

namespace App\Http\Controllers;

use App\Plan;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create(Request $request, Plan $plan)
{
        if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
            return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        }
        $plan = Plan::findOrFail($request->get('plan'));

        $request->user()
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);

        return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
}
}
