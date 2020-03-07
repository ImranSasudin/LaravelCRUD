@extends('layouts.master')
@section('title','اکاون')
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
        <form action="{{route('employees.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="firstname">ناما ڤىرتاما: </label>
                <input type="text" id="firstname" name="firstname" id="firstname" class="form-control @error('title') is-invalid @enderror">
            </div>
            @error('firstname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="lastname">ناما اکهير:</label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="department">دىڤارتمىنت:</label>
                <input type="text" name="department" id="department" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">نومبور تىلىفون:</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">هانتار</button>
        </form>
    </div>
</div>

@endsection
