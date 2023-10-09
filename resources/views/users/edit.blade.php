@extends('layout.base')

@section('page-styles')
@endsection

@section('page-content')
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </nav>
    </div>
    <br>
    <!-- /BREADCRUMB -->

    <div class="d-flex justify-content-end">
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-2 me-4">Back</a>
    </div>


    <form class="row g-3 needs-validation" method="POST" action="{{ route('users.update', $user) }}">
        @csrf

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                name="name" value="{{ $user->name }}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                name="email" value="{{ $user->email }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                id="exampleFormControlInput1" name="password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password_confirmation">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection

@section('page-scripts')
@endsection
