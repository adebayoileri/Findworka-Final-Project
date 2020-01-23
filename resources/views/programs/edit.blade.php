@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
        {!! Form::open(['action'=>['ProgramController@update', $program->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Program Name')}}
            {{Form::text('name', $program->name, ['class' =>'form-control', 'placeholder' => "Program Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('description',  'Program Description')}}
            {{Form::textarea('description', $program->description, ['class' =>'form-control', 'placeholder' => "Program Description"])}}
        </div>
        <div class="form-group">
            {{Form::label('price',  'Program Cost')}}
            {{Form::text('price', $program->price, ['class' =>'form-control', 'placeholder' => "Program Cost"])}}
        </div>
        <div class="form-group">
            {{Form::label('duration',  'Program Duration')}}
            {{Form::text('duration', $program->duration, ['class' =>'form-control', 'placeholder' => "Program Duration"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection