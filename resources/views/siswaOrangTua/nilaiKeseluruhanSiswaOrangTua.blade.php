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
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary text-center">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Leger Nilai Siswa</li>
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
                                <span class="card-label fw-bold fs-3 mb-1">Nilai Keseluruhan</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::row header -->
                    <!-- begin::Row Toolbar -->
                    <!--begin::Header-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-sm-6">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Kelas</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Semester</option>
                                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                            <option value="Bahasa Arab">Bahasa Arab</option>
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
                            <table id="dataNilaiSiswaKepalaSekolah" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="px-5 min-w-20px w-20px text-center text-nowrap">No.</th>
                                        <th class="min-w-100px w-150px text-center ">Nama Siswa</th>
                                        <th class="min-w-50px w-50px text-center">Semester</th>
                                        <th class="min-w-50px w-50px text-center">Tahun Akademik</th>
                                        <th class="min-w-50px w-50px text-center">Nilai Yang Kosong</th>
                                        <th class="min-w-50px w-50px text-center text-nowrap">Leger Nilai</th>
                                        <th class="min-w-50px w-50px text-center">Jumlah</th>
                                        <th class="min-w-50px w-50px text-center text-nowrap">Rata - Rata</th>
                                        <th class="min-w-50px w-50px text-center">Rank</th>
                                    </tr>
                                </thead>
                                <tbody id="listDataNilaiSiswaKepalaSekolah">
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">Aisyah Fatin Sholikah</td>
                                        <td class="text-center">Ganjil</td>
                                        <td class="text-center">2022/2023</td>
                                        <td class="text-center">
                                            <div class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active">
                                                3
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#legerNilaiWaliKelas">Detail</a>
                                            </div>
                                        </td>
                                        <td class="text-center">1102.7</td>
                                        <td class="text-center">84.82</td>
                                        <td class="text-center">22</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">Aisyah Fatin Sholikah</td>
                                        <td class="text-center">Ganjil</td>
                                        <td class="text-center">2022/2023</td>
                                        <td class="text-center">
                                            <div class="nav-link btn btn-flex flex-center btn-active-success btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active">
                                                -
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#legerNilaiWaliKelas">Detail</a>
                                            </div>
                                        </td>
                                        <td class="text-center">1102.7</td>
                                        <td class="text-center">84.82</td>
                                        <td class="text-center">22</td>
                                    </tr>
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
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->