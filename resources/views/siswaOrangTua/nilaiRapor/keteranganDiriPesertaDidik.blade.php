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
                            <a href="{{ url('/dashboardSiswaOrangTua') }}" class="text-muted text-hover-primary text-center">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Rapor</li>
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
                <div class="row">
                    <div class="col-sm-10">
                        <div class="card mb-5">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 d-flex= justify-content-center">
                                <h3 class="card-title d-flex align-items-center text-center">
                                    <span class="card-label fw-bold fs-3 mb-1">
                                        Keterangan Diri Peserta Didik
                                    </span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="app-container py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">

                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card mb-5">
                            <!--begin::Header-->
                            <div class="row d-flex justify-content-center align-content-center">
                                <div class="col-md-12 col-sm-12">
                                    <div class="card-header border-0 pt-5 w-20">
                                        <div class="mb-1">
                                            <!--begin::Input-->
                                            <div class="btn-group">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Pilih Rapor
                                                </button>
                                                <ul class="dropdown-menu form-select-solid" aria-labelledby="dropdownMenuButton">
                                                    @if($data->is_show == 1)
                                                        @foreach($data_rapor AS $datas)
                                                            <li><a class="dropdown-item" href="{{ url('/nilai-rapor-siswa/'.$datas->id_tahun_akademik.'/'.$datas->semester) }}">Laporan Hasil Belajar Kelas {{$datas->tingkat}} / {{$datas->semester}}</a></li>
                                                        @endforeach
                                                        <hr>
                                                        <li><a class="dropdown-item" href="{{ route('data.nilai_pancasila') }}">Rapor Pancasila</a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="app-container py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">

                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                </div>
                <!--end::Tables Widget 11-->
                <!--begin::Tables Widget 11-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="app-container py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-20px w-20px text-center"></th>
                                        <th class="min-w-50px w-50px text-center"></th>
                                        <th class="min-w-500px w-100px text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="No." class="text-center">1.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Peserta Didik</td>
                                        <td id="row2">: {{$data->nama_lengkap}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">2.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Induk Siswa (NIS)</td>
                                        <td id="row2">: {{$data->nis}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">3.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Induk Siswa Nasional (NISN)</td>
                                        <td id="row2">: {{$data->nisn}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">4.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Tempat, Tanggal Lahir</td>
                                        <td id="row2">: {{$data->tempat}}, {{$data->tanggal_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">5.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Jenis Kelamin</td>
                                        <td id="row2">: {{$data->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">6.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Agama</td>
                                        <td id="row2">: {{$data->agama}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">7.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Status Dalam Keluarga</td>
                                        <td id="row2">: {{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">8.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Anak Ke-</td>
                                        <td id="row2">: {{$data->anak_ke}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">9.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Alamat Peserta Didik</td>
                                        <td id="row2">: {{$data->alamat_siswa}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">10.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Sekolah Asal (SD/MTs, Sebutkan)</td>
                                        <td id="row2">: {{$data->sekolah_asal}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">11.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Diterima di Sekolah ini</td>
                                        <td id="row2">: SMP MUHAMMADIYAH 1 MALANG</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">NPSN</td>
                                        <td id="row2">: {{$informasi_sekolah->npsn}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Di Kelas</td>
                                        <td id="row2">: {{$data->tingkat}} {{$data->kelas}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Tanggal</td>
                                        <td id="row2">: 12 JULI 2021</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">12.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Orang Tua</td>
                                        <td id="row2"></td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">a. Nama Ayah</td>
                                        <td id="row2">: {{$data->nama_ayah}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">b. Nama Ibu</td>
                                        <td id="row2">: {{$data->nama_ibu}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">13.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Alamat Orang Tua</td>
                                        <td id="row2">: {{$data->alamat_ortu}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Telepon / Hp</td>
                                        <td id="row2">: {{$data->no_hp_ortu}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">14.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Pekerjaan Orang Tua</td>
                                        <td id="row2"></td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">a. Pekerjaan Ayah</td>
                                        <td id="row2">: {{$data->pekerjaan_ayah}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">b. Pekerjaan Ibu</td>
                                        <td id="row2">: {{$data->pekerjaan_ibu}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">15.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Wali</td>
                                        <td id="row2">: {{$data->nama_wali}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Telepon / HP</td>
                                        <td id="row2">: {{$data->no_hp_wali}}</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">17.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Pekerjaan Wali</td>
                                        <td id="row2">: {{$data->pekerjaan_wali}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table container-->
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
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->