<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashBoardController extends Controller
{
    public function index()
    {
        $privilege = auth()->user()->privilege_id;

        if($privilege == 1){
            // $registered_courses = Auth::user()->courses()->get();
            // $tasks = DB::table('tasks')->orderBy('created_at', 'desc')->get();
            // $currently_enrolled = end($registered_courses);
            // $course_name = '';
            // foreach($currently_enrolled as $latest)
            //     $course_name = $latest->name;
            // $course_tasks = Task::where('course_name',$course_name)->get();
            // $recent_task = end($course_tasks);
           
            
            // $assignments = count(Auth::user()->assignments()->get());
            return view('home');
            
        }elseif($privilege == 2){
            // $registered_courses = Auth::user()->courses()->get();
            // $tutorcourse = Auth::user()->courses()->first();
            // $tasks = Task::where('course_name', $tutorcourse['name'])->get();
            // $recent_task = end($tasks);
            // $task_id = '';
            // foreach($recent_task as $task)
            //     $task_id = $task->id;
            // $num_submissions = Assignment::where('task_id', $task_id)->get();
            
            return view('tutor.dashboard');
        }
    }
 }