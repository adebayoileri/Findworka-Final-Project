@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit</h1>
        {!! Form::open(['action'=>['PaymentStatusController@update', $payment_statuses->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Name')}}
            {{Form::text('name', $payment_statuses->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
        </div>
        
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection