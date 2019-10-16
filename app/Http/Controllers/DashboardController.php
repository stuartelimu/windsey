<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

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

        return view('dashboard', [
            'services' => $services,
            'plan' => $plan,
        ]);
    }
}
