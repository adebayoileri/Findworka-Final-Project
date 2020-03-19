@extends('layouts.app')

@section('content')
    @foreach ($courses as $course)
        {{$course->name}}
        {{$course->created_at}}
        <br>
    @endforeach
@endsection