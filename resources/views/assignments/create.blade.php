@extends('inc.tutor')

@section('content')
{!! Form::open(['action'=>['AssignmentController@store', ], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
  {{Form::label('name',  'Name')}}
  {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
</div>

<div class="form-group">
  <label for="course">Course Name</label>
  <select type="number" name="course_name" class="form-control" >
      @foreach ($course as $option)
          <option value="{{$option->name}}">{{$option->name}}</option>
      @endforeach
  </select>
</div>

<div class="form-group">
  <label for="course_id">Course id</label>
  <select type="number" name="course_id" class="form-control" >
      @foreach ($course as $option)
          <option value="{{$option->id}}">{{$option->id}}</option>
      @endforeach
  </select>
</div>

    <div class="form-group">
        {{Form::file('file')}}
    </div>
    {{-- <div class="form-group">
      <label for="remarks">Remarks</label>
      <input type="text" class="form-control" id="remarks" placeholder="Remarks">
    </div> --}}
    {{Form::submit('Create Assignment', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  </form>
  <br>
@endsection