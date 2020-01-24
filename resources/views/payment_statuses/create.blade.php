@extends('layouts.app')

@section('content')
    {!! Form::open(['action'=>'PaymentStatusController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name',  'Name')}}
        {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
    </div>



{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection