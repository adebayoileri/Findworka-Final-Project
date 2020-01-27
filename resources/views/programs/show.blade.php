@extends('layouts.app')

@section('content')
    <a href="/program" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$programs->name}}</h1>
<div>
    <h4>{{$programs->description}}</h4>
    <h4>${{$programs->price}}</h4>
    <h4>{{$programs->duration}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="/program/{{$programs->id}}/edit" class="btn btn-default">Edit Program</a>
{!!Form::open(['action'=> ['ProgramController@destroy', $programs->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
@endsection