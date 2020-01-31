@extends('layouts.app')

@section('content')
    <h1>Edit User Profile</h1>
        {!! Form::open(['action'=>['ProfileController@update', $user->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'User Name')}}
            {{Form::text('name', $user->name, ['class' =>'form-control', 'placeholder' => "User Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'User Email')}}
            {{Form::text('email', $user->email, ['class' =>'form-control', 'placeholder' => "User Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'User password')}}
            {{Form::password('password', ['class' =>'form-control', 'placeholder' => "User's password"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection