@extends('inc.tutor')
@section('content')
<div class="container">
        @if(Auth::user()->id == $user->id)
    <h1>Edit User Profile</h1>
        {!! Form::open(['action'=>['ProfileController@update', $user->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name',  'User Name')}}
            {{Form::text('name', $user->name, ['class' =>'form-control', 'placeholder' => "User Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'User Email')}}
            {{Form::text('email', $user->email, ['class' =>'form-control', 'placeholder' => "User Email"])}}
        </div>

        <div class="form-group">
            {{Form::file('photo')}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'User password')}}
            {{Form::password('password', ['class' =>'form-control', 'placeholder' => "User's password"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell--span-12">
            <div class="mdc-card">
              <h6 class="card-title">Text Field</h6>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field">
                      <input class="mdc-text-field__input" id="text-field-hero-input">
                      <div class="mdc-line-ripple"></div>
                      <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                      <i class="material-icons mdc-text-field__icon">favorite</i>
                      <input class="mdc-text-field__input" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                      <i class="material-icons mdc-text-field__icon">visibility</i>
                      <input class="mdc-text-field__input" id="text-field-hero-input">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<br>
    @else
        <h1>Error 401 | You are not authorized to view this page</h1>
    @endif
@endsection

