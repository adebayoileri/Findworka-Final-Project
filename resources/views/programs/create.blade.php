@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'ProgramController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Program Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Program Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Program Description')}}
    {{Form::textarea('description','', ['class' =>'form-control', 'placeholder' => "Program Description"])}}
</div>
<div class="form-group">
    {{Form::label('price',  'Program Cost')}}
    {{Form::text('price','', ['class' =>'form-control', 'placeholder' => "Program Cost"])}}
</div>
<div class="form-group">
    {{Form::label('duration',  'Program Duration')}}
    {{Form::text('duration','', ['class' =>'form-control', 'placeholder' => "Program Duration"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection