@extends('layouts.app')

@section('breadcrumb')
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="#" class="text-muted text-hover-primary">Home</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        Widgets 
    </li>
</ul>
@endsection
@section('right_toolbar')
<div class="d-flex align-items-center gap-2 gap-lg-3">
    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
        data-bs-target="#kt_modal_create_app">
        Create </a>
    <!--end::Primary button-->
</div>
@endsection


@section('content')


@endsection

@push('scripts')
@endpush