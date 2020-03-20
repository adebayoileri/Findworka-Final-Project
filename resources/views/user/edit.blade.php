@extends('layouts.app')

@section('content')
    <h1>Edit User Profile</h1>
        {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $users->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'Users Email')}}
            {{Form::text('email', $users->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>

        <div class="form-group row">
            <label for="privilege" class="col-md-4 col-form-label text-md-right">Privilege ID</label>

            <div class="form-group col-md-6">
               <select name="privilege_id" id="">
                   <option value="1">Student</option>
                   <option value="2">Tutor</option>
               </select>

                @error('privilege_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            {{Form::label('password',  'Users password')}}
            {{Form::password('password', ['class' =>'form-control', 'placeholder' => "User's password"])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection