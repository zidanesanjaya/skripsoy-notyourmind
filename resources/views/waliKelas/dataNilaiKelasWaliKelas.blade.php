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
                            <a href="{{ url('/dashboardWaliKelas') }}" class="text-muted text-hover-primary text-center">Home</a>
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
                            <a class="btn btn-info">Unduh Semua Rapor</a>
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
                                        <th class="ps-4 min-w-20px text-center text-nowrap">NIS</th>
                                        <th class="min-w-50px w-100px rounded-start text-center text-nowrap">NISN</th>
                                        <th class="min-w-100px w-200px text-center text-nowrap">Nama Siswa</th>
                                        <th class="min-w-50px w-100px text-center text-nowrap">Semester</th>
                                        <th class="min-w-70px w-100px text-center text-nowrap">Tahun Akademik</th>
                                        <th class="min-w-50px w-150px text-center text-nowrap">Nilai Rapor</th>
                                        <th class="min-w-50px w-50px text-center">Show</th>
                                    </tr>
                                </thead>
                                <tbody id="listDataNilaiSiswaKepalaSekolah">
                                    <tr>
                                        <td class="px-5 text-center">1.</td>
                                        <td class="px-5 text-center">9925</td>
                                        <td class="text-center">2104295256</td>
                                        <td class="text-center">Aisyah Fatin Sholikah</td>
                                        <td class="px-5 text-center">Ganjil</td>
                                        <td class="px-5 text-center">2022/2023</td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <div class="col-md-12 my-1">
                                                    <div href="#" class="btn btn-sm fw-bold btn-Success w-100" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" class="btn btn-sm fw-bold btn-primary w-100" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" class="btn btn-sm fw-bold btn-info w-100" data-bs-toggle="modal" data-bs-target="#nilaiProfilPelajarPancasila">Input Nilai Pancasila</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" class="btn btn-sm fw-bold btn-warning w-100" data-bs-toggle="modal" data-bs-target="#inputNilaiEkstra">Input Nilai Ekstra</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 text-center">
                                            <div class="row my-1">
                                                <div class="col-md-12 my-1">
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-check-custom form-check-solid d-flex align-items-center justify-content-center">
                                                        <input class="form-check-input" type="checkbox" value="" id="allowchanges" checked="checked" />
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <a href="#" class="btn btn-sm fw-bold btn-info w-100" data-bs-toggle="modal" data-bs-target="#">Unduh</a>
                                                </div>
                                            </div>
                                        </td>
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

<!--begin::Modal Nilai Keseluruhan-->
<div class="modal fade" id="nilaiKeseluruhanSiswaKepalaSekolah" tabindex="-1" aria-hidden="true">
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
                            <span class="card-label fw-bold fs-3 mb-1 mt-5">Nilai Keseluruhan</span>
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Peserta Didik</td>
                                        <td class="px-5">: Aisyah Fatin Sholikah</td>
                                        <td class="px-15">Kelas</td>
                                        <td>: 7</td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: 2104295256</td>
                                        <td class="px-15">Fase</td>
                                        <td>: D</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: Ganjil</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: 2022/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive table-striped" style="cursor:context-menu">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px"></th>
                                    <th class="min-w-50px text-center">Bab 1</th>
                                    <th class="min-w-50px text-center">Bab 2</th>
                                    <th class="min-w-50px text-center">Bab 3</th>
                                    <th class="min-w-50px text-center">Bab 4</th>
                                    <th class="min-w-50px text-center">Bab 5</th>
                                    <th class="min-w-50px text-center">Bab 6</th>
                                    <th class="min-w-50px text-center">Bab 7</th>
                                    <th class="min-w-50px text-center">Bab 8</th>
                                    <th class="min-w-50px text-center">Bab 9</th>
                                    <th class="min-w-50px text-center">Bab 10</th>
                                    <th class="min-w-50px w-100px text-center"></th>
                                    <th class="min-w-50px text-center"></th>
                                    <th class="min-w-50px text-center"></th>
                                    <th class="min-w-50px text-center"></th>
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Mata Pelajaran</th>
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
                                    <th class="min-w-50px w-100px text-center text-nowrap">NA Sumatif Lingkup Materi</th>
                                    <th class="min-w-50px text-center">PTS</th>
                                    <th class="min-w-50px text-center">PAS</th>
                                    <th class="min-w-50px text-center text-nowrap">NA Sumatif Akhir Semester</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Kewarganegaraan</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Indonesia</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Matematika</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Alam</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Sosial</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Inggris</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Seni Budaya</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Teknologi Ilmu Komputer</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Jawa</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Arab</td>
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
                                    <td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Kemuhammadiyahan</td>
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
<!--end::Modal Nilai Keseluruhan-->

