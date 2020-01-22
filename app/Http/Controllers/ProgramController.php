<?php

namespace App\Http\Controllers;

use App\payment_status;
use Illuminate\Http\Request;

class payment_statusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment_statuses = payment_status::all();
        return view('payment_statuses.index')->with('payment_statuses', $payment_statuses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payment_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $this->validate($request,[
            'name' => 'required',
        ]);

        //Create new post
            $payment_status = new payment_status;
            $payment_status->name = $request->input('name');
            $payment_status->save();

            return redirect('/payment_status')->with('success','payment_status created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $payment_status = payment_status::find($id);
        return view('payment_statuss.show')->with('payment_status', $payment_status);

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
        $payment_status = payment_status::find($id);
        return view('payment_statuss.edit')->with('payment_status', $payment_status);
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
        $this->validate($request,[
            'name' => 'required',
        ]);

        //Create new post
            $payment_status = payment_status::find($id);
            $payment_status->name = $request->input('name');
            $payment_status->save();

            return redirect('/payment_status')->with('success', 'payment_status successfully updated');
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
        $payment_status = payment_status::find($id);
        $payment_status->delete();
        return redirect('/payment_status')->with('success', 'payment_status successfully deleted');
    }
}
