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
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#tambahDataSiswa">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    Tambah Data Kelas
                                </a>
                            </div>
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
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Mata Pelajaran...</option>
                                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                            <option value="Bahasa Arab">Bahasa Arab</option>
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
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Tingkat...</option>
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
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Kelas...</option>
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
                            <table id="datasiswa" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="px-5 min-w-20px w-20px">No.</th>
                                        <th class="ps-4 min-w-20px w-20px">NIS</th>
                                        <th class="min-w-50px w-100px rounded-start">NISN</th>
                                        <th class="ps-4 min-w-20px w-20px">Tingkat</th>
                                        <th class="ps-4 min-w-20px w-20px">Kelas</th>
                                        <th class="min-w-100px w-150px">Nama Siswa</th>
                                        <th class="min-w-150px w-50px text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="listSiswa">
                                    <tr>
                                        <td class="px-5">1.</td>
                                        <td class="px-5">9925</td>
                                        <td>2104295256</td>
                                        <td class="px-5">7</td>
                                        <td class="px-5">C</td>
                                        <td>Aisyah Fatin Sholikah</td>
                                        <td class="text-center">
                                            <a href="/deleteAnggota/${data.id}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
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


<!--begin::Modal - Tambah Siswa-->
<div class="modal fade" id="tambahDataSiswa" tabindex="-1" aria-hidden="true">
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
                <form id="tambahDataSiswa_form" method="post" class="form" action="">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center">
                        <!--begin::Title-->
                        <h1>Tambah Data Kelas yang Diajarkan</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6">
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end py-5">
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-primary">
                                        <option>Simpan Data Ke Mata Pelajaran</option>
                                        <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                        <option value="Bahasa Arab">Bahasa Arab</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <div class="col-sm-6">
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end py-5">
                                <button type="submit" id="tambahDataSiswa_submit" class="btn btn-primary">
                                    <span class="indicator-label">Simpan</span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <!--begin::Table-->
                    <table id="modalTambahDataSiswaGuru" class="table align-middle gs-0 gy-4 text-nowrap" style="width:100%">
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th class="px-5 min-w-20px">No.</th>
                                <th class="ps-4 min-w-20px">Tingkat</th>
                                <th class="ps-4 min-w-20px">Kelas</th>
                                <th class="min-w-100px w-150px">Wali Kelas</th>
                                <th class="min-w-50px w-50px text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="listSiswa">
                            <tr>
                                <td class="px-5">1.</td>
                                <td class="px-5">7</td>
                                <td class="px-5">C</td>
                                <td>Bapak Nosa</td>
                                <td class="text-center d-flex justify-content-center align-items-center">
                                    <div class="form-check form-check-lg form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5">2.</td>
                                <td class="px-5">8</td>
                                <td class="px-5">D</td>
                                <td>Bapak Puji</td>
                                <td class="text-center d-flex justify-content-center align-items-center">
                                    <div class="form-check form-check-lg form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                    <!--end::Input group-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Tambah Siswa-->
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>