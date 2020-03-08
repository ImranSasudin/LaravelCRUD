@extends('layouts.master')
@section('title','Registration')
@section('content')
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('users.registration')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <select class="form-control" id="role" name="role">
                    <option value="" selected disabled>-- Role --</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@endsection
