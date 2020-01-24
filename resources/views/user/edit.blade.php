@extends('layouts.app')

@section('content')
    <h1>Edit User Profile</h1>
        {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $users->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'Users Email')}}
            {{Form::text('email', $users->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'Users password')}}
            {{Form::password('password', ['class' =>'form-control', 'placeholder' => "User's password"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection