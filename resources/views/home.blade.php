@extends('inc.user')

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--success">
              <div class="card-inner">
                <h5 class="card-title">Courses</h5>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom"> @if ($enrolls->count() > 0)
                    @foreach ($courses as $course)
                    @foreach ($enrolls as $enroll)
                    @if ($enroll->course_id == $course->id)
                       <p>{{ $course->name}}</p> 
                    @endif
                    @endforeach
                    @endforeach
                    <br>
                    <h5>User's Progress</h5>
                    @else
                        <small> You have not enrolled for any course </small>
                    @endif
                </h5>
                <p class="tx-12 text-muted">48% target reached</p>
                <div class="card-icon-wrapper">
                  <i class="material-icons">dvr</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Back {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h5>My Courses</h5>
                    <p>Courses You enrolled for recently</p>
                    @if ($enrolls->count() > 0)
                    @foreach ($courses as $course)
                    @foreach ($enrolls as $enroll)
                    @if ($enroll->course_id == $course->id)
                       <p>{{ $course->name}}</p> 
                    @endif
                    @endforeach
                    @endforeach
                    <br>
                    <h5>User's Progress</h5>
                    @else
                        <small> You have not enrolled for any course </small>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
@endsection
