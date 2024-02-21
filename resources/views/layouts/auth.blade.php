<!doctype html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sportfun247,bet,portal" />
    <meta name="keywords" content="Sportfun247,bet,portal" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Sportfun247" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="Sportfun247" />
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="{{asset('assets')}}/media/logos/favicon.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets')}}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <title>{{ config('app.name', 'Sportfun247') }}</title>
</head>
<body id="kt_body" class="bg-body">
{{--@include('sweetalert::alert')--}}
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->

        @yield('content')
        <!--end::Body-->
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative " style="background-color: #08174c;">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    <!--begin::Logo-->
                    <a href="{{route('dashboard')}}" class="py-9 mb-5">
                        <img alt="Logo" src="{{asset('assets')}}/media/logos/km-med-logo-white-bg.png" class="h-100px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #FFFFFF;">Sportfun247 Portal</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="fw-bold fs-2" style="color: #FFFFFF;">Bet responsibly.</p>
                    <!--end::Description-->
                </div>
                <!--end::Content-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/5.png"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Aside-->

    </div>
    <!--end::Authentication - Sign-in-->
</div>

<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets')}}/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('assets')}}/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets')}}/js/custom/authentication/sign-in/general.js"></script>
<script src="{{asset('assets')}}/js/custom/authentication/sign-up/general.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
</html>
