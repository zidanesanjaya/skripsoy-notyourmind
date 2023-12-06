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
                        <li class="breadcrumb-item text-muted">Data Siswa</li>
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
                    <!-- begin::row header -->
                    <div class="row">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Data Siswa</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::row header -->
                    <!-- begin::Row Toolbar -->
                    <!--begin::Header-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4 col-sm-4">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Mata Pelajaran:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" onchange="loadData();" id="mapel">
                                            @foreach($mapel AS $key)
                                                <option value="{{$key->id}}">{{$key->nama_mapel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Tingkat:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" onchange="loadData();" id="filterTingkat">
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Kelas:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id="filterKelas" onchange="loadData();">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="G">G</option>
                                            <option value="H">H</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!-- end::Row Toolbar -->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="dataTable" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 min-w-20px w-20px">NIS</th>
                                        <th class="min-w-50px w-100px rounded-start">NISN</th>
                                        <th class="ps-4 min-w-20px w-20px">Tingkat</th>
                                        <th class="ps-4 min-w-20px w-20px">Kelas</th>
                                        <th class="min-w-100px w-150px">Nama Siswa</th>
                                    </tr>
                                </thead>
                                <tbody id="listSiswa">
                                  
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->

<script>
     $( document ).ready(function() {
        loadData();
    });
    function loadData(){
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();

        $('#dataTable').DataTable().destroy();
        $('#dataTable').DataTable({
            ajax: {
                url: '/get-json-data-siswa/'+mapel+'/'+filterTingkat+'/'+filterKelas,
                dataSrc: 'data' ,
            },
            columns: [
                { data: 'nis' },
                { data: 'nisn' },
                { data: 'tingkat' },
                { data: 'kelas' },
                { data: 'nama_lengkap' },
            ],
        });

    }
</script>
@endsection
