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
                            <a href="{{ url('/dashboardGuru') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Kelola Sumatif</li>
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
                <div class="card mb-5 mb-xl-8">
                    <!-- begin::Row Header -->
                    <div class="row">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h1 class="mb-3">Kelola Asesmen Sumatif</h1>
                            <!--end::Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <a href="{{route('nilai.index')}}">
                                        <!--begin::Input Nilai Siswa-->
                                        <button type="button" class="btn btn-primary">Input Nilai Siswa</button>
                                        <!--end::Input Nilai Siswa-->
                                    </a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::Row Header -->
                    <!--begin::Header-->
                 
                    <!--end::Header-->
                    <!-- end::Row Toolbar -->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin:Form-->
                        <form class="form" action="{{route('store.sumatif')}}" method="POST">
                            @csrf
                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Mata Pelajaran:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" name="mapel">
                                            @foreach($mapel AS $key)
                                                <option value="{{$key->id}}">{{$key->nama_mapel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Sumatif</label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Sumatif..." name="sumatif">
                                        <option value="">Pilih Sumatif...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Nama Sumatif</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Sumatif" name="namaSumatif" />
                                </div>
                                <!--end::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Deskripsi Tertinggi</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Deskripsi Tertinggi" name="high_desc" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Deskripsi Terendah</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Deskripsi Terendah" name="low_desc" />
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                          
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit" id="nilaiAsesmenGuru_submit" class="btn btn-primary">
                                    <span class="indicator-label">Simpan</span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>

                        <hr>
                        <div class="row table-responsive">
                            <table class="table align-middle gs-0 gy-4 table-striped">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light text-nowrap text-center">
                                        <th>Nama Mapel</th>
                                        <th>Sumatif</th>
                                        <th>Nama Sumatif</th>
                                        <th>Deskripsi Tertinggi</th>
                                        <th>Deskripsi Terendah</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($sumatif AS $key => $data)
                                        <tr>
                                            <td>{{$data->nama_mapel}}</td>
                                            <td>{{$data->sumatif}}</td>
                                            <td>{{$data->nama_sumatif}}</td>
                                            <td>{{$data->high_deskripsi}}</td>
                                            <td>{{$data->low_deskripsi}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end:Form-->
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>