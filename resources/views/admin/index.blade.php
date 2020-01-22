@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of all available Courses</h1>
    @foreach ($courses as $course)
    <h1>{{$course->id}}:<a href="/admin/{{$course->id}}"> {{$course->description}} </a></h1>
    @endforeach
    </div>    
@endsection