<!--begin::Modal Nilai Rapor-->
<div class="modal fade" id="nilaiRaporSiswaKepalaSekolah" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal body-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-md-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1 mt-5">Nilai Rapor</span>
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Peserta Didik</td>
                                        <td class="px-5">: Aisyah Fatin Sholikah</td>
                                        <td class="px-15">Kelas</td>
                                        <td>: 7</td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: 2104295256</td>
                                        <td class="px-15">Fase</td>
                                        <td>: D</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: Ganjil</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: 2022/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive table-striped" style="cursor:context-menu">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-20px w-20px text-center">No.</th>
                                    <th class="min-w-75px w-100px text-center">Mata Pelajaran</th>
                                    <th class="min-w-30px w-75px text-center">Nilai Akhir</th>
                                    <th class="min-w-50px w-110px text-center">Capaian Kompetensi</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td class="text-center">1.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
                                    <td class="text-gray-800 text-hover-primary text-center">89</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan tentang materi beriman kepada Allah SWT
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu pendampingan dalam materi perilaku jujur, amanah, tabligh fathonah
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Kewarganegaraan</td>
                                    <td class="text-gray-800 text-hover-primary text-center">86</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan pemahaman terhadap Norma dan UUD NRI Tahun 1945 dan mampu menerapkan dalam kehiduan sehari-hari
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam menjelaskan kelahiran Pancasila
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Indonesia</td>
                                    <td class="text-gray-800 text-hover-primary text-center">82</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan kemampuan untuk mendiskusikan unsur intrinsik, mengenali majas, dan berlatih menyajikan gagasannya dengan menulis cerita fantasi sederhana
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam mengeskpresikan ide melalui latihan menulis puisi rakyat
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Matematika</td>
                                    <td class="text-gray-800 text-hover-primary text-center">79</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik dalam mengoperasikan bilangan asli dan bilangan bulat
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bantuan dalam menentukan himpunan penyelesaian pada pertidaksamaan linear satu variabel
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Alam</td>
                                    <td class="text-gray-800 text-hover-primary text-center">82</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik daam melakukan identifikasi sifat dan karakteristik zat secara kolaboratif, membedakan perubahan fisik dan kimia, melakukan pemisahan campuran sederhana
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam melakukan pengukuran panjang, waktu, dan massa secara kolaboratif
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Sosial</td>
                                    <td class="text-gray-800 text-hover-primary text-center">82</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik dalam menjelaskan ciri khas kehidupan manusia pra aksara dan membandingkan dengan manusia modern jaman sekarang
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam membuat pohon silsiah keluarga dari pihak ayah dan ibu
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Inggris</td>
                                    <td class="text-gray-800 text-hover-primary text-center">82</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik dalam menyapa, memperkenalkan diri, dan menyatakan waktu dalam Bahasa Inggris
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam memperkanalkan orang lain dan mengidentifikasi benda di sekitarnya
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">8.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Seni Budaya</td>
                                    <td class="text-gray-800 text-hover-primary text-center">88</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Sangat memahami tentang unsur-unsur nada
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu pendampingan dalam memahami unsur-unsur nada
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                                    <td class="text-gray-800 text-hover-primary text-center">83</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik dalam materi olahraga bola
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu pendampingan dalam memahami dan mempraktikkan materi pembelajaran bola basket dan perlu pembimbingan lebih lanjut agar kemampuan tersebut dikuasai secara konsisten
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">10.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Teknologi Ilmu Komputer</td>
                                    <td class="text-gray-800 text-hover-primary text-center">85</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan dalam memahami sistem operasi dan juga jaringan komputer
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam melakukan perakitan komputer
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">11.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Jawa</td>
                                    <td class="text-gray-800 text-hover-primary text-center">83</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan dalam memahami struktur teks profie tokoh dengan baik
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu bimbingan dalam penggunaan unggah-ungguh basa dan menjabarkan struktur cerita wayang
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">12.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Arab</td>
                                    <td class="text-gray-800 text-hover-primary text-center">93</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik dalam melakukan percakapan tentang At-Ta'aaruf (Perkenalan)
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu pendampingan dalam menulis dan membaca teks tentang Fil Fashli (di dalam kelas )
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">13.</td>
                                    <td class="text-gray-800 text-hover-primary fw-bold">Kemuhammadiyahan</td>
                                    <td class="text-gray-800 text-hover-primary text-center">88</td>
                                    <td class="text-gray-800 fw-bold">
                                        <div class="row">
                                            Menunjukkan penguasaan yang baik tentang sejarah hidup dan kepribadian tokoh Muhammadiyah
                                        </div>
                                        <hr>
                                        <div class="row">
                                            Perlu pendampingan dalam memahami Muhammadiyah sebagai gerakan pendidikan
                                        </div>
                                    </td>
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
<!--end::Modal Nilai Rapor-->

