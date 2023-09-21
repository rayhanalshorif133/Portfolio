@extends('layouts.app', ['title' => __('Admin User Profile')])

@section('breadcrumb')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            Admin User Profile
        </li>
    </ul>
@endsection

@section('content')
    <div class="d-flex justify-content-center mx-auto">
        <div class="col-xl-6">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">
                            Update Admin's Profile Information
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <form action="" class="form" enctype="multipart/form-data">
                        <div class="form-controll">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url(/metronic8/demo1/assets/media/avatars/300-1.jpg)"></div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                    data-bs-original-title="Change avatar" data-kt-initialized="1">
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                    data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                    data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                    <input type="text" name="fname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="First name" value="Max">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" placeholder="Last name"
                                        value="Smith">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Company name" value="Keenthemes">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Contact Phone</span>

                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i></span> </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                                placeholder="Phone number" value="044 3276 454 935">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="website" class="form-control form-control-lg form-control-solid"
                                placeholder="Company website" value="keenthemes.com">
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Country</span>

                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination"
                                data-bs-original-title="Country of origination" data-kt-initialized="1">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i></span> </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Select a country..."
                                class="form-select form-select-solid form-select-lg fw-semibold select2-hidden-accessible"
                                data-select2-id="select2-data-9-8jjk" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                <option value="" data-select2-id="select2-data-11-tojt">Select a Country...</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                
                                <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates
                                </option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic
                                    of</option>
                                <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-10-s4bg" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-semibold"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-country-re-container"
                                        aria-controls="select2-country-re-container"><span
                                            class="select2-selection__rendered" id="select2-country-re-container"
                                            role="textbox" aria-readonly="true" title="Select a country..."><span
                                                class="select2-selection__placeholder">Select a
                                                country...</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <!--begin::Input-->
                            <select name="language" aria-label="Select a Language" data-control="select2"
                                data-placeholder="Select a language..."
                                class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                data-select2-id="select2-data-12-i3h9" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                
                                
                                <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-13-lz4h" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-lg"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-language-yb-container"
                                        aria-controls="select2-language-yb-container"><span
                                            class="select2-selection__rendered" id="select2-language-yb-container"
                                            role="textbox" aria-readonly="true" title="Select a language..."><span
                                                class="select2-selection__placeholder">Select a
                                                language...</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Input-->

                            <!--begin::Hint-->
                            <div class="form-text">
                                Please select a preferred language, including date, time, and number formatting.
                            </div>
                            <!--end::Hint-->
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Time Zone</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                data-placeholder="Select a timezone.."
                                class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                data-select2-id="select2-data-15-0u6d" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                <option value="" data-select2-id="select2-data-17-7dmo">Select a Timezone..</option>
                                <option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00)
                                    International Date Line West</option>
                                
                                <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-16-yrkq" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-lg"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-timezone-sp-container"
                                        aria-controls="select2-timezone-sp-container"><span
                                            class="select2-selection__rendered" id="select2-timezone-sp-container"
                                            role="textbox" aria-readonly="true" title="Select a timezone.."><span
                                                class="select2-selection__placeholder">Select a
                                                timezone..</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Currency</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="currnecy" aria-label="Select a Currency" data-control="select2"
                                data-placeholder="Select a currency.."
                                class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                data-select2-id="select2-data-18-hpty" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                <option value="" data-select2-id="select2-data-20-6u24">Select a currency..
                                </option>
                                <option data-kt-flag="flags/united-states.svg" value="USD">USD&nbsp;-&nbsp;USA dollar
                                </option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GBP">GBP&nbsp;-&nbsp;British
                                    pound</option>
                                <option data-kt-flag="flags/australia.svg" value="AUD">AUD&nbsp;-&nbsp;Australian
                                    dollar</option>
                                <option data-kt-flag="flags/japan.svg" value="JPY">JPY&nbsp;-&nbsp;Japanese yen
                                </option>
                                <option data-kt-flag="flags/sweden.svg" value="SEK">SEK&nbsp;-&nbsp;Swedish krona
                                </option>
                                <option data-kt-flag="flags/canada.svg" value="CAD">CAD&nbsp;-&nbsp;Canadian dollar
                                </option>
                                <option data-kt-flag="flags/switzerland.svg" value="CHF">CHF&nbsp;-&nbsp;Swiss franc
                                </option>
                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-19-ku0e" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-lg"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-currnecy-p1-container"
                                        aria-controls="select2-currnecy-p1-container"><span
                                            class="select2-selection__rendered" id="select2-currnecy-p1-container"
                                            role="textbox" aria-readonly="true" title="Select a currency.."><span
                                                class="select2-selection__placeholder">Select a
                                                currency..</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="communication[]" type="checkbox"
                                        value="1">
                                    <span class="fw-semibold ps-2 fs-6">
                                        Email
                                    </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="communication[]" type="checkbox"
                                        value="2">
                                    <span class="fw-semibold ps-2 fs-6">
                                        Phone
                                    </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
                        <!--begin::Label-->

                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing"
                                    checked="">
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                </div>
                <!--end::Actions-->
                <input type="hidden">
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@push('scripts')
@endpush
