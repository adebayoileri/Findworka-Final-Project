@extends('inc.user')

@section('content')
<div class="body-wrapper">
<div class="content-wrapper">
<div class="mdc-layout-grid">
{!! Form::open(['action'=>['SubmissionController@store', ], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
{{-- <div class="form-group">
  {{Form::label('name',  'Name')}}
  {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
</div> --}}

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-text-field w-100">
      <input class="mdc-text-field__input" type="text" id="name" name="name">
      <div class="mdc-line-ripple"></div>
      <label for="name" class="mdc-floating-label">Name</label>
    </div>
  </div>

<div class="form-group">
  <label for="course">Course Name</label>
  <select type="number" name="course_name" class="form-control" disabled >
      @foreach ($course as $option)
          <option value="{{$option->id}}">{{$option->name}}</option>
      @endforeach
  </select>
</div>

<label for="course">Assignment Title</label>
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" >
    <select type="number" name="assignment_id" class="mdc-text-field__input">
        @foreach ($tasks as $task)
            <option value="{{$task->id}}">{{$task->name}}</option>
        @endforeach
    </select>
  </div>

    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
        {{Form::file('submission')}}
    </div>
    {{-- <div class="form-group">
      <label for="remarks">Remarks</label>
      <input type="text" class="form-control" id="remarks" placeholder="Remarks">
    </div> --}}
    {{Form::submit('Submit Assignment', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
</div>
</div>
@endsection