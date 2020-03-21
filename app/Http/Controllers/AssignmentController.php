<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
   public function index(){
    $tutorcourse = Auth::user()->enrolls()->first();
    return view('assignments.index');
   }

   public function create(){
       return view('assignments.create');
   }

   public function store(Request $request){
     $this->validate($request, [
         'name' => 'required',
         'course_name' => 'required',
         'file' => 'required|max:2048',
        'remarks'=>'You have not been graded'
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
