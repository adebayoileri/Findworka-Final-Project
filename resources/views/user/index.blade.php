@extends('layouts.app')

@section('content')
    <h1>All Users</h1>
@if(count($users) > 0)
    @foreach($users as $user)
        <div class="well mb-3">
            <h3><a href="/user/{{$user->id}}">{{$user->name}}</a></h3>
            <p>{{$user->body}}</p>
        </div>
    @endforeach
@else
    <p>No users found</p>
    @endif
@endsection