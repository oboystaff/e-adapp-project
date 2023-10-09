<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>E-Adapp | Login</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url({{ asset('assets/images/eadapp.png') }});">
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="form-group">
                            <img src="{{ asset('assets/images/e-adapp-logo.png') }}" alt="company logo" with="70"
                                height="70" />
                        </div>

                        <h3 style="margin-bottom:30px;color:green"><strong>Login</strong></h3>

                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf

                            @if (session()->has('status'))
                                <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4"
                                    role="alert">
                                    <span style="color:green">{{ session('status') }}</span>
                                </div>
                            @endif

                            <div class="form-group first">
                                <label for="email"><b>Email</b></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email or email" id="email" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password"><b>Password</b></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Your Password" id="password" name="password">
                                <i class="far fa-eye" id="togglePassword"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" name="remember" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-success"
                                style="margin-top: -20px">

                            <div class="form-group" style="margin-top:20px">
                                <span class="ml-auto" style="padding-right: 30px">Don't have an account?</span>
                                <span class="ml-auto"><a href="{{ route('auth.signup') }}" class="forgot-pass"
                                        style="color:green">Sign
                                        up</a></span>
                            </div>
                        </form>

                        <div class="form-group" style="margin-bottom:30px">
                            <div class="seperator">
                                <hr class="new1">
                                <div class="seperator-text"><span>Or continue with</span></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="social" href="#">
                                        <img src="{{ asset('assets/images/gmail.png') }}" alt="gmail account"
                                            width="30" height="30" />
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="social" href="#">
                                        <img src="{{ asset('assets/images/facebook.png') }}" alt="facebook account"
                                            with="30" height="30" />
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="social" href="#">
                                        <img src="{{ asset('assets/images/twitter.png') }}" alt="twitter account"
                                            with="30" height="30" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top:50px">
                            <span style="font-size:12px;">By clicking the button above you agree to our
                                <span style="color:green">terms of
                                    us</span> and <span style="color: green">privacy
                                    policy.</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
