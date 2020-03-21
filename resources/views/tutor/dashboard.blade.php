@extends('inc.tutor')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h4 class="card-title mb-0">Backend Students</h4>
            </div>
            <p>List of students enroll in The Backend Development Program</p>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Course Enrolled</th>
                    <th>Suspend Status</th>
                    <th>Payment Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $student)
                  @foreach ($courses as $course)
                  @if ($student->course_id == $course->id)
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
                      @endif
                    <td>40%</td>
                    <td> <a class="btn btn-danger">Suspend</a> <a class="btn btn-primary">Remove</a></td>
                    </tr>
                  @endif
                  @endforeach
                  @endforeach
            
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection