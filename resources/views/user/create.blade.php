@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'UserController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'User Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "User Name"])}}
</div>
<div class="form-group">
    {{Form::label('email',  'User Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => "User email"])}}
</div>
<div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::password('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection