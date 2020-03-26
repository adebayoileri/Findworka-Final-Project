<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\course;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
  
     
   public function index(){
    $tutorcourse = Auth::user()->enrolls()->first();
    $tutorcourse_id = $tutorcourse->course_id;
    $assignments = Assignment::where('course_id', $tutorcourse_id)->get();
    $submissions = Submission::where('course_name', $tutorcourse_id)->get();
    $data=[
        'assignments'=> $assignments,
        'tutorcourse' => $tutorcourse,
        'submissions' => $submissions
    ];

    // dd($tutorcourse_id);

    return view('assignments.index', $data);
   }

   public function create(){
        $courses = auth()->user()->enrolls()->get();
        foreach($courses as $mycourse){
        $course = course::where('id', $mycourse['course_id'])->get();
        return view('assignments.create')->with('course', $course);
        // $tutorcourse_id = Auth::user()->enrolls()->first()->get();
        // dd($tutorcourse_id);
    }
   }

   public function store(Request $request){

     $this->validate($request, [
         'name' => 'required',
         'course_name' => 'required',
         'file' => 'required|max:2048',
        //  'remarks'=>'You have not been graded'
     ]);
     $assignment = new Assignment;
     if($request->hasFile('file')){
        $file = $request['file'];
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/assignments',$filename);
        $assignment->file = $filename;      
    }

    $assignment->name = $request->input('name');
    $assignment->course_name = $request->input('course_name');
    // $assignment->remarks = 'You have not been graded';
    $assignment->course_id = $request->input('course_id');
    $assignment->save();   
    return redirect('/assignments')->with('success', 'Assignment has been created');
   }
//    public function edit(){
//        return view('assignments.edit');
//    }

//    public function update(Request $request){
//         $this->validate($request, [
//             'name'=>'required'
//         ]);
//    }

}
