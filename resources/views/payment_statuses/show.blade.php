@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/payment_status" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$payment_statuses->name}}</h1>
<div>
    <h4>{{$payment_statuses->name}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="/payment_status/{{$payment_statuses->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=> ['PaymentStatusController@destroy', $payment_statuses->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>
@endsection