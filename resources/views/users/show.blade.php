@extends('layout.base')

@section('page-styles')
@endsection

@section('page-content')
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Details</li>
            </ol>
        </nav>
    </div>
    <br>
    <!-- /BREADCRUMB -->

    <div class="d-flex justify-content-end">
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-2 me-4">Back</a>
    </div>


    <form class="row g-3 needs-validation" method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                name="name" value="{{ $user->name }}" readonly>
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                name="email" value="{{ $user->email }}" readonly>
        </div>

    </form>
@endsection

@section('page-scripts')
@endsection
