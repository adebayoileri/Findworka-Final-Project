<?php

namespace App\Http\Controllers;

use App\course;
use App\payment_status;
use App\User;
use App\user_courses;
use Illuminate\Http\Request;

class AssignCourseController extends Controller
{
    public function __construct()
    {
       return $this->middleware('auth:admin');
    }
    public function assign(){
        $courses = course::all();
        $users = User::all();
        $payment_statuses = payment_status::all();
        $data = [
            'courses'=> $courses,
            'payment_statuses' => $payment_statuses,
            'users'=>$users

        ];
        return view('admin.assign', $data);
    }
    public function assigncourse(Request $request){
        $user_course = new user_courses;
        $user_course->course_id = $request->input('course_id');
        $user_course->user_id = $request->input('user_id');
        $user_course->payment_status_id = $request->input('payment_status_id');
        $user_course->save();
        return redirect('/user')->with('success', 'Course successfully assigned to');
    }
}
