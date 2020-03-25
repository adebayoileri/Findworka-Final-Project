@extends('inc.tutor')
@section('content')
<div class="container">
        @if(Auth::user()->id == $user->id)
    <h1>Edit User Profile</h1>
        {!! Form::open(['action'=>['ProfileController@update', $user->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name',  'User Name')}}
            {{Form::text('name', $user->name, ['class' =>'form-control', 'placeholder' => "User Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'User Email')}}
            {{Form::text('email', $user->email, ['class' =>'form-control', 'placeholder' => "User Email"])}}
        </div>

        <div class="form-group">
            {{Form::file('photo')}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'User password')}}
            {{Form::password('password', ['class' =>'form-control', 'placeholder' => "User's password"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

</div>
<br>
    @else
        <h1>Error 401 | You are not authorized to view this page</h1>
    @endif
@endsection

