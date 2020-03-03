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
}
