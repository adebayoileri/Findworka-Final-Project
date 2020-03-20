<?php

namespace App\Http\Controllers;

use App\course;
use App\User;
use App\user_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($name)
    {
        $user = User::find($name);
        return view('profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'photo' => 'image|nullable|max:1999',
        ]);

         //handle file upload
         if($request->hasFile('photo')){
            //Filename
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get the file extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        //Create
            $user = User::find($name);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            if($request->hasFile('photo')){
                $user->photo = $fileNameToStore;
            }
            $user->password = Hash::make($request->input('password'));

            $user->save();
            if($user->privilege_id == 2){
                return redirect('/tutor')->with('success', 'Your Profile has been successsfully updated');
            }

            return redirect('/home')->with('success', 'User Profile successfully updated');
    }
    public function apply($id){
        $course = course::find($id);
        return view('programs.apply')->with('course', $course);
    }
    public function storeusercourse($id){
        // $course = course::find($id);
        $user_courses = user_courses::all();
        foreach($user_courses as $usercourse){
            if($usercourse->course_id === $id && $usercourse->user_id === auth()->user()->id){
                return redirect('/home')->with('danger', 'You already applied for this course');
            }else{
                $user_course = new user_courses;
                $user_course->course_id = $id;
                $user_course->user_id = auth()->user()->id;
                $user_course->save();
                return redirect('/home')->with('success', 'Course successfully applied for');
            }
         }
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
