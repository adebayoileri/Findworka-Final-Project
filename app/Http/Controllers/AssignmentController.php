<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
   public function index(){
    $tutorcourse = Auth::user()->enrolls()->first();
    $assignments = Assignment::where('course_id', $tutorcourse['course_id'])->get();

    $data=[
        'assignments'=> $assignments,
        'tutorcourse' => $tutorcourse,
    ];
    // dd($assignments);

    return view('assignments.index', $data);
   }

   public function create(){
       return view('assignments.create');
   }

   public function store(Request $request){

     $this->validate($request, [
         'name' => 'required',
         'course_name' => 'required',
         'file' => 'required|max:2048',
        //  'remarks'=>'You have not been graded'
     ]);

     if($request->hasFile('file')){
        //Filename
        $filenameWithExt = $request->file('file')->getClientOriginalName();

        //get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //get the file extension
        $extension = $request->file('file')->getClientOriginalExtension();

        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //Upload Image
        $path = $request->file('file')->storeAs('public/assignments', $fileNameToStore);
    }
    $tutorcourse_id = Auth::user()->enrolls()->first()->get()['course_id'];

    $assignment = new Assignment;
    $assignment->name = $request->input('name');
    $assignment->course_name = $request->input('course_name');
    $assignment->file = $path;
    $assignment->remarks = 'You have not been graded';
    $assignment->course_id = $tutorcourse_id;
    $assignment->save();
    
    return redirect('/assignments');
   }
   public function edit(){
       return view('assignments.edit');
   }

   public function update(Request $request){
        $this->validate($request, [
            'name'=>'required'
        ]);
   }

}
