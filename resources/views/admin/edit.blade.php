@extends('layouts.app')

@section('content')
<div class="container">
{!! Form::open(['action'=>['AdminController@update', $course->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Name')}}
    {{Form::text('name',$course->name, ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Course Description')}}
    {{Form::textarea('description', $course->description, ['class' =>'form-control', 'placeholder' => "Course Description"])}}
</div>
<div class="form-group">
    {{Form::label('content',  'Course Content')}}
    {{Form::textarea('content', $course->content, ['class' =>'form-control', 'placeholder' => "Course Content"])}}
</div>
<div class="form-group">
<label for="program">Pick a Program</label>
<select class="form-control">
    @foreach ($programs as $program)
<option value="{{$program->id}}">{{$program->name}}</option>
    @endforeach
</select>
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection