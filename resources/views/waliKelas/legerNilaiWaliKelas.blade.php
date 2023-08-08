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
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Data Nilai Siswa Kelas (tingkat & fase)</span>
                        </h3>
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Add product-->
                            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#">Unduh Leger Nilai</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Header-->
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
                                        <th class="min-w-50px w-50px text-center">Nilai Yang Kosong/Dibawah KKM</th>
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

<!--begin::Modal Leger Nilai-->
<div class="modal fade" id="legerNilaiWaliKelas" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-md-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal body-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-md-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1 mt-5">Detail Leger Nilai</span>
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-striped" id="kt_ecommerce_sales_table" style="cursor:context-menu">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="min-w-50px w-50px rounded-start text-center">Mata Pelajaran</th>
                                    <th class="min-w-50px w-50px text-center">Nilai</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Pendidikan Agama Islam</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Pendidikan Pancasila</td>
                                    <td class="text-gray-800 text-hover-primary text-center">86</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Bahasa Indonesia</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Matematika</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Ilmu Pengetahuan Alam</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Ilmu Pengetahuan Sosial</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Bahasa Inggris</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Seni Budaya</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Teknologi Informasi Komputer</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Bahasa Jawa</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Bahasa Arab</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                                <tr>
                                    <td class="px-10 text-gray-800 text-hover-primary">Kemuhammadiyahan</td>
                                    <td class="text-gray-800 text-hover-primary text-center">87</td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal Leger Nilai-->
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->