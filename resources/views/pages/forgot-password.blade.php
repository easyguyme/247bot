{{--<!doctype html>--}}
{{--<html class="no-js" lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta http-equiv="x-ua-compatible" content="ie=edge">--}}
{{--        <title>{{ __('Forgot Password | Kemsa Careers') }}</title>--}}
{{--        <meta name="description" content="">--}}
{{--        <meta name="keywords" content="">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        --}}
{{--        <link rel="icon" href="{{ asset('favicon.png')}}" type="image/x-icon" />--}}

{{--        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">--}}
{{--        --}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('dist/css/style.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('dist/css/theme-image.css')}}">--}}
{{--        <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js')}}"></script>--}}
{{--    </head>--}}

{{--    <body>--}}
{{--        <!--[if lt IE 8]>--}}
{{--            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>--}}
{{--        <![endif]-->--}}

{{--        <div class="auth-wrapper">--}}
{{--            <div class="container-fluid h-100">--}}
{{--                <div class="row flex-row h-100 bg-white">--}}
{{--                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">--}}
{{--                        <div class="lavalite-bg" >--}}
{{--                            <div class="lavalite-overlay"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">--}}
{{--                        <div class="authentication-form mx-auto">--}}
{{--                            <div class="logo-centered">--}}
{{--                                <a href=""><img width="150"  src="{{ asset('img/logo.png')}}" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <h3>{{ __('Forgot Password') }}</h3>--}}
{{--                            <p>{{ __('We will send you a link to reset password.') }}</p>--}}
{{--                            @if (session('status'))--}}
{{--                                <div class="alert alert-success" role="alert">--}}
{{--                                    {{ session('status') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <form method="POST" action="{{ route('password.email') }}">--}}
{{--                            @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your email address" name="email" value="{{ old('email') }}" required>--}}
{{--                                    <i class="ik ik-mail"></i>--}}
{{--                                </div>--}}
{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" style="display: block;" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                                <div class="sign-btn text-center">--}}
{{--                                    <button class="btn btn-theme">{{ __('Submit') }}</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div class="register">--}}
{{--                                <p>{{ __('Not a member') }}? <a href="{{ url('register')}}">{{ __('Create an account') }}</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}
{{--        <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js')}}"></script>--}}
{{--        <script src="{{ asset('plugins/popper.js')}}/dist/umd/popper.min.js')}}"></script>--}}
{{--        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>--}}
{{--        <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>--}}
{{--        <script src="{{ asset('plugins/screenfull/dist/screenfull.js')}}"></script>--}}
{{--    </body>--}}
{{--</html>--}}

@extends('layouts.auth')

@section('content')
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form w-100" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Logo-->
                        <a href="{{route('dashboard')}}" class="py-9 mb-5">
                            <img alt="Logo" src="{{asset('assets')}}/media/logos/km-med-logo-white-bg.png" class="h-100px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Forgot Password ?</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                        <input class="form-control form-control-solid @error('email') is-invalid @enderror" type="email" placeholder="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                        <button type="submit" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                            <span class="indicator-label">Send Password Reset Link</span>
                            <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <a href="{{route('login')}}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
            <!--begin::Links-->
            <div class="d-flex flex-center fw-bold fs-6">
                <a href="https://www.kemsa.co.ke" class="text-muted text-hover-primary px-2" target="_blank">Home</a>
                <a href="https://www.kemsa.co.ke/about-us/" class="text-muted text-hover-primary px-2" target="_blank">About Us</a>
                <a href="https://www.kemsa.co.ke/contact-us/" class="text-muted text-hover-primary px-2" target="_blank">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Body-->
@endsection
