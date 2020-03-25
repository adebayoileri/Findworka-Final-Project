<?php

namespace App\Http\Controllers;

use App\course;
use App\user_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashBoardController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // } 

    public function index()
    {
        $privilege = auth()->user()->privilege_id;
        $suspend = auth()->user()->suspend;
        if($privilege == 1){   
            if($suspend == 1){
                return view('user.suspend');
            }     
            $enrolls = Auth::user()->enrolls()->get();
            $courses = course::all();
            $data =[
                'courses'=> $courses,
                'enrolls' => $enrolls,
            ];
            // return dd($enrolls);
            return view('home', $data);
            // // $assignments = count(Auth::user()->assignments()->get());
            // return view('home');
            
        }elseif($privilege == 2){
            $courseoffered = auth()->user()->enrolls()->get()->first()['course_id'];
            $students = user_courses::where('course_id', $courseoffered)->get();
            $courses =  course::all();
    
            foreach($courses as $course){
                if($courseoffered == $course->id){
                    $data = [
                        'students' => $students,
                        'course' => $course,
                    ];
                    // dd($courseoffered);
                    return view('tutor.dashboard',$data);
                }
            }            
            return view('tutor.dashboard');
        }
    }
 }