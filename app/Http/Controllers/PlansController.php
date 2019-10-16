<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Plan;
use App\User;



class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $plans = Plan::all();
        
        return view('plans.service', [
            'products' => $products,
            'plans' => $plans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user() && ! $request->user()->hasPaymentMethod()) {
            // This user is not a paying customer...
            return redirect('dashboard')->with('error', 'please update your information');
        }

        $subscription = "Windsey FaaS Platform";
        $plan = $request->input('plan');
        $user = auth()->user();

        // $user->createAsStripeCustomer();
        
        $paymentMethod = $user->defaultPaymentMethod()->id;
        
        if ($user->subscribed('Windsey FaaS Platform') && ! $user->subscribedToPlan($plan, 'Windsey FaaS Platform')) {
            // This user is changing plans
            $user->subscription('Windsey FaaS Platform')->swap($plan);
            return redirect()->back()->with('success', 'Your plan subscribed successfully');
        }

        $user->newSubscription($subscription, $plan)->create($paymentMethod);

        // echo $paymentMethod;
        // if ($user->subscribed($subscription)) {
        //     echo "yes";
        // }

        return redirect()->route('plans.index')->with('success', 'Your plan subscribed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('plans.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->subscription('Windsey FaaS Platform')->cancel();

        return redirect()->back()->with('success', 'Your subscription has been cancelled');
    }

    public function cancel($id)
    {
        $user = User::find($id);
        $user->subscription('Windsey FaaS Platform')->cancel();

        return redirect()->back()->with('success', 'Your subscription has been cancelled');
    }
}
