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
                    <th>Email</th>
                    <th>Suspend Status</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>INV-87239</td>
                    <td>Viola Ford</td>
                    <td>Paid</td>
                    <td>20 Jan 2019</td>
                    <td>$755</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection