@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'AssignCourseController@assigncourse', 'method' => 'POST']) !!}
<div class="form-group">
    <label for="course_id"></label>
    <select name="course_id" class="form-control">
        @foreach ($courses as $course)
    <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
    </select>

</div>
<div class="form-group">
    <label for="user_id"></label>
    <select name="user_id" class="form-control">
        @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select> 
</div>
<div class="form-group">
    <label for="payment_status_id"></label>
    <select name="payment_status_id" class="form-control">
        @foreach ($payment_statuses as $payment_status)
    <option value="{{$payment_status->id}}">{{$payment_status->name}}</option>
        @endforeach
    </select> 
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection