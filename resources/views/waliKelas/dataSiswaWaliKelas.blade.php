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
                            <a href="{{ url('/dashboardWaliKelas') }}" class="text-muted text-hover-primary">Home</a>
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
                                <span class="card-label fw-bold fs-3 mb-1">Data Siswa Kelas {{$data_wali->tingkat}} {{$data_wali->kelas}}</span>
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
                                    Tambah Siswa
                                </a>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::row header -->
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
                                        <th class="min-w-100px w-150px">Nama Siswa</th>
                                        <th class="min-w-100px w-150px text-center">Keterangan Diri</th>
                                        <th class="min-w-150px w-50px text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="listSiswa">
                                    @foreach($data AS $key => $results)
                                    <tr>
                                        <td class="px-5">{{$key+1}}</td>
                                        <td class="px-5">{{$results->nis}}</td>
                                        <td>{{$results->nisn}}</td>
                                        <td>{{$results->nama_lengkap}}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary me-2" onclick="getModal('{{$results->nama_lengkap}}','{{$results->nis}}','{{$results->nisn}}','{{$results->tempat}}','{{$results->tanggal_lahir}}','{{$results->jenis_kelamin}}' , '{{$results->agama}}' , '{{$results->status}}' , '{{$results->anak_ke}}' , '{{$results->alamat_siswa}}' , '{{$results->no_hp}}' , '{{$results->sekolah_asal}}' , '{{$results->nama_ayah}}' , '{{$results->nama_ibu}}' ,'{{$results->alamat_ortu}}' , '{{$results->no_hp_ortu}}' ,  '{{$results->nama_wali}}' ,  '{{$results->pekerjaan_wali}}' ,  '{{$results->alamat_wali}}' ,  '{{$results->no_hp_wali}}');" data-bs-toggle="modal" data-bs-target="#keteranganDiriPesertaDidik">Detail</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('delete.siswa_kelas')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="nisn" value="{{$results->nisn}}">

                                                <button type="submit" class="btn btn-icon btn-bg-light btn-color-danger btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
                <form id="tambahDataSiswa_form" method="post" class="form" action="{{route('update.siswa_kelas')}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center">
                        <!--begin::Title-->
                        <h1>Tambah Data Siswa</h1>
                        <!--end::Title-->
                    </div>
                    <input type="hidden" value="{{$data_wali->id}}" name="id_kelas">
                    <!--end::Heading-->
                    <div class="row">
                        <div class="col-6">
                            <!-- begin::search -->
                            <div class="d-flex align-items-center py-10">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-solid w-250px ps-14" placeholder="Cari Siswa" id="myInput" onkeyup="myFunction()">
                            </div>
                            <!-- end::search -->
                        </div>
                        <div class="col-6">
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end py-10">
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
                                <th class="ps-4 min-w-20px">NIS</th>
                                <th class="min-w-50px w-100px rounded-start">NISN</th>
                                <th class="min-w-100px w-150px">Nama Siswa</th>
                                <th class="min-w-50px w-50px text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="listSiswa">
                            @foreach($siswa AS $key => $results)
                            <tr>
                                <td class="px-5">{{$key+1}}</td>
                                <td class="px-5">{{$results->username}}</td>
                                <td>{{$results->nisn}}</td>
                                <td>{{$results->nama_lengkap}}</td>
                                <td class="text-center d-flex justify-content-center align-items-center">
                                    <div class="form-check form-check-lg form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="siswa[]" value="{{$results->nisn}}">
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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

<!--begin::Modal - Keterangan Diri Peserta Didik-->
<div class="modal fade" id="keteranganDiriPesertaDidik" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" method="post" action="{{route('siswa.update',0)}}" id="kt_modal_add_customer_form">
                @csrf
                @method('patch')
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Keterangan Diri Peserta Didik</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Nama Peserta Didik (Lengkap)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="hidden" name="dataSiswa" value="1">
                            <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="" id="name_edit" disabled />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Nomor Induk Siswa (NIS)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="nis" value="" id="nis_edit" disabled />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Nomor Induk Siswa Nasional (NISN)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="nisn" value="" id="nisn_edit" readonly />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Tempat, Tanggal Lahir</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-solid" placeholder="tempat" name="tempat"  id="tempat_edit"aria-label="Username" />
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir_edit"/>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Jenis Kelamin</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid" aria-label="Jenis Kelamin" id="jenis_kelamin_edit" name="jenis_kelamin">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Agama</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Agama" id="agama_edit" name="agama" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-8">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Status Dalam Keluarga</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Status Dalam Keluarga" id="status_edit"  name="status" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-4">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Anak Ke-</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="anak_ke" id="anak_ke_edit" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Alamat Peserta Didik</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Alamat" id="alamat_siswa_edit" name="alamat_siswa" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Nomor Telepon/Hp</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Telepon/Hp" id="no_hp_edit" name="no_hp" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Sekolah Asal (SD/MTs, Sebutkan)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Sekolah Asal" name="sekolah_asal" id="sekolah_asal_edit" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Diterima di Sekolah Ini</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="" value="SMP Muhammadiyah 1 Malang" disabled />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                               
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Nama Ayah</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Ayah" name="nama_ayah" value="" id="nama_ayah_edit"/>
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Nama Ibu</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Ibu" name="nama_ibu" id="nama_ibu_edit" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Alamat Orang Tua</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Alamat Orang Tua" name="alamat_ortu" id="alamat_ortu_edit" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Nomor Telepon / Hp Orang Tua</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Telepon / HP" name="no_hp_ortu" id="no_hp_ortu_edit" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Nama Wali</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Wali" name="nama_wali" id="nama_wali_edit" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Alamat Wali</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Alamat Wali" name="alamat_wali" id="alamat_wali_edit" value="" />
                                    <!--end::Input-->
                                </div>
                                <div class="col-sm-6">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Nomor Telepon / Hp Wali</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nomor Telepon / Hp Wali" name="no_hp_wali" id="no_hp_wali_edit" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Pekerjaan Wali</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Pekerjaan Wali" name="pekerjaan_wali" id="pekerjaan_wali_edit" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Keterangan Diri Peserta Didik-->

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap5'
    });

    function getModal(nama , nis , nisn , tempat , tanggal_lahir , jenis_kelamin , agama , status , anak_ke , alamat_siswa , no_hp , sekolah_asal , nama_ayah , nama_ibu , alamat_ortu , no_hp_ortu , nama_wali , pekerjaan_wali ,alamat_wali  , no_hp_wali){
        console.log(no_hp_wali);
        $("#name_edit").val(nama);
        $("#nis_edit").val(nis);
        $("#nisn_edit").val(nisn);
        $("#tempat_edit").val(tempat);
        $("#tanggal_lahir_edit").val(tanggal_lahir);
        $("#jenis_kelamin_edit").val(jenis_kelamin);
        $("#agama_edit").val(agama);
        $("#status_edit").val(status);
        $("#anak_ke_edit").val(anak_ke);
        $("#alamat_siswa_edit").val(alamat_siswa);
        $("#no_hp_edit").val(no_hp);
        $("#sekolah_asal_edit").val(sekolah_asal);
        $("#nama_ayah_edit").val(nama_ayah);
        $("#nama_ibu_edit").val(nama_ibu);
        $("#alamat_ortu_edit").val(alamat_ortu);
        $("#nama_wali_edit").val(nama_wali);
        $("#alamat_wali_edit").val(alamat_wali);
        $("#pekerjaan_wali_edit").val(pekerjaan_wali);
        $("#no_hp_wali_edit").val(no_hp_wali);

    }

    function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("modalTambahDataSiswaGuru");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
        var display = "none"; // Default to hiding the row

        // Loop through all columns in the current row
        for (j = 0; j < tr[i].cells.length; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            
            if (td) {
                txtValue = td.textContent || td.innerText;

                // Check if the current column contains the search filter
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    display = "";
                    break; // No need to check other columns once a match is found
                }
            }
        }

        // Set the display property for the current row
        tr[i].style.display = display;
    }
}

</script>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>