<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

    <!--begin::Menu wrapper-->
    <div class=" app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
        data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
        data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
        data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
        data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
        <!--begin::Menu-->
        <div class="px-2 my-5 menu menu-rounded menu-column menu-lg-row my-lg-0 align-items-stretch fw-semibol px-lg-0"
            id="kt_app_header_menu" data-kt-menu="true">
            <!--begin:Menu item-->
            <div class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                <a class="menu-link" href="{{route('home')}}">
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->

    <!--begin::Navbar-->
    <div class="flex-shrink-0 app-navbar">

        <!--begin::User menu-->
        <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img src="./assets/media/avatars/300-3.jpg" class="rounded-3" alt="user" />
            </div>

            <!--begin::User account menu-->
            <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <div class="px-3 menu-content d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="./assets/media/avatars/300-3.jpg" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                Robert Fox <span
                                    class="px-2 py-1 badge badge-light-success fw-bold fs-8 ms-2">Pro</span>
                            </div>

                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                robert@kt.com </a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="my-2 separator"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="px-5 menu-item">
                    <a href="/metronic8/demo1/../demo1/account/overview.html" class="px-5 menu-link">
                        My Profile
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="px-5 menu-item">
                    <a href="/metronic8/demo1/../demo1/apps/projects/list.html" class="px-5 menu-link">
                        <span class="menu-text">My
                            Projects</span>
                        <span class="menu-badge">
                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                        </span>
                    </a>
                </div>
                <!--end::Menu item-->

                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="px-5 menu-item">
                    <a href="/metronic8/demo1/../demo1/account/statements.html" class="px-5 menu-link">
                        My Statements
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="my-2 separator"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="px-5 menu-item" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="px-5 menu-link">
                        <span class="menu-title position-relative">
                            Mode

                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span></i>
                                <i class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                        </span>
                    </a>

                    <!--begin::Menu-->
                    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="px-3 my-0 menu-item">
                            <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span
                                            class="path8"></span><span class="path9"></span><span
                                            class="path10"></span></i>
                                </span>
                                <span class="menu-title">
                                    Light
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 my-0 menu-item">
                            <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </span>
                                <span class="menu-title">
                                    Dark
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 my-0 menu-item">
                            <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </span>
                                <span class="menu-title">
                                    System
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->

                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="px-5 menu-item" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="px-5 menu-link">
                        <span class="menu-title position-relative">
                            Language

                            <span
                                class="px-3 py-2 rounded fs-8 bg-light position-absolute translate-middle-y top-50 end-0">
                                English <img class="w-15px h-15px rounded-1 ms-2"
                                    src="./assets/media/flags/united-states.svg" alt />
                            </span>
                        </span>
                    </a>

                    <!--begin::Menu sub-->
                    <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <a href="./../demo1/account/settings.html" class="px-5 menu-link d-flex active">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./assets/media/flags/united-states.svg" alt />
                                </span>
                                English
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <a href="/metronic8/demo1/../demo1/account/settings.html" class="px-5 menu-link d-flex">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./assets/media/flags/spain.svg" alt />
                                </span>
                                Spanish
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <a href="./../demo1/account/settings.html" class="px-5 menu-link d-flex">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./assets/media/flags/germany.svg" alt />
                                </span>
                                German
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <a href="./../demo1/account/settings.html" class="px-5 menu-link d-flex">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./assets/media/flags/japan.svg" alt />
                                </span>
                                Japanese
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <a href="./../demo1/account/settings.html" class="px-5 menu-link d-flex">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./assets/media/flags/france.svg" alt />
                                </span>
                                French
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="px-5 my-1 menu-item">
                    <a href="./../demo1/account/settings.html" class="px-5 menu-link">
                        Account Settings
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->

                <div class="px-5 menu-item">
                    <a href="{{ route('logout') }}" class="px-5 menu-link"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->

            <!--end::Menu wrapper-->
        </div>
        <!--end::User menu-->

        <!--begin::Header menu toggle-->
        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                id="kt_app_header_menu_toggle">
                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                        class="path2"></span></i>
            </div>
        </div>
    </div>
    <!--end::Navbar-->
</div>
