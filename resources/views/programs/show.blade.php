@extends('layouts.app')

@section('content')
    <a href="/program" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$program->name}}</h1>
<div>
    <h4>{{$program->description}}</h4>
    <h4>${{$program->price}}</h4>
    <h4>{{$program->duration}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="/program/{{$program->id}}/edit" class="btn btn-default">Edit Program</a>
{!!Form::open(['action'=> ['ProgramController@destroy', $program->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
@endsection