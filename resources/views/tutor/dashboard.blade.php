@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Tutor Dashboard</div>
                <div class="card-body">
                    <ul>
                        <li>User Management </li>
                    <ul>
                    <li><a href="{{url('/fw/users')}}">View Users</a></li>
                    <li><a href="{{url('/fw/users/customer')}}">View Customers</a></li>
                    <li><a href="{{url('/fw/users/admin')}}">View Admins</a></li>
                    <li><a href="{{url('/fw/users/employees')}}">View employees</a></li>
                        <li><a href="{{url('/fw/users/create')}}">Create User</a></li>
                    </ul>
                    </ul>
                    <hr>
                    <ul>
                        <li>Role Management </li>
                    <ul>
                    <li><a href="{{url('/fw/roles')}}">View Roles</a></li>
                        <li><a href="">View Permissions</a></li>
                    <li><a href="{{url('/fw/roles/create')}}">Create Role</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Adminstrators</div>

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
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Midldlename</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $user)
                                  @if($user->roles->first()->name === 'Adminstrator')
                                  <tr>
                                  <th scope="row">{{ $user->id }}</th>
                                  <td>{{ $user->firstname }}</td>
                                  <td>{{ $user->lastname }}</td>
                                  <td>{{ $user->middlename }}</td>
                                  <td>{{ $user->roles->first()->name }}</td>
                                  <td><a role="button" href="{{url('/fw/users/edit/'.$user->id) }}" class="btn btn-primary">Edit</a> <a role="button" class="btn btn-danger">Delete</a></td>
                                </tr>
                                  @endif
                            @endforeach --}}
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
