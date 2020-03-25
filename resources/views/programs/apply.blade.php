@extends('layouts.app')

@section('content')
    {{-- <h1>Apply for this course</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                <h3>{{ $course->name }}</h3>
                <p>{{ $course->description }}</p>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary">Pay with stripe</button>
                    <button class="btn btn-primary">Paypal</button>
                    <br>
                    {!! Form::open(['action'=>['ProfileController@storeusercourse', $course->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::hidden('_method', 'POST')}}
                        {{Form::submit('Apply for course', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> --}}

    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    <p>Course Name :{{$course->name}}</p>
                    <p>Price : {{$course->price}}</p>
                   
                </div>
            </p>
        <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
        <input type="hidden" name="amount" value="{{$course->price}}00"> {{-- required in kobo --}}
          <input type="hidden" name="metadata" value="{{$course_paid_info}}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
        {{-- <input type="hidden" name="quantity" value="{{$course->id}}"> --}}
    
            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
    </form>

    {!! Form::open(['action'=>['PaymentController@storeusercourse', $course->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::hidden('_method', 'POST')}}
        {{Form::submit('Apply for course', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection