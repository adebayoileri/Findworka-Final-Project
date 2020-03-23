@extends('inc.user')

@section('content')
               <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Weekly Assignments</h6>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th class="text-left">Course Name</th>
                          <th>Assignment Title</th>
                          <th>Assignment File</th>
                          <th>Submit Assignment</th>
                          <th>Created At</th>
                          <th>Deadline</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($assignments as $assignment)
                        <tr>
                        <td>{{ $assignment->id }}</td>
                          <td class="text-left">{{$assignment->course_name}}</td>
                        <td>{{ $assignment->name }}</td>
                          <td><a class="mdc-button text-button--info" href="/assignments/{{$assignment->id}}/download">Download</a> </td>
                          <td><a class="mdc-button text-button--info" href="/submissions/create">Submit Assignment</a></td>
                          <td>{{ $assignment->created_at }}</td>
                          <td>In 7 days</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection