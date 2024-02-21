{{--<!doctype html>--}}
{{--<html class="no-js" lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta http-equiv="x-ua-compatible" content="ie=edge">--}}
{{--        <title>{{ __('Sign Up | Kemsa Careers')}}</title>--}}
{{--        <meta name="description" content="">--}}
{{--        <meta name="keywords" content="">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        --}}
{{--        <link rel="icon" href="{{ asset('favicon.png') }}"/>--}}

{{--        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">--}}
{{--        --}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('dist/css/theme.min.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('dist/css/theme-image.css') }}">--}}
{{--        <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>--}}
{{--    </head>--}}

{{--    <body>--}}
{{--        <!--[if lt IE 8]>--}}
{{--            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>--}}
{{--        <![endif]-->--}}

{{--        <div class="auth-wrapper">--}}
{{--            <div class="container-fluid h-100">--}}
{{--                <div class="row flex-row h-100 bg-white">--}}
{{--                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">--}}
{{--                        <div class="lavalite-bg">--}}
{{--                            <div class="lavalite-overlay"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">--}}
{{--                        <div class="authentication-form mx-auto">--}}
{{--                            <div class="logo-centered">--}}
{{--                                <a href=""><img width="150" src="{{ asset('img/logo.png') }}" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <p>{{ __('Join us today! It takes only few steps')}}</p>--}}
{{--                            <form action="{{url('register')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>--}}
{{--                                    <i class="ik ik-user"></i>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>--}}
{{--                                    <i class="fa fa-envelope"></i>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="password" class="form-control" placeholder="Password" name="password" required>--}}
{{--                                    <i class="ik ik-lock"></i>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>--}}
{{--                                    <i class="ik ik-eye-off"></i>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12 text-left">--}}
{{--                                        <label class="custom-control custom-checkbox">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">--}}
{{--                                            <span class="custom-control-label">&nbsp;{{ __('I Accept')}} <a href="#">{{ __('Terms and Conditions')}}</a></span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="sign-btn text-center">--}}
{{--                                    <button class="btn btn-theme">{{ __('Create Account')}}</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div class="register">--}}
{{--                                <p>{{ __('Already have an account?')}} <a href="{{url('login')}}">{{ __('Sign In')}}</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}
{{--        <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>--}}
{{--        <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>--}}
{{--        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
{{--        <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>--}}
{{--        <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>--}}
{{--    </body>--}}
{{--</html>--}}
@extends('layouts.auth')

@section('content')
<!--begin::Body-->
<div class="d-flex flex-column flex-lg-row-fluid py-10">
    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <!--begin::Form-->

            <form class="form w-100" id="kt_sign_up_form"   method="POST" action="{{ route('register') }}">
                @csrf
                <!--begin::Heading-->
                <div class="mb-10 text-center">
                    <!--begin::Logo-->
                    <a href="{{route('dashboard')}}" class="py-9 mb-5">
                        <img alt="Logo" src="{{asset('assets')}}/media/logos/km-med-logo-white-bg.png" class="h-100px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Create an Account</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                        <a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here</a></div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->

                <!--begin::Input group-->
                <div class="row fv-row mb-7">

                    <!--begin::Col-->

                    <label class="form-label fw-bolder text-dark fs-6">Title</label>
                    <select class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror" name="title" id="title" required autofocus >
                        <option value=""></option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss.">Miss.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7">

                    <!--begin::Col-->

                    <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
                    <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" type="text" placeholder="" name="name" value="{{ old('name') }}" required autocomplete="name" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="email" placeholder="" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->

                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->

                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" placeholder="" name="password" required autocomplete="new-password" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
                        </div>

                        <!--end::Input wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        @if ($errors->first('password'))
                            @foreach ($errors->all() as $error)
                                <div class="error text-danger">{{$error}}</div>
                            @endforeach
                        @endif
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Hint-->
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                    <!--end::Hint-->
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>

                                    </span>
                    @enderror
                </div>

                <!--end::Input group=-->
                <!--begin::Input group-->

                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" required autocomplete="new-password" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
                        </div>

                        <!--end::Input wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                </div>

                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="employee" value=1 />
                        <span class="form-check-label fw-bold text-gray-700 fs-6">Are you a KEMSA Employee?.</span>
                    </label>
                    @error('employee')
                    {{--                                <span class="invalid-feedback" role="alert">--}}
                    <strong>{{ $message }}</strong>

                    {{--                                    </span>--}}
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1"  required/>
                        <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
										<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                    </label>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" id="kt_sign_up_submit"  class="btn btn-lg btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
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
