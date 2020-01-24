@extends('layouts.app')

@section('content')
    <h1>Available Programs</h1>
@if(count($privileges) > 0)
    @foreach($privileges as $privilege)
        <div class="well mb-3">
            <h3><a href="/privilege/{{$privilege->id}}">{{$privilege->name}}</a></h3>
            <p>{{$privilege->body}}</p>
        </div>
    @endforeach
@else
    <p>No privileges found</p>
    @endif
@endsection