@extends('layouts.app')

@section('content')
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
<h5>₦{{ $course->price }}</h5>
<a href="{{ url('/admin/{{$course->id}}/edit') }}" class="btn btn-success">Edit Course</a>
    {!!Form::open(['action'=> ['AdminController@destroy', $course->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}    
@endsection