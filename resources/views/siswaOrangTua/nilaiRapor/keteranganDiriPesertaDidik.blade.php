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
                                            <div>
                                                <select class="form-select form-select-solid">
                                                    <a href="{{ url('/asd') }}">
                                                        <option value="">Pilih Rapor</option>
                                                    </a>
                                                    <option value="7C/Ganjil">7C/Ganjil</option>
                                                    <option value="8D/Genap">8D/Genap</option>
                                                    <option value="9E/Ganjil">9E/Ganjil</option>
                                                </select>
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
                                        <td id="row2">: Aisyah Fatin Sholikah</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">2.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Induk Siswa (NIS)</td>
                                        <td id="row2">: 9925</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">3.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Induk Siswa Nasional (NISN)</td>
                                        <td id="row2">: 2104295256</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">4.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Tempat, Tanggal Lahir</td>
                                        <td id="row2">: Tangerang Selatan, 22 November 2008</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">5.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Jenis Kelamin</td>
                                        <td id="row2">: Laki - Laki</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">6.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Agama</td>
                                        <td id="row2">: Islam</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">7.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Status Dalam Keluarga</td>
                                        <td id="row2">: Anak Kandung</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">8.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Anak Ke-</td>
                                        <td id="row2">: 2</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">9.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Alamat Peserta Didik</td>
                                        <td id="row2">: JL. IKAN GURAMI NO. 19 RT 02 RW 06 TUNJUNGSEKAR LOWOKWARU</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">10.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Sekolah Asal (SD/MTs, Sebutkan)</td>
                                        <td id="row2">: SDN TUNJUNGSEKAR 03</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">11.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Diterima di Sekolah ini</td>
                                        <td id="row2">: SMP MUHAMMADIYAH 1 MALANG</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">NPSN</td>
                                        <td id="row2">: 20533750</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Di Kelas</td>
                                        <td id="row2">: VII (Tujuh)</td>
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
                                        <td id="row2">: MUHAMMAD KHUMAINI</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">b. Nama Ibu</td>
                                        <td id="row2">: VIRNA SARI</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">13.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Alamat Orang Tua</td>
                                        <td id="row2">: JL. IKAN GURAMI NO. 19 RT 02 RW 06 TUNJUNGSEKAR LOWOKWARU</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Telepon / Hp</td>
                                        <td id="row2">: </td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">14.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Pekerjaan Orang Tua</td>
                                        <td id="row2"></td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">a. Pekerjaan Ayah</td>
                                        <td id="row2">: </td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">b. Pekerjaan Ibu</td>
                                        <td id="row2">: KARYAWAN BUMN</td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">15.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Wali</td>
                                        <td id="row2">: </td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center"></td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Nomor Telepon / HP</td>
                                        <td id="row2">: </td>
                                    </tr>
                                    <tr>
                                        <td id="No." class="text-center">17.</td>
                                        <td id="row1" class="text-gray-800 fw-bold text-nowrap">Pekerjaan Wali</td>
                                        <td id="row2">: </td>
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