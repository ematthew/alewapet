<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Fumigation;
use Illuminate\Http\Request;

class DemandController extends Controller
{

     
    public function index(Request $request)
    {

        $fumigations = Fumigation::where('expires_date', '>=', date('Y-m-d'))->orderBy('cert_no', 'DESC')->get();
    
        return view('demands.index',compact('fumigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demands = new Demand();
                    $demands->dd_no                 = $request->dd_no;
                    $demands->name_of_premises      = $request->name_of_premises;
                    $demands->address_of_premises   = $request->address_of_premises;
                    $demands->offence               = $request->offence;
                    $demands->deliver               = $request->deliver;
                    $demands->amount                = $request->amount;
                    $demands->date                  = $request->date;
                    $demands->Time                  = $request->Time;
                    $demands->final                 = $request->final;
                    $demands->court_sum             = $request->court_sum;
                    $demands->status                = $request->status;
                    $demands->amount_paid           = $request->amount_paid;
                    $demands->remark                = $request->remark;
                    $demands->save();

                    return redirect()->route('demands')->with('success', 'demands information has been updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fumigation  $fumigation
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        $demands = Demand::where('id', $request->id)->first();
        return view('demands.show', compact('demands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fumigation  $fumigation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demands = Demand::findOrFail($id);
        return view('demands.edit', compact('demands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fumigation  $fumigation
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
         $demand = Demand::find($id);

                    $demand->name_of_premises      = $request->name_of_premises;
                    $demand->address_of_premises   = $request->address_of_premises;
                    $demand->offence               = $request->offence;
                    $demand->deliver               = $request->deliver;
                    $demand->amount                = $request->amount;
                    $demand->date                  = $request->date;
                    $demand->final                 = $request->final;
                    $demand->court_sum             = $request->court_sum;
                    $demand->status                = $request->status;
                    $demand->amount_paid           = $request->amount_paid;
                    $demand->remark                = $request->remark;
                    $demand->update();
                    return redirect()->route('demands')->with('success', 'demand information has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fumigation  $fumigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumigation $fumigation)
    {
        //
    }






    //
}
