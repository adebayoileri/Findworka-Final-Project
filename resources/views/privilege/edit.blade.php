@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
        {!! Form::open(['action'=>['ProgramController@update', $privileges->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Name')}}
            {{Form::text('name', $privileges->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
        </div>
        
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection