<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Convention Etat Employeur</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/assets/css/oneui.css') }}">

    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {
            !!json_encode(['csrfToken' => csrf_token(), ]) !!
        };
    </script>

</head>

<body>
 <div id="page-container">
 <!--div class="container-login100" style="background-image: url('dist/img/fatoush.jpg');"-->
    <div class="bg-image" style="background-image: url('{{ asset('public/dist/img/fatoush.jpg') }}');">
        <!-- Main Container -->
        <main id="main-container">
 
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign In Section -->
                    <div class="">
                        <div class="content content-full">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p class="mb-2">
                                            Se Connecter
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">
                                        </h2>
                                    </div>

                                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="py-3 ">
                                            <div class="form-group">
                                                <input id="email" type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required autofocus placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>


                                            <!-- <div class="form-group">
            <div class="d-md-flex align-items-md-center justify-content-md-between">
             <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
             </div> -->
                                            <!-- @if (Route::has('password.request'))
             <div class="py-2">
              <a class="font-size-sm" href="{{ route('password.request') }}">Forgot Password?</a>
             </div>
         @endif -->
                                            <!-- </div>
           </div>
          </div> -->
                                            <div class="form-group row justify-content-center mb-0">
                                                <div class="col-md-6 col-xl-5">
                                        <h1 class="h4 mb-1">
                                        <h1 class="h4 mb-1">
                                                    <button type="submit" class="btn btn-block text-white" style="background-color:#4169E1;">
                                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Connecter
                                                    </button>
                                                </div>
                                            </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>

                    <script src="{{ asset('public/assets/js/oneui.core.min.js ') }}"></script>

                    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
                    <script src="{{ asset('public/assets/js/oneui.app.min.js ') }}"></script>

                    <!-- Page JS Plugins -->
                    <script src="{{ asset('public/assets/js/plugins/jquery-validation/jquery.validate.min.js ') }}"></script>

                    <!-- Page JS Code -->
                    <script src="{{ asset('public/assets/js/pages/op_auth_signin.min.js ') }}"></script>