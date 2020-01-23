@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    {!!Form::open(['action'=> ['AdminController@destroy', $course->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection