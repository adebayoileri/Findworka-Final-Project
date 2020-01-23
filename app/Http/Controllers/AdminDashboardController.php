<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
