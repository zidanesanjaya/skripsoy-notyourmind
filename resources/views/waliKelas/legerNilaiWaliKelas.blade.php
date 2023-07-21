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
                <!--begin::Tables Widget 11-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Data Nilai Siswa Kelas (kelas & fase)</span>
                        </h3>
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Add product-->
                            <a href="#" class="btn btn-info">Unduh Leger Nilai</a>
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
                                        <th class="px-5 min-w-20px text-center text-nowrap">No.</th>
                                        <th class="min-w-75px w-150px text-center">Nama Siswa</th>
                                        <th class="min-w-50px w-50px rounded-start text-center">Pendidikan Agama Islam</th>
                                        <th class="min-w-50px w-50px text-center">Pendidikan Pancasila</th>
                                        <th class="min-w-50px w-50px text-center">Bahasa Indonesia</th>
                                        <th class="min-w-50px w-50px text-center">Matematika</th>
                                        <th class="min-w-50px w-50px text-center">Ilmu Pengetahuan Alam</th>
                                        <th class="min-w-50px w-50px text-center">Ilmu Pengetahuan Sosial</th>
                                        <th class="min-w-50px w-50px text-center">Bahasa Inggris</th>
                                        <th class="min-w-50px w-50px text-center">Seni Budaya</th>
                                        <th class="min-w-50px w-50px text-center">Pendidikan Jasmani, Olahraga, dan Kesehatan</th>
                                        <th class="min-w-50px w-50px text-center">Teknologi Informasi dan Komputer</th>
                                        <th class="min-w-50px w-50px text-center">Bahasa Jawa</th>
                                        <th class="min-w-50px w-50px text-center">Bahasa Arab</th>
                                        <th class="min-w-50px w-50px text-center">Kemuhammadiyahan</th>
                                        <th class="min-w-50px w-50px text-center">Jumlah</th>
                                        <th class="min-w-50px w-50px text-center">Rata - Rata</th>
                                        <th class="min-w-50px w-50px text-center">Rank</th>
                                    </tr>
                                </thead>
                                <tbody id="listDataNilaiSiswaKepalaSekolah">
                                    <tr>
                                        <td class="px-5 text-center">1.</td>
                                        <td class="px-5 text-center">Aisyah Fatin Sholikah</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
                                        <td class="text-center">89.5</td>
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