<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard(){
        $users = User::get();
        $data = [
            'user'=>$users
        ];
        return view('admin.dashboard', $data);
    }

    public function suspend($id){
        $user = User::find($id);
        $user->suspend = 1;
        $user->save();
        return redirect('/user')->with('success', 'User has been suspended');
        }

        public function unsuspend($id){
            $user = User::find($id);
            $user->suspend = 0;
            $user->save();
        return redirect('/user')->with('success', 'User has been suspended');
            }
}
