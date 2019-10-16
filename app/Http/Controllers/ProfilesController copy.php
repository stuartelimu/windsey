<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


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
        $user = auth()->user();

        $user->createAsStripeCustomer();

        $paymentMethod = $request->input('stripeToken');

        $user->addPaymentMethod($paymentMethod);

        $user->updateDefaultPaymentMethod($paymentMethod);

        $user->updateDefaultPaymentMethodFromStripe();
        

        // echo $paymentMethod;

        return back()->with('success', 'Thank you, your credit card has been added');

        // return view('profiles.index', [
        //     'user' => $user,
        //     'pm' => $nm,
        // ]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = auth()->user();
        return view('profiles.index', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        return view('profiles.edit', [
            'user' => $user,
            'intent' => $user->createSetupIntent()
        ]);
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
        $this->validate($request, [
            'telephone' => 'required',
            'address' => 'required',
            'bio' => 'required',
        ]);

        $user = auth()->user();

        $profile = Profile::where('user_id', $id)->first();
        $profile->telephone = $request->input('telephone');
        $profile->address = $request->input('address');
        $profile->bio = $request->input('bio');

        $profile->save();

        return back()->with('success', 'Your Profile was successfully updated');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
