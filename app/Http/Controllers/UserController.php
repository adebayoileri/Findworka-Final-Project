<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //
            $users = User::all();
            return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
            'email' => 'required',
            'password' => 'required',
            'privilege_id' => 'required',
        ]);
            $users = new User;
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            $users->privilege_id = $request->input('privilege_id');
            $users->save();

            return redirect('/user')->with('success','User created');
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
        $users = User::find($id);
        return view('user.show')->with('users', $users);
    }

    public function edit($id)
    {
        //
        $users = User::find($id);
        return view('user.edit')->with('users', $users);
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
             'email' => 'required',
             'password' => 'required',
             'privilege_id' => 'required',
         ]);
 
         //Create new post
             $users = User::find($id);
             $users->name = $request->input('name');
             $users->email = $request->input('email');
             $users->privilege_id = $request->input('privilege_id');
             $users->password = Hash::make($request['password']);
 
             $users->save();
 
             return redirect('/user')->with('success', 'User successfully updated');

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
        $users = User::find($id);
        $users->delete();
        return redirect('/user')->with('success', 'user successfully deleted');

    }
}