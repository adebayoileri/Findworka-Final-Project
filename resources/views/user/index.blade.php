<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Findworka Academy User managemnet">
  <meta name="author" content="List of users in the database">

  <title>Findworka-Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

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
            <h1 class="h3 mb-0 text-gray-800">User Management</h1>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Available users</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th>User Type</th>
                                    <th scope="col">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                          <tr>
                                          <th scope="row">{{ $user->id }}</th>
                                          <td>{{ $user->name }}</td>
                                           @if ($user->privilege_id == 1)
                                             <td>Student</td> 
                                          @else
                                              <td>Tutor</td>
                                          @endif 
                                          <td><a role="button" href="{{url('/user/'.$user->id.'/edit') }}" class="btn btn-primary">Edit</a>@if ($user->suspend == 0)
                                            <a href="/{{$user->id}}/suspend" role="button" class="btn btn-danger">Suspend</a>
                                          @else
                                          <a href="/{{$user->id}}/unsuspend" role="button" class="btn btn-danger">Unsuspend</a>
                                          @endif
                                          <a href="/assigncourse" class="btn btn-primary">Assign Course</a>
                                         </td>
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>

                        </div>
                    </div>
                </div>
        </div>
        <a href="/user/create" class="btn btn-primary"> Create New User</a>

    </div>
    <!-- End of Content Wrapper -->

  </div>
</body>

</html>

   

