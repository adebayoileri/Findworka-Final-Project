<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function policy(){
        return view('pages.policy');
    }
    public function terms(){
        return view('pages.terms');
    }
}
