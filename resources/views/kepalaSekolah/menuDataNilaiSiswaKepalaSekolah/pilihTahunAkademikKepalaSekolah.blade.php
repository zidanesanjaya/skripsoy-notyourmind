@extends('layouts.app')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Data Nilai Siswa</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body p-0">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <div class="card-toolbar ms-auto">
                                <a href="{{ url('menuDataNilaiSiswaKepalaSekolah') }}" class="btn btn-sm btn-light btn-active-danger">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Wrapper-->
                        <div class="card-px text-center py-10 my-5">
                            <!--begin::Title-->
                            <h2 class="fs-2x fw-bold mb-10">Pilih Tahun Akademik</h2>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ url('/dataNilaiSiswaKepalaSekolah') }}" class="btn btn-primary">2022/2023</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ url('/dataNilaiSiswaKepalaSekolah') }}" class="btn btn-primary">2023/2024</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ url('/dataNilaiSiswaKepalaSekolah') }}" class="btn btn-primary">2024/2025</a>
                                </div>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>