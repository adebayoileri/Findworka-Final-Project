@extends('inc.tutor')

@section('content')
    <h4>Students Management</h4>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Students Enrolled</h4>
            {{-- <p class="card-description">{{Auth::user()}}</p> --}}
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Course Enrolled  </th>
                    <th> Suspend Status </th>
                    <th> Payment Status </th>
                    <th> Progress </th>
                    <th> Actions </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $student)
                  {{-- @foreach ($courses as $course)
                  @if ($student->course_id == $course->id) --}}
                    <tr>
                    <td>{{$student->user_id}}</td>
                    <td>{{$course->name}}</td>
                    @if ($student->suspend == 0)
                    <td>Not suspended</td>
                    @else
                    <td>Suspended</td>
                    @endif
                    @if($student->payment_status_id == 3)
                    <td>
                       Not Paid
                      </td>
                      @elseif($student->payment_status_id == 2)
                      <td>Installment</td>
                      @else 
                      <td>Fully Paid</td>
                      @endif
                    <td>{{$student->progress}}%</td>
                    <td> <a class="btn btn-danger">Suspend</a> <a class="btn btn-primary">Remove</a></td>
                    </tr>
                  {{-- @endif --}}
                  {{-- @endforeach --}}
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection