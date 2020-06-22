<?php

namespace App\Http\Controllers;
use App\User;
use App\Plan;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
            $plans = Plan::all();
            return view('plans.index', compact('plans'));
    }

    public function show(Request $request, Plan $plan)
    {
        if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
            return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        }
        return view('plans.show', compact('plan'));
    }
}