<!--begin::Modal Nilai Profil Pelajar Pancasila-->
<div class="modal fade" id="nilaiProfilPelajarPancasila" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal body-->
            <form action="#">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Products-->
                    <div class="card card-flush">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Nilai Penguatan Profil Pelajar Pancasila</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Card header-->
                        <div class="card-header d-flex align-items-center">
                            <div class="table-responsive pt-3">
                                <table>
                                    <tbody class="text-nowrap">
                                        <tr>
                                            <td>Nama Peserta Didik</td>
                                            <td class="px-5">: Aisyah Fatin Sholikah</td>
                                            <td class="px-15">Kelas</td>
                                            <td>: 7</td>
                                        </tr>
                                        <tr>
                                            <td>NISN</td>
                                            <td class="px-5">: 2104295256</td>
                                            <td class="px-15">Fase</td>
                                            <td>: D</td>
                                        </tr>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                            <td class="px-15">Semester</td>
                                            <td>: Ganjil</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                            <td class="px-15">Tahun Pelajaran</td>
                                            <td>: 2022/2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row m-1">
                                <div class="col-sm-6">
                                    <!--begin::Input-->
                                    <div class="py-5">
                                        <select class="form-select form-select-solid">
                                            <option>Pilih Lihat Projek</option>
                                            <option value="Ajang Kompetisi dan Kreativitas Siswa">Ajang Kompetisi dan Kreativitas Siswa</option>
                                            <option value="Serba Serbi Malangku">Serba Serbi Malangku</option>
                                            <option value="Sampahku Masa Depanku">Sampahku Masa Depanku</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end py-3">
                                        <!--begin::Add product-->
                                        <button class="btn btn-info">Unduh Rapor Projek Penguatan Profil Pelajar Pancasila</button>
                                        <!--end::Add product-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Products-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                            <!--begin::Table Footer-->
                            <thead>
                                <tr style="background-color: #f2f2f2;">
                                    <th class="text-gray-800 text-hover-primary fw-bold table-striped px-5">Projek 1: Ajang Kompetensi dan Kreativitas Siswa</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="text-gray-800 px-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis a voluptate minus hic nulla illum voluptatem magnam vel dolores ex ratione sapiente ut omnis optio dicta, qui quod rerum in facere. Totam quae voluptas optio eveniet dicta? Animi, saepe neque necessitatibus, perferendis itaque dignissimos vel, delectus iste mollitia voluptate suscipit ad quae officia accusantium totam doloremque. Praesentium, corporis earum itaque minima amet aspernatur iusto. At totam quaerat eos eius eaque iste ipsa libero cum corporis unde. Molestias explicabo harum accusantium nobis quod rerum veniam in corrupti excepturi voluptatum, quia minus facere maiores natus? Ad fuga molestiae doloremque molestias voluptatem? Repellat.</td>
                                </tr>
                            </thead>
                            <!--end::Table Footer-->
                        </table>
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-800 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px w-200px text-center">Ajang Kompetensi dan Kreativitas Siswa</th>
                                    <th class="min-w-30px w-50px text-center">BB</th>
                                    <th class="min-w-30px w-50px text-center">MB</th>
                                    <th class="min-w-30px w-50px text-center">BSH</th>
                                    <th class="min-w-30px w-50px text-center">SB</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                <div>
                                    <tr style="background-color: #f2f2f2;">
                                        <td class="text-gray-800 text-hover-primary fw-bold px-5">Beriman, Bertakwa Kepada Tuhan Yang Maha Esa, dan Berakhlak Mulia</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                                <div>
                                    <tr style="background-color: #f2f2f2;">
                                        <td class="text-gray-800 text-hover-primary fw-bold px-5">Berkebhinekaan Global</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                                <div>
                                    <tr style="background-color: #f2f2f2;">
                                        <td class="text-gray-800 text-hover-primary fw-bold px-5">Bergotong Royong</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-gray-800 px-3">
                                            <!--begin::Input-->
                                            <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                            <!--end::Input-->
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center table-active">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                            <!--begin::Table Footer-->
                            <tfoot>
                                <tr style="background-color: #f2f2f2;">
                                    <td class="text-gray-800 text-hover-primary fw-bold table-striped px-5">Catatan Proses</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-800 px-3">
                                        <!--begin::Input-->
                                        <textarea name="textarea_input" class="form-control form-control-solid"></textarea>
                                        <!--end::Input-->
                                    </td>
                                </tr>
                            </tfoot>
                            <!--end::Table Footer-->
                        </table>
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                            <h2>Keterangan Tingkat Pencapaian Siswa</h2>
                            <!--begin::Table head-->
                            <tfoot>
                                <!--begin::Table row-->
                                <tr>
                                    <th class="min-w-30px w-75px text-center fw-bold table-active">BB</th>
                                    <td class="text-gray-800 text-center">Belum Berkembang</td>
                                    <td class="text-gray-800 text-center table-active">Siswa masih membutuhkan bimbingan dalam mengembangkan kemampuan</td>


                                </tr>
                                <tr>
                                    <th class="min-w-30px w-75px text-center fw-bold table-active">MB</th>
                                    <td class="text-gray-800 text-center">Mulai Berkembang</td>
                                    <td class="text-gray-800 text-center table-active">Siswa mulai mengembangkan kemampuan namun masih belum konsisten</td>
                                </tr>
                                <tr>
                                    <th class="min-w-30px w-75px text-center fw-bold table-active">BSH</th>
                                    <td class="text-gray-800 text-center">Siswa telah mengembangkan kemampuan hingga berada dalam tahap konsisten</td>
                                    <td class="text-gray-800 text-center table-active">Siswa mengembangkan kemampuannya melampaui harapan</td>
                                </tr>
                                <tr>
                                    <th class="min-w-30px w-75px text-center fw-bold table-active">SB</th>
                                    <td class="text-gray-800 text-center">Sangat Berkembang</td>
                                    <td class="text-gray-800 text-center table-active">Siswa mengembangkan kemampuannya melampaui harapan</td>
                                </tr>
                                <!--end::Table row-->
                            </tfoot>
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--begin::Actions-->
                <div class="text-center pt-5">
                    <button data-bs-dismiss="modal" type="reset" id="nilaiAsesmenGuru_cancel" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" id="nilaiAsesmenGuru_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal Nilai Profil Pelajar Pancasila-->

