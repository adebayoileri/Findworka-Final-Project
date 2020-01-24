@extends('layouts.app')

@section('content')
    <a href="/privilege" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$privileges->name}}</h1>
<div>
    <h4>{{$privileges->name}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="/privilege/{{$privileges->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=> ['PrivilegeController@destroy', $privileges->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
@endsection