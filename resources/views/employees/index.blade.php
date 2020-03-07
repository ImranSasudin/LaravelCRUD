@extends('layouts.master')
@section('title','ڤىکىرجا')
@section('content')
  <div class="row">
    <div class="col-sm-12">
    <a href="{{ route ( 'employees.create' ) }}" class = "btn btn-primary">چيڤتا</a>
      <table class="table">
        <tr>
          <th>يد</th>
          <th>ناما ڤىرتاما</th>
          <th>ناما اکهير</th>
          <th>دىڤارتمىنت</th>
          <th>نومبور تىلىفون</th>
        </tr>
        @foreach($employees as $employee)
          <tr class = "text-center">
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->phone }}</td>
            <td><a href="{{ route ( 'employees.edit',['id'=>$employee->id] ) }}" class = "btn btn-info">کىماسکيني</a></td>
            <td><a href="{{ route ( 'employees.destroy',['id'=>$employee->id] ) }}" class = "btn btn-danger">ڤادام</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
