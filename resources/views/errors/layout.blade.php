<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sportfun247,portal" />
    <meta name="keywords" content="Sportfun247,portal" />
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
    <title>@yield('title') | Sportfun247</title>
</head>
    <body id="kt_body" class="auth-bg">
{{--        <div class="flex-center position-ref full-height">--}}
{{--            <div class="content">--}}
{{--                <div class="title">--}}
{{--                    @yield('message')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Error 500 -->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
            <!--begin::Logo-->
            <a href="{{url('/')}}" class="mb-10 pt-lg-10">
                <img alt="Logo" src="{{asset('assets')}}/media/logos/km-med-logo-white-bg.png" class="h-90px mb-5" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="pt-lg-10 mb-10">
                <!--begin::Logo-->
                <h1 class="fw-bolder fs-4hx text-gray-900 mb-10">@yield('code')</h1>
                <!--end::Logo-->
                <!--begin::Message-->
                <div class="fw-bold fs-3 text-muted mb-15">@yield('message')</div>
                <!--end::Message-->
                <!--begin::Action-->
                <div class="text-center">
                    <a href="{{url('/')}}" class="btn btn-lg btn-primary fw-bolder">Go to homepage</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Illustration-->
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sigma-1/9-dark.png"></div>
            <!--end::Illustration-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://www.kemsa.co.ke" class="text-muted text-hover-primary px-2" target="_blank">Home</a>
                <a href="https://www.kemsa.co.ke/about-us/" class="text-muted text-hover-primary px-2" target="_blank">About Us</a>
                <a href="https://www.kemsa.co.ke/contact-us/" class="text-muted text-hover-primary px-2" target="_blank">Contact Us</a>

            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Error 500-->
</div>


        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{asset('assets')}}/plugins/global/plugins.bundle.js"></script>
        <script src="{{asset('assets')}}/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->


    </body>
</html>
