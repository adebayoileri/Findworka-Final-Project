<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\course;
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
        $courses = auth()->user()->enrolls()->first()->get();
        foreach($courses as $mycourse){
        $course = course::where('id', $mycourse['course_id'])->get();
        // dd($course); 
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
//     $tutorcourses = auth()->user()->enrolls()->first()->get();
//     foreach($tutorcourses as $tutorcourse){
//    $tutorcourse_id = course::where('id', $tutorcourse['course_id'])->first()->get();
// }

    $assignment->name = $request->input('name');
    $assignment->course_name = $request->input('course_name');
    $assignment->remarks = 'You have not been graded';
    // $assignment->course_id = $tutorcourse_id;
    $assignment->save();
    // $user = Auth::user();
    //     $progress = Auth::user()->enrolls()->first()->pivot->progress;
    //     $course_id =  Auth::user()->enrolls()->first();
    //     $assignment->users()->attach($user, ['course_id'=>$course_id['id']]);
    //     $user->enrolls()->updateExistingPivot($course_id['id'],['progress'=>$progress + 8.33]);
    
    return redirect('/assignments')->with('success', 'Assignment has been created');
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
