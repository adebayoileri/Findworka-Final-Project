@extends('inc.tutor')

@section('content')
{!! Form::open(['action'=>['AssignmentController@store', ], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
  {{Form::label('name',  'Name')}}
  {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
</div>
<div class="form-group">
  {{Form::label('course_name',  'Course Name')}}
  {{Form::text('course_name','', ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
    <div class="form-group">
        {{Form::file('file')}}
    </div>
    <div class="form-group">
      <label for="Instructions">Remarks</label>
      <input type="text" class="form-control" id="remarks" placeholder="Remarks">
    </div>
    {{Form::hidden('_method', 'POST')}}
    {{Form::submit('Create Assignment', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  </form>
@endsection