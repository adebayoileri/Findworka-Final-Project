@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Programs</h1>
@if(count($payment_statuses) > 0)
    @foreach($payment_statuses as $payment_status)
        <div class="well mb-3">
            <h3><a href="/payment_status/{{$payment_status->id}}">{{$payment_status->name}}</a></h3>
            <p>{{$payment_status->body}}</p>
        </div>
    @endforeach
@else
    <p>No payment status found</p>
    @endif
</div>
@endsection