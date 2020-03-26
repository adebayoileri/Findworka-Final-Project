@extends('inc.user')

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
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


              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">My Submissions</h6>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th class="text-left">Course Name</th>
                          <th>Submission Title</th>
                          {{-- <th>Assignment File</th> --}}
                          <th>Edit  Submission</th>
                          <th>Created At</th>
                          {{-- <th>Deadline</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        {{-- if($user_submission)
                      @foreach ($user_submissions as $submissions)
                        <tr>
                        <td>{{ $submissions->id }}</td>
                          <td class="text-left">{{$submission->course_name}}</td>
                        <td>{{ $submission->name }}</td>
                          {{-- <td><a class="mdc-button text-button--info" href="/assignments/{{$submi->id}}/download">Download</a> </td> --}}
                          {{-- <td><a class="mdc-button text-button--info" href="/submissions/edit">Edit Submission</a></td>
                          <td>{{ $submission->created_at }}</td>
                          <td></td> --}}
                          {{-- <td>In 7 days</td> --}}
                        {{-- </tr>
                        @endforeach  --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

      </div>
    </div>
  </main>
</div>
@endsection