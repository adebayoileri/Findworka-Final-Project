<?php

namespace App\Http\Controllers;

use App\course;
use App\program;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all courses in database
        $courses = course::all();
        return view('admin.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $programs = program::all();
        return view('admin.create')->with('programs', $programs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'description' => 'required',
            'name' => 'required',
            'content' => 'required',
            'program'=>'required'
        ]);

        //Create new post
            $course = new course;
            $course->description = $request->input('description');
            $course->name =   $request->input('name');
            $course->content = $request->input('content');
            $course->program_id = $request->input('program');
            $course->save();

            return redirect('/admin')->with('success','course created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = course::find($id);
        return view('admin.show')->with('course', $course);
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
        $programs = program::all();
        $course = course::find($id);
        return view('admin.edit')->with('programs', $programs)->with('course', $course);

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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'program' =>'required',
            'content'=>'required'
        ]);

        //Create new post
            $course = course::find($id);
            $course->name = $request->input('name');
            $course->description = $request->input('description');
            $course->content = $request->input('content');
            $course->program_id = $request->input('program');
            $course->save();

            return redirect('/admin')->with('success', 'Course successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect('/admin')->with('success', 'Course successfully deleted');
    }
}
