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
                    My Courses
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                 <a role="button" class="btn btn-primary" href="profile/{{Auth::user()->id}}/edit">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
