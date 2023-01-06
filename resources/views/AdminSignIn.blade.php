<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin Log In </title>
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/css/argon.css" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="dashboard.html">
                                <img src="/images/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item d-none d-lg-block ml-lg-2">
                        <a href="{{url('/signin')}}" class="btn btn-neutral btn-icon">
                            <span class="nav-link-inner--text">Log In As Customer</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">24/7 we are here for you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                        <div class="text-black text-center mt-2 mb-4">Log In As Admin</div>
                            <div class="card-body">
                                
                                <form method="post" action="{{route('signinadmin')}}">
                                    
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-success">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    <div class="login-wrap">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>


                                                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                                                <span class="text-danger">
                                                    @error('email')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input type="password" class="form-control" name="password" required placeholder="Password">
                                                <span class="text-danger">
                                                    @error('password')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" name="remember" id=" customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                            <!-- <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> -->
                                            <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <!-- <button type="button" class="btn btn-primary my-4">Sign in</button> -->
                                            <button type="submit" class="btn btn-primary my-4">
                                                {{ __('Log In') }}
                                            </button>
                                        </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>