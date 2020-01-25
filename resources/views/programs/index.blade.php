@extends('layouts.app')

@section('content')
    <h1>Available Programs</h1>
@if(count($programs) > 0)
    @foreach($programs as $program)
        <div class="well mb-3">
            <h3><a href="/program/{{$program->id}}">{{$program->name}}</a></h3>
            <p>{{$program->body}}</p>
        </div>
    @endforeach
    <a  role="button" href='/program/create' class="btn btn-primary">Create Program</a>
@else
    <p>No programs found</p>
    @endif
@endsection