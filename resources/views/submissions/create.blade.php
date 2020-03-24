@extends('inc.user')

@section('content')
{!! Form::open(['action'=>'SubmissionController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
<div class="form-group">
  {{Form::label('name',  'Name')}}
  {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
</div>

<div class="form-group">
  <label for="course">Course Name</label>
  <select type="number" name="course_name" class="form-control" >
      @foreach ($course as $option)
          <option value="{{$option->id}}">{{$option->name}}</option>
      @endforeach
  </select>
</div>

<div class="form-group">
  <label for="assignment_id">Assignment id</label>
  <select type="number" name="assignment_id" class="form-control" >
      @foreach ($tasks as $task)
          <option value="{{$task->id}}">{{$task->id}}</option>
      @endforeach
  </select>
</div>

<div class="form-group">
  {{Form::file('file')}}
</div>
<input type="submit" value="Submit Assignment">
{!! Form::close() !!}
@endsection