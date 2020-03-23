<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\course;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usercourse = Auth::user()->enrolls()->first();
        $assignments = Assignment::where('course_id', $usercourse['course_id'])->get();

        $data = [
            'assignments' => $assignments,
            'usercourse' => $usercourse,
        ];

        // dd($recentassignments);
        return view('submissions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $courses = Auth::user()->enrolls()->get();
        $recent_course = $courses;
        $course_id = '';

        foreach ($recent_course as $course) {
            $course_id = $course->course_id;        
            $recent_task = Assignment::where('course_id', $course_id)->get();
            $course = course::where('id', $course['course_id'])->get();
            $tasks = end($recent_task);
        }
        //  dd($course);
         
        return view('submissions.create')->with('tasks', $tasks)->with('course', $course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'course_name' => 'required',
            'file' => 'required|max:2048',
            'assignment_id' => 'required',
        ]);

        $submission= new Submission;
        $submission->name = $request->input('name');
        $submission->course_name = $request->input('course_name');
        if($request->hasFile('submission')){
            $file = $request['submission'];
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/submissions',$filename);
            $submission->file = $filename;      
        }
        $submission->assignment_id = $request->input('assignment_id');
        $submission->remarks = 'You have not graded';
        $submission->save();

        $user = Auth::user();
        $course_id =  Auth::user()->enrolls()->first();
        $progress = $course_id->pivot->progress;
        $submission->users()->attach($user, ['course_id'=>$course_id['id']]);
        $user->enrolls()->updateExistingPivot($course_id['id'],['progress'=>$progress + 8.33]);
        return redirect('/submissions')->with('success','Assignment submitted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
