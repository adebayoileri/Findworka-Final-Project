@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'AdminController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Course Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Course Description')}}
    {{Form::textarea('description','', ['class' =>'form-control', 'placeholder' => "Course Description"])}}
</div>
<div class="form-group">
    {{Form::label('content',  'Course Content')}}
    {{Form::textarea('content','', ['class' =>'form-control', 'placeholder' => "Course Content"])}}
</div>
<div class="form-group">
    {{Form::label('program', 'Pick a program')}}
    @foreach ($programs as $program)
    @endforeach
    {{Form::select('program', [ $program->id => $program->description, $program->id => $program->description, $program->id => $program->description], null, ['class' =>'form-control'])}}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection