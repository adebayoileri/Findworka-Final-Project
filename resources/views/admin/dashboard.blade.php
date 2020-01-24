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

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Findworka Academy</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin/Tutor Dashboard</span></a>
      </li>

    </ul>
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
        <div class="panel-body">
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
