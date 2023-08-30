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
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/metronic8/demo1/assets/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('/metronic8/demo1/assets/media/auth/bg10-dark.jpeg');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="p-10 pb-0 d-flex flex-column flex-center pb-lg-10 w-100">
                    <!--begin::Image-->
                    <img class="mx-auto mb-10 theme-light-show mw-100 w-150px w-lg-300px mb-lg-20"
                        src="{{asset('assets/media/auth/agency.png')}}" alt="" />
                    <img class="mx-auto mb-10 theme-dark-show mw-100 w-150px w-lg-300px mb-lg-20"
                        src="{{asset('assets/media/auth/agency-dark.png')}}" alt="" />
                    <!--end::Image-->

                    <!--begin::Title-->
                    <h1 class="text-center text-gray-800 fs-2qx fw-bold mb-7">
                        Fast, Efficient and Productive
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fs-base fw-semibold">
                        In this kind of post, <a href="#" class="opacity-75-hover text-primary me-1">the
                            blogger</a>

                        introduces a person they’ve interviewed <br /> and provides some background information about

                        <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>
                        and their <br /> work following this is a transcript of the interview.
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="p-12 d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end">
                <!--begin::Wrapper-->
                <div class="p-10 bg-body d-flex flex-column flex-center rounded-4 w-md-600px">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">

                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="/metronic8/demo1/../demo1/index.html" action="#">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="mb-3 text-dark fw-bolder">
                                        Sign In
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Your Social Campaigns
                                    </div>
                                    <!--end::Subtitle--->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Login options-->
                                <div class="row g-3 mb-9">
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link--->
                                        <a href="#"
                                            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo"
                                                src="/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                                class="h-15px me-3" />
                                            Sign in with Google
                                        </a>
                                        <!--end::Google link--->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link--->
                                        <a href="#"
                                            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo"
                                                src="/metronic8/demo1/assets/media/svg/brand-logos/apple-black.svg"
                                                class="theme-light-show h-15px me-3" />
                                            <img alt="Logo"
                                                src="/metronic8/demo1/assets/media/svg/brand-logos/apple-black-dark.svg"
                                                class="theme-dark-show h-15px me-3" />
                                            Sign in with Apple
                                        </a>
                                        <!--end::Google link--->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Login options-->

                                <!--begin::Separator-->
                                <div class="separator separator-content my-14">
                                    <span class="text-gray-500 w-125px fw-semibold fs-7">Or with email</span>
                                </div>
                                <!--end::Separator-->

                                <!--begin::Input group--->
                                <div class="mb-8 fv-row">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                                        class="bg-transparent form-control" />
                                    <!--end::Email-->
                                </div>

                                <!--end::Input group--->
                                <div class="mb-3 fv-row">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                                        class="bg-transparent form-control" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group--->

                                <!--begin::Wrapper-->
                                <div class="flex-wrap gap-3 mb-8 d-flex flex-stack fs-base fw-semibold">
                                    <div></div>

                                    <!--begin::Link-->
                                    <a href="/metronic8/demo1/../demo1/authentication/layouts/overlay/reset-password.html"
                                        class="link-primary">
                                        Forgot Password ?
                                    </a>
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
                                            Please wait... <span
                                                class="align-middle spinner-border spinner-border-sm ms-2"></span>
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
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->

                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Footer-->
                        <div class=" d-flex flex-stack">
                            <!--begin::Languages-->
                            <div class="me-10">
                                <!--begin::Toggle-->
                                <button
                                    class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    data-kt-menu-offset="0px, 0px">
                                    <img data-kt-element="current-lang-flag" class="rounded w-20px h-20px me-3"
                                        src="/metronic8/demo1/assets/media/flags/united-states.svg" alt="" />

                                    <span data-kt-element="current-lang-name" class="me-1">English</span>

                                    <i class="m-0 rotate-180 ki-duotone ki-down fs-5 text-muted"></i> </button>
                                <!--end::Toggle-->

                                <!--begin::Menu-->
                                <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px fs-7"
                                    data-kt-menu="true" id="kt_auth_lang_menu">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-5 menu-link d-flex" data-kt-lang="English">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="/metronic8/demo1/assets/media/flags/united-states.svg"
                                                    alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">English</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-5 menu-link d-flex" data-kt-lang="Spanish">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="/metronic8/demo1/assets/media/flags/spain.svg"
                                                    alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">Spanish</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-5 menu-link d-flex" data-kt-lang="German">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="/metronic8/demo1/assets/media/flags/germany.svg"
                                                    alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">German</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-5 menu-link d-flex" data-kt-lang="Japanese">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="/metronic8/demo1/assets/media/flags/japan.svg"
                                                    alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">Japanese</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <a href="#" class="px-5 menu-link d-flex" data-kt-lang="French">
                                            <span class="symbol symbol-20px me-4">
                                                <img data-kt-element="lang-flag" class="rounded-1"
                                                    src="/metronic8/demo1/assets/media/flags/france.svg"
                                                    alt="" />
                                            </span>
                                            <span data-kt-element="lang-name">French</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Languages-->

                            <!--begin::Links-->
                            <div class="gap-5 d-flex fw-semibold text-primary fs-base">
                                <a href="/metronic8/demo1/../demo1/pages/team.html" target="_blank">Terms</a>

                                <a href="/metronic8/demo1/../demo1/pages/pricing/column.html"
                                    target="_blank">Plans</a>

                                <a href="/metronic8/demo1/../demo1/pages/contact.html" target="_blank">Contact Us</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
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
