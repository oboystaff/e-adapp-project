@extends('layout.base')

@section('page-styles')
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
@endsection

@section('page-content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-four">
                <div class="widget-heading">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/images/agenda.png') }}" alt="agenda" width="60" height="60" />
                        </div>
                        <div class="col-md-10">
                            <p style="font-size:17px;font-weight:bold">Farmer's Panel</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis mauris lacinia
                                efficitur facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Personal Details</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="simple-tab">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="item-one-tab-icon" data-bs-toggle="tab"
                                    data-bs-target="#item-one-tab-icon-pane" type="button" role="tab"
                                    aria-controls="item-one-tab-icon-pane" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg> Item One
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="item-two-tab-icon" data-bs-toggle="tab"
                                    data-bs-target="#item-two-tab-icon-pane" type="button" role="tab"
                                    aria-controls="item-two-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Item Two
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="item-three-tab-icon" data-bs-toggle="tab"
                                    data-bs-target="#item-three-tab-icon-pane" type="button" role="tab"
                                    aria-controls="item-three-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    Item Three
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="item-four-tab-icon" data-bs-toggle="tab"
                                    data-bs-target="#item-four-tab-icon-pane" type="button" role="tab"
                                    aria-controls="item-four-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    Item Four
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="item-five-tab-icon" data-bs-toggle="tab"
                                    data-bs-target="#item-five-tab-icon-pane" type="button" role="tab"
                                    aria-controls="item-five-tab-icon-pane" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    Item Five
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="item-one-tab-icon-pane" role="tabpanel"
                                aria-labelledby="item-one-tab-icon" tabindex="0">
                                <p>Item one</p>
                            </div>

                            <div class="tab-pane fade show active" id="item-two-tab-icon-pane" role="tabpanel"
                                aria-labelledby="item-two-tab-icon" tabindex="0">
                                <div class="row">
                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('farmers.update', $farmer) }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-3">
                                            <div class="col-md-12">
                                                <center>
                                                    <img id="preview"
                                                        src="{{ asset('assets/images/pictures/' . $farmer->image) }}"
                                                        alt="your image" class="p-image" width="150" height="150"
                                                        style="border-radius: 50%;" />
                                                </center>

                                                <div class="row">
                                                    <div class="col-md-6" style="text-align:right">
                                                        <a><img src="{{ asset('assets/images/camera.png') }}"
                                                                width="30" height="30" class="social" /></a>
                                                        <p>Take a photo</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a><img src="{{ asset('assets/images/upload.png') }}"
                                                                width="30" height="30" class="social"
                                                                id="button" /></a>
                                                        <p>Upload photo</p>
                                                    </div>
                                                </div>

                                                <input type="file"
                                                    class="form-control mt-3 @error('image') is-invalid @enderror"
                                                    name="image" id="selectImage" style="display: none">

                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <p style="margin-top:50px">Gender</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-primary form-check-inline">
                                                            <input
                                                                class="form-check-input @error('gender') is-invalid @enderror"
                                                                type="radio" name="gender"
                                                                id="form-check-radio-default-checked" value="Male"
                                                                {{ $farmer->gender == 'Male' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="form-check-radio-default-checked">
                                                                Male
                                                            </label>

                                                            @error('gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-primary form-check-inline">
                                                            <input
                                                                class="form-check-input @error('gender') is-invalid @enderror"
                                                                type="radio" name="gender"
                                                                id="form-check-radio-default" value="Female"
                                                                {{ $farmer->gender == 'Female' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="form-check-radio-default">
                                                                Female
                                                            </label>

                                                            @error('gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">First Name</label>
                                                <input type="text"
                                                    class="form-control @error('firstname') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="firstname"
                                                    value="{{ $farmer->firstname }}">

                                                @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Birth Place</label>
                                                <input type="text"
                                                    class="form-control @error('birth_place') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="birth_place"
                                                    value="{{ $farmer->birth_place }}">

                                                @error('birth_place')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">House Number</label>
                                                <input type="text"
                                                    class="form-control @error('house_number') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="house_number"
                                                    value="{{ $farmer->house_number }}">

                                                @error('house_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Occupation</label>
                                                <input type="text"
                                                    class="form-control @error('occupation') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="occupation"
                                                    value="{{ $farmer->occupation }}">

                                                @error('occupation')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Religion</label>
                                                <input type="text"
                                                    class="form-control @error('religion') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="religion"
                                                    value="{{ $farmer->religion }}">

                                                @error('religion')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Last Name</label>
                                                <input type="text"
                                                    class="form-control @error('lastname') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="lastname"
                                                    value="{{ $farmer->lastname }}">

                                                @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Date of Birth</label>
                                                <input type="date"
                                                    class="form-control @error('dob') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="dob"
                                                    value="{{ $farmer->dob }}">

                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Community</label>
                                                <input type="text"
                                                    class="form-control @error('community') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="community"
                                                    value="{{ $farmer->community }}">

                                                @error('community')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">District</label>
                                                <input type="text"
                                                    class="form-control @error('district') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="district"
                                                    value="{{ $farmer->district }}">

                                                @error('district')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Marital Status</label>
                                                <input type="text"
                                                    class="form-control @error('marital_status') is-invalid @enderror"
                                                    id="exampleFormControlInput1" name="marital_status"
                                                    value="{{ $farmer->marital_status }}">

                                                @error('marital_status')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1">Bio</label>
                                                <textarea class="form-control @error('bio') is-invalid @enderror" id="exampleFormControlTextarea1" rows="5"
                                                    name="bio">{{ $farmer->bio }}</textarea>

                                                @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12" style="margin-top:190px">
                                                <button class="btn btn-success btn-sm">Update</button>
                                                <button class="btn btn-warning btn-sm">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="item-three-tab-icon-pane" role="tabpanel"
                                aria-labelledby="item-three-tab-icon" tabindex="0">
                                <p class="mt-3">Item three</p>
                            </div>
                            <div class="tab-pane fade" id="item-four-tab-icon-pane" role="tabpanel"
                                aria-labelledby="item-four-tab-icon" tabindex="0">
                                <p class="mt-3">Item four</p>
                            </div>
                            <div class="tab-pane fade" id="item-five-tab-icon-pane" role="tabpanel"
                                aria-labelledby="item-five-tab-icon" tabindex="0">
                                <p class="mt-3">Item five</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/main2.js') }}"></script>
@endsection
