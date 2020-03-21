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
                    <th> Remarks </th>
                    <th> File </th>
                    <th>Created At </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($assignments as $assignment)
                  <tr>
                    <td class="py-1">
                      {{$assignment->course_name}}
                    <td>   {{$assignment->name}} </td>
                    <td>
                      {{$assignment->remarks}}
                    </td>
                    {{-- <td>   {{$assignment->file}}</td> --}}
                    <td>   {{$assignment->created_at}} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
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