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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <div class="my-5 d-flex flex-column flex-root min-vh-100" id="kt_app_root">
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
                <img class="mx-auto mt-5 mb-2 theme-light-show w-25"
                    src="{{ asset('assets/media/auth/agency.png') }}" alt="" />
                <!--end::Image-->

                <!--begin::Title-->
                <h1 class="text-center text-gray-800 fs-3 fw-bold mb-7">
                    Welcome to Admin Panel
                </h1>
                <!--end::Text-->
            </div>
            <div class="pb-10 d-flex flex-center flex-column flex-column-fluid">

                <form class="mx-auto form w-75" novalidate="novalidate" id="kt_sign_in_form" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="mb-3 fs-4 text-dark fw-bolder">
                            Sign In
                        </h1>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Input group--->
                    <div class="my-2 mb-8">
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
                    <div class="my-2 mb-3">
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
                    <div class="my-5 mb-10 d-grid">
                        <button type="submit" class="btn btn-outline-primary fw-normal text-uppercase">
                            Sign In
                        </button>
                        <a href="{{route('welcome')}}" class="my-2 btn btn-outline-info fw-normal text-uppercase">
                            GO TO HOME <i class="mx-1 mt-3 fa-solid fa-arrow-right fa-beat fa-2xs"></i>
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
