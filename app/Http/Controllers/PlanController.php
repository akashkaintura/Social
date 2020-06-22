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
     return view('plans.show', compact('plan'));
    }
}
