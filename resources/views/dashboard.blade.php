@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid"
                        id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">

                            <!--begin::Toolbar-->
                            <div id="kt_app_toolbar"
                                class="py-3 app-toolbar py-lg-6 ">

                                <!--begin::Toolbar container-->
                                <div id="kt_app_toolbar_container"
                                    class="app-container container-fluid d-flex flex-stack ">

                                    <!--begin::Page title-->
                                    <div
                                        class="flex-wrap page-title d-flex flex-column justify-content-center me-3 ">
                                        <!--begin::Title-->
                                        <h1
                                            class="my-0 page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center">
                                            Multipurpose
                                        </h1>
                                        <!--end::Title-->

                                        <!--begin::Breadcrumb-->
                                        <ul
                                            class="pt-1 my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                                            <!--begin::Item-->
                                            <li
                                                class="breadcrumb-item text-muted">
                                                <a
                                                    href="/metronic8/demo1/../demo1/index.html"
                                                    class="text-muted text-hover-primary">
                                                    Home </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <span
                                                    class="bg-gray-400 bullet w-5px h-2px"></span>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li
                                                class="breadcrumb-item text-muted">
                                                Dashboards </li>
                                            <!--end::Item-->

                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Page title-->
                                    <!--begin::Actions-->
                                    <div
                                        class="gap-2 d-flex align-items-center gap-lg-3">

                                        <!--begin::Secondary button-->
                                        <a href="#"
                                            class="btn btn-sm fw-bold btn-secondary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_create_app">
                                            Rollover </a>
                                        <!--end::Secondary button-->

                                        <!--begin::Primary button-->
                                        <a href="#"
                                            class="btn btn-sm fw-bold btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target">
                                            Add Target </a>
                                        <!--end::Primary button-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Content-->
                            <div id="kt_app_content"
                                class="app-content flex-column-fluid ">

                                <!--begin::Content container-->
                                <div id="kt_app_content_container"
                                    class="app-container container-fluid ">
                                    <!--begin::Row-->
                                    <div class="mb-5 row g-5 gx-xl-10 mb-xl-10">
                                        <!--begin::Col-->
                                        <div
                                            class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                                            <!--begin::Card widget 20-->
                                            <div
                                                class="mb-5 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-xl-10"
                                                style="background-color: #F1416C;background-image:url('./assets/media/patterns/vector-1.png')">
                                                <!--begin::Header-->
                                                <div class="pt-5 card-header">
                                                    <!--begin::Title-->
                                                    <div
                                                        class="card-title d-flex flex-column">
                                                        <!--begin::Amount-->
                                                        <span
                                                            class="text-white fs-2hx fw-bold me-2 lh-1 ls-n2">69</span>
                                                        <!--end::Amount-->

                                                        <!--begin::Subtitle-->
                                                        <span
                                                            class="pt-1 text-white opacity-75 fw-semibold fs-6">Active
                                                            Projects</span>
                                                        <!--end::Subtitle-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Card body-->
                                                <div
                                                    class="pt-0 card-body d-flex align-items-end">
                                                    <!--begin::Progress-->
                                                    <div
                                                        class="mt-3 d-flex align-items-center flex-column w-100">
                                                        <div
                                                            class="mt-auto mb-2 text-white opacity-75 d-flex justify-content-between fw-bold fs-6 w-100">
                                                            <span>43 Pending</span>
                                                            <span>72%</span>
                                                        </div>

                                                        <div
                                                            class="mx-3 bg-white bg-opacity-50 rounded h-8px w-100">
                                                            <div
                                                                class="bg-white rounded h-8px"
                                                                role="progressbar"
                                                                style="width: 72%;"
                                                                aria-valuenow="50"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card widget 20-->

                                            <!--begin::Card widget 7-->
                                            <div
                                                class="mb-5 card card-flush h-md-50 mb-xl-10">
                                                <!--begin::Header-->
                                                <div class="pt-5 card-header">
                                                    <!--begin::Title-->
                                                    <div
                                                        class="card-title d-flex flex-column">
                                                        <!--begin::Amount-->
                                                        <span
                                                            class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                                        <!--end::Amount-->

                                                        <!--begin::Subtitle-->
                                                        <span
                                                            class="pt-1 text-gray-400 fw-semibold fs-6">Professionals</span>
                                                        <!--end::Subtitle-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Card body-->
                                                <div
                                                    class="card-body d-flex flex-column justify-content-end pe-0">
                                                    <!--begin::Title-->
                                                    <span
                                                        class="mb-2 text-gray-800 fs-6 fw-bolder d-block">Today’s
                                                        Heroes</span>
                                                    <!--end::Title-->

                                                    <!--begin::Users group-->
                                                    <div
                                                        class="symbol-group symbol-hover flex-nowrap">
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Alan Warden">
                                                            <span
                                                                class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                        </div>
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Michael Eberon">
                                                            <img alt="Pic"
                                                                src="./assets/media/avatars/300-11.jpg" />
                                                        </div>
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Susan Redwood">
                                                            <span
                                                                class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                        </div>
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Melody Macy">
                                                            <img alt="Pic"
                                                                src="./assets/media/avatars/300-2.jpg" />
                                                        </div>
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Perry Matthew">
                                                            <span
                                                                class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                        </div>
                                                        <div
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip"
                                                            title="Barry Walter">
                                                            <img alt="Pic"
                                                                src="./assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <a href="#"
                                                            class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_view_users">
                                                            <span
                                                                class="text-gray-300 symbol-label bg-dark fs-8 fw-bold">+42</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Users group-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card widget 7--> </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div
                                            class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                                            <!--begin::Card widget 17-->
                                            <div
                                                class="mb-5 card card-flush h-md-50 mb-xl-10">
                                                <!--begin::Header-->
                                                <div class="pt-5 card-header">
                                                    <!--begin::Title-->
                                                    <div
                                                        class="card-title d-flex flex-column">
                                                        <!--begin::Info-->
                                                        <div
                                                            class="d-flex align-items-center">
                                                            <!--begin::Currency-->
                                                            <span
                                                                class="text-gray-400 fs-4 fw-semibold me-1 align-self-start">$</span>
                                                            <!--end::Currency-->

                                                            <!--begin::Amount-->
                                                            <span
                                                                class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                                            <!--end::Amount-->

                                                            <!--begin::Badge-->
                                                            <span
                                                                class="badge badge-light-success fs-base">
                                                                <i
                                                                    class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                                2.2%
                                                            </span>
                                                            <!--end::Badge-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Subtitle-->
                                                        <span
                                                            class="pt-1 text-gray-400 fw-semibold fs-6">Projects
                                                            Earnings in April</span>
                                                        <!--end::Subtitle-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Card body-->
                                                <div
                                                    class="flex-wrap pt-2 pb-4 card-body d-flex align-items-center">
                                                    <!--begin::Chart-->
                                                    <div
                                                        class="pt-2 d-flex flex-center me-5">
                                                        <div
                                                            id="kt_card_widget_17_chart"
                                                            style="min-width: 70px; min-height: 70px"
                                                            data-kt-size="70"
                                                            data-kt-line="11">
                                                        </div>
                                                    </div>
                                                    <!--end::Chart-->

                                                    <!--begin::Labels-->
                                                    <div
                                                        class="d-flex flex-column content-justify-center flex-row-fluid">
                                                        <!--begin::Label-->
                                                        <div
                                                            class="d-flex fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div
                                                                class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div
                                                                class="text-gray-500 flex-grow-1 me-4">Leaf
                                                                CRM</div>
                                                            <!--end::Label-->

                                                            <!--begin::Stats-->
                                                            <div
                                                                class="text-gray-700 fw-bolder text-xxl-end">$7,660</div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div
                                                            class="my-3 d-flex fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div
                                                                class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div
                                                                class="text-gray-500 flex-grow-1 me-4">Mivy
                                                                App</div>
                                                            <!--end::Label-->

                                                            <!--begin::Stats-->
                                                            <div
                                                                class="text-gray-700 fw-bolder text-xxl-end">$2,820</div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div
                                                            class="d-flex fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div
                                                                class="bullet w-8px h-3px rounded-2 me-3"
                                                                style="background-color: #E4E6EF"></div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div
                                                                class="text-gray-500 flex-grow-1 me-4">Others</div>
                                                            <!--end::Label-->

                                                            <!--begin::Stats-->
                                                            <div
                                                                class="text-gray-700 fw-bolder text-xxl-end">$45,257</div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card widget 17-->

                                            <!--begin::List widget 26-->
                                            <div class="card card-flush h-lg-50">
                                                <!--begin::Header-->
                                                <div class="pt-5 card-header">
                                                    <!--begin::Title-->
                                                    <h3
                                                        class="text-gray-800 card-title fw-bold">External
                                                        Links</h3>
                                                    <!--end::Title-->

                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Menu-->
                                                        <button
                                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end"
                                                            data-kt-menu-overflow="true">
                                                            <i
                                                                class="text-gray-400 ki-duotone ki-dots-square fs-1 me-n1"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i>
                                                        </button>

                                                        <!--begin::Menu 2-->
                                                        <div
                                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item">
                                                                <div
                                                                    class="px-3 py-4 menu-content fs-6 text-dark fw-bold">Quick
                                                                    Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu separator-->
                                                            <div
                                                                class="mb-3 opacity-75 separator"></div>
                                                            <!--end::Menu separator-->

                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item">
                                                                <a href="#"
                                                                    class="px-3 menu-link">
                                                                    New Ticket
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item">
                                                                <a href="#"
                                                                    class="px-3 menu-link">
                                                                    New Customer
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item"
                                                                data-kt-menu-trigger="hover"
                                                                data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#"
                                                                    class="px-3 menu-link">
                                                                    <span
                                                                        class="menu-title">New
                                                                        Group</span>
                                                                    <span
                                                                        class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu sub-->
                                                                <div
                                                                    class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                                    <!--begin::Menu item-->
                                                                    <div
                                                                        class="px-3 menu-item">
                                                                        <a
                                                                            href="#"
                                                                            class="px-3 menu-link">
                                                                            Admin
                                                                            Group
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div
                                                                        class="px-3 menu-item">
                                                                        <a
                                                                            href="#"
                                                                            class="px-3 menu-link">
                                                                            Staff
                                                                            Group
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div
                                                                        class="px-3 menu-item">
                                                                        <a
                                                                            href="#"
                                                                            class="px-3 menu-link">
                                                                            Member
                                                                            Group
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item">
                                                                <a href="#"
                                                                    class="px-3 menu-link">
                                                                    New Contact
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu separator-->
                                                            <div
                                                                class="mt-3 opacity-75 separator"></div>
                                                            <!--end::Menu separator-->

                                                            <!--begin::Menu item-->
                                                            <div
                                                                class="px-3 menu-item">
                                                                <div
                                                                    class="px-3 py-3 menu-content">
                                                                    <a
                                                                        class="px-4 btn btn-primary btn-sm"
                                                                        href="#">
                                                                        Generate
                                                                        Reports
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->

                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="pt-5 card-body">
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <a href="#"
                                                            class="text-primary fw-semibold fs-6 me-2">Avg.
                                                            Client Rating</a>
                                                        <!--end::Section-->

                                                        <!--begin::Action-->
                                                        <button type="button"
                                                            class="h-auto btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                            <i
                                                                class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </button>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div
                                                        class="my-3 separator separator-dashed"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <a href="#"
                                                            class="text-primary fw-semibold fs-6 me-2">Instagram
                                                            Followers</a>
                                                        <!--end::Section-->

                                                        <!--begin::Action-->
                                                        <button type="button"
                                                            class="h-auto btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                            <i
                                                                class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </button>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div
                                                        class="my-3 separator separator-dashed"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <a href="#"
                                                            class="text-primary fw-semibold fs-6 me-2">Google
                                                            Ads CPC</a>
                                                        <!--end::Section-->

                                                        <!--begin::Action-->
                                                        <button type="button"
                                                            class="h-auto btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end">
                                                            <i
                                                                class="ki-duotone ki-exit-right-corner fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </button>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::LIst widget 26-->

                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                    </div>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->

                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer ">
                            <!--begin::Footer container-->
                            <div
                                class="py-3 app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack ">
                                <!--begin::Copyright-->
                                <div class="order-2 text-dark order-md-1">
                                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                    <a href="https://keenthemes.com"
                                        target="_blank"
                                        class="text-gray-800 text-hover-primary">Keenthemes</a>
                                </div>
                                <!--end::Copyright-->

                                <!--begin::Menu-->
                                <ul
                                    class="order-1 menu menu-gray-600 menu-hover-primary fw-semibold">
                                    <li class="menu-item"><a
                                            href="https://keenthemes.com"
                                            target="_blank"
                                            class="px-2 menu-link">About</a></li>

                                    <li class="menu-item"><a
                                            href="https://devs.keenthemes.com"
                                            target="_blank"
                                            class="px-2 menu-link">Support</a></li>

                                    <li class="menu-item"><a
                                            href="https://1.envato.market/EA4JP"
                                            target="_blank"
                                            class="px-2 menu-link">Purchase</a></li>
                                </ul>
                                <!--end::Menu--> </div>
                            <!--end::Footer container-->
                        </div>
                        <!--end::Footer--> 
                    </div>
@endsection
