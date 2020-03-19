@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Back {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h5>My Courses</h5>
                    <p>Courses You enrolled for recently</p>
                    @if ($enrolls->count() > 0)
                    @foreach ($courses as $course)
                    @foreach ($enrolls as $enroll)
                    @if ($enroll->course_id == $course->id)
                       <p>{{ $course->name}}</p> 
                    @endif
                    @endforeach
                    @endforeach
                    <br>
                    <h5>User's Progress</h5>
                    @else
                        <small> You have not enrolled for any course </small>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                <img style="border-radius:50%" src="/storage/photos/{{Auth::user()->photo}}" width="50%" alt="profilepic" srcset="">
                {{-- {{Auth::user()->photo}}     --}}
                <br>
                Profle Image
                    @auth
                    <a role="button" class="btn btn-primary" href="profile/{{Auth::user()->id}}/edit">Edit Profile</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
