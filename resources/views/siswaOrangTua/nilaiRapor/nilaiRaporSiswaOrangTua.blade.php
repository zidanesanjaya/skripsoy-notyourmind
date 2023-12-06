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
                            <a href="{{ url('/dashboardSiswaOrangTua') }}" class="text-muted text-hover-primary text-center">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Rapor</li>
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
                <!--begin::Tables Widget 11-->
                <div class="row">
                    <div class="col-sm-10 col-xs-10">
                        <div class="card mb-5">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Laporan Hasil Belajar</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="{{ url('/keterangan-siswa') }}" class="btn btn-sm btn-light btn-active-danger">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="app-container py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">

                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-2">
                        <div class="card mb-5">
                            <!--begin::Header 2-->
                            <div class="card-header border-0 pt-5">
                                <div class="mb-1">
                                    <!--begin::Input-->
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pilih Rapor
                                        </button>
                                        <ul class="dropdown-menu form-select-solid" aria-labelledby="dropdownMenuButton">
                                            @if($detail_siswa->is_show == 1)
                                                @foreach($data_rapor AS $datas)
                                                    <li><a class="dropdown-item" href="{{ url('/nilai-rapor-siswa/'.$datas->id_tahun_akademik.'/'.$datas->semester) }}">Laporan Hasil Belajar Kelas {{$datas->tingkat}} / {{$datas->semester}}</a></li>
                                                @endforeach
                                                <hr>
                                                <li><a class="dropdown-item" href="{{ route('data.nilai_pancasila') }}">Rapor Pancasila</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Header 2-->
                            <!--begin::Body-->
                            <div class="app-container py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">

                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                </div>
                <!--end::Tables Widget 11-->
                <!--begin::Tables Widget 11-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive table-striped" style="cursor:context-menu">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-20px w-20px text-center px-2">No.</th>
                                        <th class="min-w-75px w-100px text-center">Mata Pelajaran</th>
                                        <th class="min-w-30px w-75px text-center">Nilai Akhir</th>
                                        <th class="min-w-50px w-110px text-center">Capaian Kompetensi</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($data AS $key => $datas)
                                    <tr>
                                        <td class="text-center px-2">{{$key+1}}</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">{{$datas->nama_mapel}}</td>
                                        <td class="text-gray-800 text-hover-primary text-center">{{$datas->nilai_akhir}}</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                {{$datas->high_deskripsi}}
                                            </div>
                                            <hr>
                                            <div class="row">
                                                {{$datas->low_deskripsi}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 11-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->