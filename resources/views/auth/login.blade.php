<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Login | Admin Panel
    </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords"
        content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/metronic8/demo1/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--End::Google Tag Manager -->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <div class="my-20 d-flex flex-column flex-root min-vh-100" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/metronic8/demo1/assets/media/auth/bg10.jpeg');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Authentication - Sign-in -->
        <div class="px-20 mx-auto my-10 mt-20 card">
            <!--begin::Content-->
            <div class="p-10 pb-0 d-flex flex-column flex-center w-100">
                <!--begin::Image-->
                <img class="mx-auto mb-2 theme-light-show mw-50 w-50px w-lg-150px"
                    src="{{ asset('assets/media/auth/agency.png') }}" alt="" />
                <!--end::Image-->

                <!--begin::Title-->
                <h1 class="text-center text-gray-800 fs-qx fw-bold mb-7">
                    Welcome to Admin Panel
                </h1>
                <!--end::Text-->
            </div>
            <div class="pb-10 d-flex flex-center flex-column flex-column-fluid">

                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="mb-3 text-dark fw-bolder">
                            Sign In
                        </h1>
                        <div class="text-gray-500 fw-semibold fs-6">
                            Your Social Campaigns
                        </div>
                        <!--end::Subtitle--->
                    </div>
                    <!--begin::Heading-->

                    <!--begin::Separator-->
                    <div class="separator separator-content my-14">
                        <span class="text-gray-500 w-125px fw-semibold fs-7">Or with email</span>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Input group--->
                    <div class="mb-8 fv-row">
                        <input type="email" placeholder="Email" name="email" autocomplete="off"
                            class="bg-transparent form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!--end::Input group--->
                    <div class="mb-3 fv-row">
                        <!--begin::Password-->
                        <input type="password" placeholder="Password" name="password" autocomplete="off"
                            class="bg-transparent form-control @error('password') is-invalid @enderror" required
                            autocomplete="current-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Password-->
                    </div>
                    <!--end::Input group--->

                    <!--begin::Wrapper-->
                    <div class="flex-wrap gap-3 mb-8 d-flex flex-stack fs-base fw-semibold">
                        <div></div>

                        <!--begin::Link-->
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link-primary">
                                Forgot Password ?
                            </a>
                        @endif
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Submit button-->
                    <div class="mb-10 d-grid">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Sign In</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="align-middle spinner-border spinner-border-sm ms-2"></span>
                            </span>
                            <!--end::Indicator progress--> </button>
                    </div>
                    <!--end::Submit button-->

                    <!--begin::Sign up-->
                    <div class="text-center text-gray-500 fw-semibold fs-6">
                        Not a Member yet?

                        <a href="/metronic8/demo1/../demo1/authentication/layouts/overlay/sign-up.html"
                            class="link-primary">
                            Sign up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var hostUrl = "/metronic8/demo1/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/metronic8/demo1/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/metronic8/demo1/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/metronic8/demo1/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>
