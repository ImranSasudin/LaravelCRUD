@extends('layouts.master')
@section('title','Login')
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
        <form action="{{route('users.login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="id">ID: </label>
                <input type="text" name="id" id="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@endsection
