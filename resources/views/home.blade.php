@extends('inc.user')

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
      <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
            <div class="mdc-card info-card info-card--success">
              <div class="card-inner">
                <h5 class="card-title">My Courses</h5>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom"> 
                  @if ($enrolls->count() > 0)
                    @foreach ($courses as $course)
                    @foreach ($enrolls as $enroll)
                    @if ($enroll->course_id == $course->id)
                       <p>{{ $course->name}}</p> 
                <p>{{ $course->description }}</p>
                    @endif
                    @endforeach
                    @endforeach
                    <br>
                    <h5>User's Progress</h5>
                    {{-- @else
                        <small> You have not enrolled for any course </small>
                    @endif --}}
                </h5>
                <h4 class="tx-12 text-muted"><strong>{{$enroll->progress}}% </strong>reached</h4>
                <div class="card-icon-wrapper">
                  <i class="material-icons">dvr</i>
                </div>
              </div>
            </div>
        </div>
         
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--danger">
            <div class="card-inner">
              <h5 class="card-title">Payment Information</h5>
              <h5 class="font-weight-light pb-2 mb-1 border-bottom">Course Price: : ₦{{ $course->price }}  </h5>
              <h5 class="font-weight-light pb-2 mb-1 border-bottom">Payment status: @if($enroll->payment_status_id == 3) Not Paid @else Paid  @endif  </h5>
              <p class="tx-12 text-muted">
              @if($enroll->payment_status_id == 3)  <a href="/apply/{{$course->id}}" class="mdc-button text-button--info">  Pay Now
                </a>@elseif($enroll->payment_status_id == 2) Installment Payment @else Fully paid @endif
              </p>
              @else
              <small> You have not enrolled for any course </small>
          @endif
              <div class="card-icon-wrapper">
                <i class="material-icons">attach_money</i>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </main>
</div>
@endsection
