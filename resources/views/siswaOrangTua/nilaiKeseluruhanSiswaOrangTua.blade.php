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
                                <div class="mb-1">
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
                                <div class="mb-1">
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
                            <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive table-striped" style="cursor:context-menu">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-150px text-center">Mata Pelajaran</th>
                                        <th class="min-w-50px text-center">Sumatif 1</th>
                                        <th class="min-w-50px text-center">Sumatif 2</th>
                                        <th class="min-w-50px text-center">Sumatif 3</th>
                                        <th class="min-w-50px text-center">Sumatif 4</th>
                                        <th class="min-w-50px text-center">Sumatif 5</th>
                                        <th class="min-w-50px text-center">Sumatif 6</th>
                                        <th class="min-w-50px text-center">Sumatif 7</th>
                                        <th class="min-w-50px text-center">Sumatif 8</th>
                                        <th class="min-w-50px text-center">Sumatif 9</th>
                                        <th class="min-w-50px text-center">Sumatif 10</th>
                                        <th class="min-w-50px w-100px text-center">NA Sumatif Lingkup Materi</th>
                                        <th class="min-w-50px text-center">PTS</th>
                                        <th class="min-w-50px text-center">PAS</th>
                                        <th class="min-w-50px text-center">NA Sumatif Akhir Semester</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Pendidikan Kewarganegaraan</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">80</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">86</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">83.7</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">91</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Bahasa Indonesia</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">86</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">86</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">85.2856</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">82</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">75</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">78.5</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Matematika</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Alam</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Sosial</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Bahasa Inggris</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Seni Budaya</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Teknologi Ilmu Komputer</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Bahasa Jawa</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Bahasa Arab</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                    <tr>
                                        <td id="mataPelajaran" class="px-3 text-gray-800 text-hover-primary fw-bold">Kemuhammadiyahan</td>
                                        <td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
                                        <td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
                                        <td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
                                        <td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
                                        <td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
                                        <td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
                                        <td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
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