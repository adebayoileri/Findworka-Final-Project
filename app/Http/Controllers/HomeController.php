<?php

namespace App\Http\Controllers;

use App\course;
use App\user_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $enrolls = Auth::user()->enrolls()->get();
        $courses = course::all();
        $data =[
            'courses'=> $courses,
            'enrolls' => $enrolls,
        ];
        // return dd($enrolls);
        return view('home', $data);
    }
}
