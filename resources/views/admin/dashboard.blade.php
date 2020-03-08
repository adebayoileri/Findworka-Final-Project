<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Findworka-Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('inc.adminnavbar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
                </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">

            <div class="topbar-divider d-none d-sm-block"></div>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin/Tutor Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            </li>
            </div>
        <div class="panel-body">
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
                        List Of available courses
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        User & Course Management
                    </div>
                    <div class="card-body">
                     
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h3>Site Data</h3>
        <table class="table table-striped">
          <tr>
              <th>Name</th>
              <th>User Type</th>
              <th>Course Enrolled</th>
              <th>Payment Status</th>
          </tr>
            @foreach ($user as $person)
            <tr>
              <th> {{$person->name}}</th>
              @if($person->privilge_id = 1)
              <th> Student</th>
              @else
                  <th>Tutor</th>
              @endif
              <th>paid</th>
          </tr>
            @endforeach
      </table>
        <br>
            <h3>All Admin Endpoints</h3>
            <table class="table table-striped">
                <tr>
                    <th>Endpoints </th>
                    <th></th>
                    <th>Description</th>
                    <th></th>
                    <th>Links</th>
                </tr>
                    <tr>
                        <th> /program</th>
                        <th></th>
                        <th>Access all available programs</th>
                        <th></th>
                        <th><a href="/program" class="btn btn-primary">Program Url</a></th>
                        <th></th>
                    </tr>
                    <tr>
                    <th> /course </th>
                        <th></th>
                        <th>Access all available courses</th>
                        <th></th>
                    <th><a href="/admin" class="btn btn-primary">Course Url</a></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th> /privileges</th>
                        <th></th>
                        <th>Access all available privileges</th>
                        <th></th>
                        <th><a href="/privilege" class="btn btn-primary">Privilege Url</a></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th> /payment_statuses</th>
                        <th></th>
                        <th>Access all users payment_statuses</th>
                        <th></th>
                        <th><a href="/payment_status" class="btn btn-primary">Users Payment Status Url</a></th>
                        <th></th>
                    </tr>
            </table>
          </div>


    </div>
    <!-- End of Content Wrapper -->

  </div>
</body>

</html>
