<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Fumigation;
use App\Models\Demand;
use App\Models\User;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        // $search = Fumigation::where('cert_no','Like',"%$request%")->get();
        // return view('payment.index',compact('search'));
        // $sub = Subscription::all();
        return view('payment.index');
        
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
     * @param  \App\Http\Requests\StoreSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $Subscription = new Subscription($request->all());
        $Subscription->save();
        $fumigation = Fumigation::find($request->fumigation_id);
        $fumigation->expires_date = Date('y:m:d', strtotime('+90 days'));
        $fumigation->update();
        return response()->json([
            "status"=>"success",
            "data"=>$Subscription
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return response()->json([
            "status"=>"success",
            "data"=>$subscription
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriptionRequest  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }

    public function fetchSearchByName($cert_no)
    {
        return Fumigation::where('cert_no','Like',"%$cert_no%")->get();
        // return Products::findorFail($name);
        return $cert_no ;
        
    }
}
