<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Plan;


class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $plans = Plan::all();
        $services = Product::all();
        $plan = "No plan";
        if ($user->subscribedToPlan('plan_FyGxPNsipLhdEL', 'Windsey FaaS Platform')) {
            // basic 
            $services = $services->take(1);
            $plan = "FaaS Platform Basic";
        } else if ($user->subscribedToPlan('plan_FyGy0Fv9zsAjzj', 'Windsey FaaS Platform')) {
            // standard
            $services = $services->take(2);
            $plan = "FaaS Platform Standard";
        } else {
            // no subscription
            $services = $services->take(0);
        }

        if ($user->hasPaymentMethod()) {
            // get default payment method
            $paymentMethod = $user->defaultPaymentMethod();
        }

        return view('dashboard', [
            'user' => $user,
            'services' => $services,
            'plan' => $plan,
            'plans' => $plans,
            'intent' => $user->createSetupIntent(),
        ]);
    }
}
