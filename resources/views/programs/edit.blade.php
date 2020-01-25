@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
        {!! Form::open(['action'=>['ProgramController@update', $programs->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Program Name')}}
            {{Form::text('name', $programs->name, ['class' =>'form-control', 'placeholder' => "Program Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('description',  'Program Description')}}
            {{Form::textarea('description', $programs->description, ['class' =>'form-control', 'placeholder' => "Program Description"])}}
        </div>
        <div class="form-group">
            {{Form::label('price',  'Program Cost')}}
            {{Form::text('price', $programs->price, ['class' =>'form-control', 'placeholder' => "Program Cost"])}}
        </div>
        <div class="form-group">
            {{Form::label('duration',  'Program Duration')}}
            {{Form::text('duration', $programs->duration, ['class' =>'form-control', 'placeholder' => "Program Duration"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection