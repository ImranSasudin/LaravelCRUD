@extends('layouts.master')
@section('title','Employees Index')
@section('content')
  <div class="row">
    <div class="col-sm-12">
    <a href="{{ route ( 'employees.create' ) }}" class = "btn btn-primary">Create</a>
    <a href="{{ route ( 'users.logout' ) }}" class = "btn btn-danger mr-auto">Logout</a>
      <table class="table">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department</th>
          <th>Phone No.</th>
        </tr>
        @foreach($employees as $employee)
          <tr class = "text-center">
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->phone }}</td>
            <?php if (Auth::user()->role == "Admin") { ?>
            <td><a href="{{ route ( 'employees.edit',['id'=>$employee->id] ) }}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{ route ( 'employees.destroy',['id'=>$employee->id] ) }}" class = "btn btn-danger">Delete</a></td>
            <?php } else { ?>
              <td colspan="2">No Access</td>
            <?php } ?>
            
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