<!--begin::Modal Input Nilai Ekstra-->
<div class="modal fade" id="inputNilaiEkstra" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="nilaiAsesmenGuru_form" class="form">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Input Nilai Esktrakulikuler</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Esktrakulikuler Wajib</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" value="Tapak Suci" disabled />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nilai</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilaiEkstraWajib1" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Esktrakulikuler Wajib</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" value="Hisbul Wathan" disabled />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nilai</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilaiEkstraWajib2" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 1 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Esktrakulikuler" name="ekstrakulikuler1">
                                <option value=""></option>
                                <option value="English Club">English Club</option>
                                <option value="Konten Creator">Konten Creator</option>
                                <option value="E-Sport">E-Sport</option>
                                <option value="Tari">Tari</option>
                                <option value="Drumband">Drumband</option>
                                <option value="Bina Vokal">Bina Vokal</option>
                                <option value="Band">Band</option>
                                <option value="Futsal">Futsal</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 2 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Esktrakulikuler" name="ekstrakulikuler2">
                                <option value=""></option>
                                <option value="English Club">English Club</option>
                                <option value="Konten Creator">Konten Creator</option>
                                <option value="E-Sport">E-Sport</option>
                                <option value="Tari">Tari</option>
                                <option value="Drumband">Drumband</option>
                                <option value="Bina Vokal">Bina Vokal</option>
                                <option value="Band">Band</option>
                                <option value="Futsal">Futsal</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 3 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Esktrakulikuler" name="ekstrakulikuler3">
                                <option value=""></option>
                                <option value="English Club">English Club</option>
                                <option value="Konten Creator">Konten Creator</option>
                                <option value="E-Sport">E-Sport</option>
                                <option value="Tari">Tari</option>
                                <option value="Drumband">Drumband</option>
                                <option value="Bina Vokal">Bina Vokal</option>
                                <option value="Band">Band</option>
                                <option value="Futsal">Futsal</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button data-bs-dismiss="modal" type="reset" id="nilaiAsesmenGuru_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="nilaiAsesmenGuru_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal Input Nilai Ekstra-->

@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->