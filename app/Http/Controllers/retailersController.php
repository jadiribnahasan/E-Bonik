<?php

namespace App\Http\Controllers;

use App\Models\retailers;
use Illuminate\Http\Request;

class retailersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insertretailers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $retailers=new retailers;
        $retailers->id=$request->get('id');
        $retailers->company=$request->get('company');
        $retailers->product_name=$request->get('product_name');
        $retailers->product_quantity=$request->get('product_quantity');
        $retailers->order_date=$request->get('order_date');
        $retailers->payment=$request->get('payment');
        $retailers->delivery_date=$request->get('delivery_date');
        $retailers->save();

        echo "<h1>data send successfully</h1>";


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\retailers  $retailers
     * @return \Illuminate\Http\Response
     */
    public function show(retailers $retailers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\retailers  $retailers
     * @return \Illuminate\Http\Response
     */
    public function edit(retailers $retailers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\retailers  $retailers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retailers $retailers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\retailers  $retailers
     * @return \Illuminate\Http\Response
     */
    public function destroy(retailers $retailers)
    {
        //
    }
}
