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
                    <th>Created At </th>
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
                    <th> First name </th>
                    <th> Progress </th>
                    <th> Amount </th>
                    <th> Deadline </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> Herman Beck </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 77.99 </td>
                    <td> May 15, 2015 </td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection