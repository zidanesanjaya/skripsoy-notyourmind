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
                        <li class="breadcrumb-item text-muted">Kelola Kelas</li>
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
                            <span class="card-label fw-bold fs-3 mb-1">Data Kelas</span>
                        </h3>
                        <div class="card-toolbar align-items-end justify-content-end ms-auto">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#tambahKelas">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                Tambah Kelas
                            </a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="dataWaliKelas" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="min-w-20px w-20px px-5">No.</th>
                                        <!-- <th class="ps-4 min-w-150px w-300px rounded-start">Nama</th> -->
                                        <th class="min-w-20px w-50px text-center">Kelas</th>
                                        <th class="min-w-20px w-50px text-center">Fase</th>
                                        <th class="min-w-75px w-150px text-center">Wali Kelas</th>
                                        <th class="min-w-30px w-50px text-center">Kelola</th>
                                        <th class="min-w-100px w-50px text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="listWaliKelas">
                                    <tr>
                                        <td class="px-5">1.</td>
                                        <td class="text-center">7</td>
                                        <td class="text-center">A</td>
                                        <td>Bapak Nosa</td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <div class="col-md-12 my-1">
                                                    <a href="#" class="btn btn-sm btn-success w-100" data-bs-toggle="modal" data-bs-target="#tambahWaliKelas">
                                                        Wali Kelas
                                                    </a>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <a href="#" class="btn btn-sm fw-bold btn-info w-100" data-bs-toggle="modal" data-bs-target="#kelolaMatpelKelas">Mata Pelajaran</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="/deleteAnggota/${data.id}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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


<!--begin::Modal - Tambah Data Kelas-->
<div class="modal fade" id="tambahKelas" tabindex="-1" aria-hidden="true">
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
                <form id="tambahKelas_form" method="post" class="form" action="{{ route('createAnggota')}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Tambah Kelas</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Kelas</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Kelas" name="kelas">
                                <option value="">Pilih Kelas...</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Fase</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Fase..." name="kelas">
                                <option value="">Pilih Fase...</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                            </select>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Tables Widget 11-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">List Kelas</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table id="listKelas" class="table align-middle gs-0 table-striped" style="width:100%">
                                            <thead>
                                                <tr class="fw-bold text-muted bg-light">
                                                    <th class="px-5 min-w-20px">No.</th>
                                                    <th class="px-5 min-w-20px">Kelas</th>
                                                    <th class="px-5 min-w-20px">Fase</th>
                                                    <th class="min-w-150px w-50px text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="px-5">1.</td>
                                                    <td class="px-5">7</td>
                                                    <td class="px-5">A</td>
                                                    <td class="text-center">
                                                        <a href="/deleteTahunAkademik/'+data[i].id+'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                </svg>
                                                            </span><!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5">2.</td>
                                                    <td class="px-5">8</td>
                                                    <td class="px-5">B</td>
                                                    <td class="text-center">
                                                        <a href="/deleteTahunAkademik/'+data[i].id+'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                </svg>
                                                            </span><!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5">3.</td>
                                                    <td class="px-5">9</td>
                                                    <td class="px-5">C</td>
                                                    <td class="text-center">
                                                        <a href="/deleteTahunAkademik/'+data[i].id+'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                </svg>
                                                            </span><!--end::Svg Icon-->
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
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="tambahKelas_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="tambahKelas_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal - Tambah Data Kelas-->

<!--begin::Modal - Kelola Wali Kelas-->
<div class="modal fade" id="tambahWaliKelas" tabindex="-1" aria-hidden="true">
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
                <form id="tambahKelas_form" method="post" class="form" action="{{ route('createAnggota')}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Tambah Wali Kelas</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Guru</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Kelas" name="kelas">
                                <option value="">Pilih Guru...</option>
                                <option value="Bapak Nosa">Bapak Nosa</option>
                                <option value="Bapak Vatqi">Bapak Vatqi</option>
                                <option value="Bapak Buji">Bapak Buji</option>
                            </select>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="tambahKelas_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="tambahKelas_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal - Kelola Wali Kelas-->

<!--begin::Modal - Kelola Mata Pelajaran Kelas-->
<div class="modal fade" id="kelolaMatpelKelas" tabindex="-1" aria-hidden="true">
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
                <form id="tambahKelas_form" method="post" class="form" action="{{ route('createAnggota')}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-2 text-center">
                        <!--begin::Title-->
                        <h1>Kelola Mata Pelajaran Kelas 7C (as Kelas & Fase)</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Pilih Mata Pelajaran</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="listKelas" class="table align-middle gs-0 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold bg-light">
                                        <th class="px-5 min-w-50px p-50px text-center">Mata Pelajaran</th>
                                        <th class="px-5 min-w-50px p-120px text-center">Guru</th>
                                        <th class="min-w-50px w-50px text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5">Pendidikan Agama Islam</td>
                                        <td class="px-5">Bapak Puji</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Bahasa Inggris</td>
                                        <td class="px-5">Bapak Nosa</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Teknologi Informasi dan Komputer</td>
                                        <td class="px-5">Bapak Vatqi</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Pendidikan Agama Islam</td>
                                        <td class="px-5">Bapak Puji</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Bahasa Inggris</td>
                                        <td class="px-5">Bapak Nosa</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Teknologi Informasi dan Komputer</td>
                                        <td class="px-5">Bapak Vatqi</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Pendidikan Agama Islam</td>
                                        <td class="px-5">Bapak Puji</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Bahasa Inggris</td>
                                        <td class="px-5">Bapak Nosa</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Teknologi Informasi dan Komputer</td>
                                        <td class="px-5">Bapak Vatqi</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Pendidikan Agama Islam</td>
                                        <td class="px-5">Bapak Puji</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Bahasa Inggris</td>
                                        <td class="px-5">Bapak Nosa</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-5">Teknologi Informasi dan Komputer</td>
                                        <td class="px-5">Bapak Vatqi</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Tables Widget 11-->
                            <div class="card">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">List Mata Pelajaran yang Telah di Pilih</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table id="listKelas" class="table align-middle gs-0 table-striped" style="width:100%">
                                            <thead>
                                                <tr class="fw-bold bg-light">
                                                    <th class="px-5 min-w-50px p-50px text-center">Mata Pelajaran</th>
                                                    <th class="px-5 min-w-50px p-120px text-center">Guru</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="px-5">Pendidikan Agama Islam</td>
                                                    <td class="px-5">Bapak Puji</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5">Bahasa Inggris</td>
                                                    <td class="px-5">Bapak Nosa</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-5">Teknologi Informasi dan Komputer</td>
                                                    <td class="px-5">Bapak Vatqi</td>
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
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="tambahKelas_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="tambahKelas_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal - Kelola Mata Pelajaran Kelas-->

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>