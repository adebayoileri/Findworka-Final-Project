<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\payment_status;

class PaymentStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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
        $this->validate($request,[
            
            'name' => 'required',
        ]);

        //Create new post
            $payment_statuses= new payment_status;
            $payment_statuses->name = $request->input('name');
            $payment_statuses->save();

            return redirect('/payment_statuses')->with('success','payment_statuses created');
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
        $payment_statuses = payment_status::find($id);
        return view('payment_statuses.show')->with('payment_statuses', $payment_statuses);

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
        $payment_statuses = payment_status::find($id);
        return view('payment_statuses.edit')->with('payment_statuses', $payment_statuses);

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
        //
        $this->validate($request,[
            'name' => 'required',
        ]);

        //Create new post
            $payment_statuses = payment_status::find($id);
            $payment_statuses->name = $request->input('name');
           

            return redirect('/payment_statuses')->with('success', ' Payment status successfully updated');


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
        $payment_statuses = payment_status::find($id);
        $payment_statuses->delete();
        return redirect('/payment_statuses')->with('success', 'Payment status successfully deleted');
    }
}
