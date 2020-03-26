@extends('inc.tutor')

@section('content')
{!! Form::open(['action'=>['SubmissionController@update', $submission->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
<div class="form-group">
  {{Form::label('name',  'Name')}}
  {{Form::text('name', $submission->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
</div>

<div class="form-group">
  <label for="course">Course Name</label>
  <select type="number" name="course_name" class="form-control" >
          <option value="{{$submission->course_name}}">{{$submission->course_name}}</option>
  </select>
</div>

<div class="form-group">
  <label for="assignment_id">Assignment id</label>
  <select type="number" name="assignment_id" class="form-control">
          <option value="{{$submission->assignment_id}}">{{$submission->id}}</option>
  </select>
</div>

<div class="form-group">
    <label for="remarks">Remarks</label>
    <select type="text" name="remarks" class="form-control" >
            <option value="exellent">Excellent</option>
            <option value="very good">Very Good</option>
            <option value="good">Good</option>
            <option value="poor">Poor</option>
    </select>
  </div> 

{{-- <div class="form-group">
  {{Form::file('file')}}
</div> --}}
{{Form::hidden('_method', 'PUT')}}
<input type="submit" value="Submit Assignment">
{!! Form::close() !!}
@endsection