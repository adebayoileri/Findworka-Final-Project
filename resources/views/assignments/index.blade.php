@extends('inc.tutor')

@section('content')
    <h4>Assignments</h4>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Students Assignment Info</h4>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Course Name</th>
                    <th> Assignment Title </th>
                   
                    <th> Download File</th>
           
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($assignments as $assignment)
                  <tr>
                    <td class="py-1">
                      {{$assignment->course_name}}
                    <td>   {{$assignment->name}} </td>
                    
                    <td> <a class="btn btn-primary" href="/assignments/{{$assignment->id}}/download">Download Assignment File</a></td>
                    {{-- <td>   {{$assignment->created_at}} </td> --}}
                    <td> <a href="" class="btn btn-success">Edit assignment</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <div class="col-lg-12-margin stretch-card">
            <a href="{{ url('/assignments/create') }}" class="btn btn-primary"> Create Assigments</a>
          </div>
        <br>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Submissions</h4>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th>Assignment ID </th>
                    <th> Title </th>
                    <th> File </th>
                    <th>  Remarks</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($submissions as $submission)
                  <tr>
                    <td> {{$submission->id}} </td>
                    <td> {{$submission->assignment_id}} </td>
                    <td>{{ $submission->name }}</td>
                    <td> <a class="btn btn-success" href="/submissions/{{$submission->id}}/download"> Download Submission </a></td>
                    <td> {{$submission->remarks}} </td>
                  <td> <a class="btn btn-primary" href="/submissions/{{$submission->id}}/edit">Grade submission</a> </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection