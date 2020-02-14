@extends('layouts.app')

@section('content')
    <h1>Apply for this course</h1>
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
                </div>
            </div>
        </div>
    </div>
@endsection