@extends('layouts.app')

@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
<input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
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
                            <span class="card-label fw-bold fs-3 mb-1">Data Nilai Siswa Kelas</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <input type="hidden" value="{{$getTahunAkademik}}" id="tahunAkademik">
                    <input type="hidden" value="{{$getSemester}}" id="semester">

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
                                    @foreach($data_siswa AS $key => $data)
                                    <tr>
                                        <td class="px-5 text-center">{{$key+1}}</td>
                                        <td class="px-5 text-center">{{$data->nis}}</td>
                                        <td class="text-center">{{$data->nisn}}</td>
                                        <td class="text-center">{{$data->nama_lengkap}}</td>
                                        <td class="px-5 text-center">{{$data->semester}}</td>
                                        <td class="px-5 text-center">{{$data->tahun_ajaran}}</td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <div class="col-md-12 my-1">
                                                    <div href="#" onclick="getNilaiSiswa({{$data->nisn}});" class="btn btn-sm fw-bold btn-success w-100" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" onclick="getNilaiSiswa({{$data->nisn}});getRapor({{$data->nisn}});"  class="btn btn-sm fw-bold btn-primary w-100" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" onclick="getNisn({{$data->nisn}});getNilaiSiswa({{$data->nisn}});getPancasila();" class="btn btn-sm fw-bold btn-info w-100" data-bs-toggle="modal" data-bs-target="#nilaiProfilPelajarPancasila">Input Nilai Pancasila</div>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <div href="#" onclick="getNilaiSiswa({{$data->nisn}});postNisn({{$data->nisn}});" class="btn btn-sm fw-bold btn-warning w-100" data-bs-toggle="modal" data-bs-target="#inputNilaiEkstra">Input Nilai Ekstra</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 text-center">
                                            <div class="row my-1">
                                                <div class="col-md-12 my-1">
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-check-custom form-check-solid d-flex align-items-center justify-content-center">
                                                        <input class="form-check-input" name="is_show" type="checkbox" {{$data->is_show == 1 ? 'checked' : ''}} onchange="updateHiddenInput({{$data->nisn}}, this.checked ? 1 : 0);" />
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <a href="{{ url('/unduhRapor/'.$data->nisn) }}" target="_blank" class="btn btn-sm fw-bold btn-info w-100">Unduh</a>
                                                </div>
                                            </div>
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
                                        <td class="px-5">: <span class="nama_siswa"></span></td>
                                        <td class="px-15">Kelas</td>
                                        <td>: <span class="kelas_tingkat"></span></td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: <span class="nisn_siswa"></span></td>
                                        <td class="px-15">Fase</td>
                                        <td>: {{$informasi_sekolah->fase}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: <span class="semester"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: <span class="tahun_pelajaran"></span></td>
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
                            <tbody class="fw-semibold text-gray-600" id="listNilai">
                               
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
                                        <td class="px-5">: <span class="nama_siswa"></span></td>
                                        <td class="px-15 ">Kelas</td>
                                        <td>: <span class="kelas_tingkat"></span></td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: <span class="nisn_siswa"></span></td>
                                        <td class="px-15">Fase</td>
                                        <td>: {{$informasi_sekolah->fase}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: <span class="semester"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: <span class="tahun_pelajaran"></span></td>
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
                            <tbody class="fw-semibold text-gray-600" id="rapor">
                                
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
                                        <td class="px-5">: <span class="nama_siswa"></span></td>
                                        <td class="px-15 ">Kelas</td>
                                        <td>: <span class="kelas_tingkat"></span></td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: <span class="nisn_siswa"></span></td>
                                        <td class="px-15">Fase</td>
                                        <td>: {{$informasi_sekolah->fase}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: <span class="semester"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: <span class="tahun_pelajaran"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row m-1">
                            <div class="col-sm-6">
                                <!--begin::Input-->
                                <div class="py-5">
                                    <select class="form-select form-select-solid" id="list_proyek" onchange="getPancasila();">
                                        @foreach($pancasila AS $data)
                                        <option value="{{$data->id}}">{{$data->nama_project}}</option>
                                        @endforeach
                                 
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <div class="col-sm-6">
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end py-3">
                                    <!--begin::Add product-->
                                    <a target="_blank" id="unduhPancasila"><button class="btn btn-info">Unduh Rapor Projek Penguatan Profil Pelajar Pancasila</button></a>
                                    <!--end::Add product-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::Products-->
                <!--begin::Modal body-->
                <form action="#">
                    <!--begin::Card body-->
                    <div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
                            <!--begin::Table Footer-->
                            <thead>
                                <tr style="background-color: #f2f2f2;">
                                    <th class="text-gray-800 text-hover-primary fw-bold table-striped px-5" id="nama_proyek"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="text-gray-800 px-3" id="deskripsi_pancasila"></td>
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
                            <tbody class="fw-semibold text-gray-600" id="table_pancasila">
                                
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
                                        <textarea name="catatan" class="form-control form-control-solid" placeholder="Isi Catatan Proses" onkeyup="post_pancasila(1);"></textarea>
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
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Esktrakulikuler Wajib</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" value="Tapak Suci" name="ekstrakulikuler1" readonly />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nilai</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai_ekstra1" onkeyup="post_ekstra();"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Esktrakulikuler Wajib</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" value="Hisbul Wathan" readonly name="ekstrakulikuler2"  />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nilai</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai_ekstra2" onkeyup="post_ekstra();"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 1 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" onchange="post_ekstra();" name="ekstrakulikuler3">
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
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai_ekstra3" onkeyup="post_ekstra();" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 2 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" onchange="post_ekstra();" name="ekstrakulikuler4">
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
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai_ekstra4" onkeyup="post_ekstra();" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Esktrakulikuler Pilihan 3 <span class="text-danger fs-8">(Jika Ada)</span></label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" onchange="post_ekstra();" name="ekstrakulikuler5">
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
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Nilai <span class="text-danger fs-8">(Jika Ada)</span></span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai" name="nilai_ekstra5" onkeyup="post_ekstra();" />
                        </div>
                        <!--end::Col-->
                    </div>
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
<!--end::Modal Input Nilai Ekstra-->

<script>

var nisn = -1;
var id_pancasila = -1;
function postNisn(nisn){
    this.nisn = nisn;

    var tahunAkademik = $("#tahunAkademik").val();
    var semester = $("#semester").val();

    console.log(nisn);
    
    $.ajax({
        url: '/get-ekstrakulikuler/'+nisn,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            console.log(response);
            $("input[name='nilai_ekstra1']").val(response.nilai_ekstra1);
            $("input[name='nilai_ekstra2']").val(response.nilai_ekstra2);
            $("input[name='nilai_ekstra3']").val(response.nilai_ekstra3);
            $("input[name='nilai_ekstra4']").val(response.nilai_ekstra4);
            $("input[name='nilai_ekstra5']").val(response.nilai_ekstra5);

            $("select[name='ekstrakulikuler3']").val(response.ekstrakulikuler3);
            $("select[name='ekstrakulikuler4']").val(response.ekstrakulikuler4);
            $("select[name='ekstrakulikuler5']").val(response.ekstrakulikuler5);

        }
    });
}

function post_pancasila(step){
    var tahunAkademik = $("#tahunAkademik").val();
    var semester = $("#semester").val();
    var catatan = $("textarea[name='catatan']").val();

    console.log(catatan);

    var csrfToken = document.querySelector('input[name="csrf_token"]').value;

    if(step == 1){
        desc_pancasila1 = $("textarea[name='desc_pancasila1_step1']").val() || null;
        desc_pancasila2 = $("textarea[name='desc_pancasila2_step1']").val() || null;
        desc_pancasila3 = $("textarea[name='desc_pancasila3_step1']").val() || null;

        nilai_pancasila1 = $("input[name='pancasila1_step1']:checked").val() || 0;
        nilai_pancasila2 = $("input[name='pancasila2_step1']:checked").val() || null;
        nilai_pancasila3 = $("input[name='pancasila3_step1']:checked").val() || null;
    }
    if(step == 2){
        desc_pancasila1 = $("textarea[name='desc_pancasila1_step2']").val() || null;
        desc_pancasila2 = $("textarea[name='desc_pancasila2_step2']").val() || null;
        desc_pancasila3 = $("textarea[name='desc_pancasila3_step2']").val() || null;

        nilai_pancasila1 = $("input[name='pancasila1_step2']:checked").val() || 0;
        nilai_pancasila2= $("input[name='pancasila2_step2']:checked").val() || null;
        nilai_pancasila3= $("input[name='pancasila3_step2']:checked").val() || null;
    }


    var data = {
        catatan:catatan,
        nisn: nisn,
        id_tahun_akademik: tahunAkademik,
        semester:semester,
        step:step,
        id_pancasila:id_pancasila,
        desc_pancasila1: desc_pancasila1,
        desc_pancasila2: desc_pancasila2,
        desc_pancasila3: desc_pancasila3,
        nilai_pancasila1: nilai_pancasila1,
        nilai_pancasila2: nilai_pancasila2,
        nilai_pancasila3: nilai_pancasila3
    };

    fetch('/store-nilai-pancasila', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Data berhasil dikirim:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function post_ekstra(){
    var tahunAkademik = $("#tahunAkademik").val();
    var semester = $("#semester").val();

    var ekstrakulikuler1 = document.querySelector('input[name="ekstrakulikuler1"]').value;
    var ekstrakulikuler2 = document.querySelector('input[name="ekstrakulikuler2"]').value;

    var ekstrakulikuler3Element = document.querySelector('select[name="ekstrakulikuler3"]');
    var ekstrakulikuler3 = ekstrakulikuler3Element ? ekstrakulikuler3Element.value : null;

    var ekstrakulikuler4Element = document.querySelector('select[name="ekstrakulikuler4"]');
    var ekstrakulikuler4 = ekstrakulikuler4Element ? ekstrakulikuler4Element.value : null;
    var ekstrakulikuler5Element = document.querySelector('select[name="ekstrakulikuler5"]');
    var ekstrakulikuler5 = ekstrakulikuler5Element ? ekstrakulikuler5Element.value : null;

    var nilai_ekstra1 = document.querySelector('input[name="nilai_ekstra1"]').value || null;
    var nilai_ekstra2 = document.querySelector('input[name="nilai_ekstra2"]').value || null;

    var nilai_ekstra3Element = document.querySelector('input[name="nilai_ekstra3"]');
    var nilai_ekstra3 = nilai_ekstra3Element ? nilai_ekstra3Element.value : null;

    var nilai_ekstra4Element = document.querySelector('input[name="nilai_ekstra4"]');
    var nilai_ekstra4 = nilai_ekstra4Element ? nilai_ekstra4Element.value : null;

    var nilai_ekstra5Element = document.querySelector('input[name="nilai_ekstra5"]');
    var nilai_ekstra5 = nilai_ekstra5Element ? nilai_ekstra5Element.value : null;

    var csrfToken = document.querySelector('input[name="csrf_token"]').value;

    console.log(nilai_ekstra1);
    var data = {
        nisn: nisn,
        id_tahun_akademik: tahunAkademik,
        ekstrakulikuler1: ekstrakulikuler1,
        ekstrakulikuler2: ekstrakulikuler2,
        ekstrakulikuler3: ekstrakulikuler3,
        ekstrakulikuler4: ekstrakulikuler4,
        ekstrakulikuler5: ekstrakulikuler5,
        semester:semester,
        nilai_ekstra1: nilai_ekstra1,
        nilai_ekstra2: nilai_ekstra2,
        nilai_ekstra3: nilai_ekstra3,
        nilai_ekstra4: nilai_ekstra4,
        nilai_ekstra5: nilai_ekstra5,
    };

    fetch('/store-ekstrakulikuler', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Data berhasil dikirim:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
                            
function getRapor(nisn){
    $.ajax({
        url: '/nilai-rapor-json/'+nisn,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            console.log(response);
            $("#rapor").empty();
            var len = response.length;
            for(var i = 0; i < len; i++){
                var tr_str = '<tr>'+
                                '<td class="text-center">'+(i+1)+'</td>'+
                                '<td class="text-gray-800 text-hover-primary fw-bold">'+response[i].nama_mapel+'</td>'+
                                '<td class="text-gray-800 text-hover-primary text-center">'+(response[i].nilai_akhir ?? 0)+'</td>'+
                                '<td class="text-gray-800 fw-bold">'+
                                    '<div class="row">'+
                                        (response[i].high_deskripsi ?? '-')+
                                    '</div>'+
                                    '<hr>'+
                                    '<div class="row">'+
                                        (response[i].low_deskripsi ?? '-')+
                                    '</div>'+
                                '</td>'+
                            '</tr>';
                $("#rapor").append(tr_str);
            }
        }
    });
}
function getNisn(nisn){
    this.nisn = nisn;
}


function getPancasila(){
    $("#table_pancasila").empty();
    $("#nama_proyek").empty();
    $("#deskripsi_pancasila").empty();

    var unduhLink = "/unduhPancasila/" + nisn;
    $("#unduhPancasila").attr("href", unduhLink);

   
    var listProyek = document.querySelector('select[id="list_proyek"]').value;
    var tahunAkademik = $("#tahunAkademik").val();
    var semester = $("#semester").val();

    var pancasila1_step1 = null;
    var pancasila2_step1 = null;
    var pancasila3_step1 = null;
    var catatan = null;

    var pancasila1_step2 = null;
    var pancasila2_step2 = null;
    var pancasila3_step2 = null;

    var desc_pancasila1_step1 = null;
    var desc_pancasila2_step1 = null;
    var desc_pancasila3_step1 = null;

    var desc_pancasila1_step2 = null;
    var desc_pancasila2_step2 = null;
    var desc_pancasila3_step2 = null;

    $.ajax({
        url: '/get-nilai-pancasila/'+nisn+'/'+semester+'/'+tahunAkademik+'/'+listProyek,
        type: 'get',
        dataType: 'JSON',
        success: function(response){

            if (Array.isArray(response) && response.length > 0) {
                pancasila1_step1 = response[0].nilai_pancasila1 ?? null;
                pancasila2_step1 = response[0].nilai_pancasila2 ?? null;
                pancasila3_step1 = response[0].nilai_pancasila3 ?? null;

                if (response[1]) {
                    pancasila1_step2 = response[1].nilai_pancasila1 ?? null;
                    pancasila2_step2 = response[1].nilai_pancasila2 ?? null;
                    pancasila3_step2 = response[1].nilai_pancasila3 ?? null;
                }

                desc_pancasila1_step1 = response[0].desc_pancasila1 ?? null;
                desc_pancasila2_step1 = response[0].desc_pancasila2 ?? null;
                desc_pancasila3_step1 = response[0].desc_pancasila3 ?? null;

                if (response[1]) {
                    desc_pancasila1_step2 = response[1].desc_pancasila1 ?? null;
                    desc_pancasila2_step2 = response[1].desc_pancasila2 ?? null;
                    desc_pancasila3_step2 = response[1].desc_pancasila3 ?? null;
                }

                catatan = response[0].catatan ?? null;
            }

            
        }
    });

    $.ajax({
        url: '/get-json-pancasila',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var sub_proyek1 = '';
            var sub_proyek2 = '';
            var sub_proyek3 = '';

            id_pancasila = document.querySelector('select[id="list_proyek"]').value;
            console.log(response);
            console.log(id_pancasila);

            // Memastikan response adalah objek sebelum menggunakan id_pancasila sebagai kunci
            if (typeof response === 'object' && response !== null) {
                // Mencari objek dengan properti 'id' yang sesuai
                const foundObject = Object.values(response).find(item => item.id == id_pancasila);

                // Lakukan penanganan berdasarkan nilai foundObject
                if (foundObject) {
                    // Lakukan sesuatu dengan foundObject
                    console.log(foundObject);
                    $("#nama_proyek").append(foundObject.nama_project);
                    $("#deskripsi_pancasila").append(foundObject.deskripsi);

                    sub_proyek1 += '<tr style="background-color: #f2f2f2;">'+
                                    '<td class="text-gray-800 text-hover-primary fw-bold px-5">'+foundObject.sub_proyek1+'</td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila1_step1" onkeyup="post_pancasila(1)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step1" onchange="post_pancasila(1)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step1"  onchange="post_pancasila(1)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step1"  onchange="post_pancasila(1)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step1"  onchange="post_pancasila(1)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila1_step2" onkeyup="post_pancasila(2)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step2"  onchange="post_pancasila(2)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step2"  onchange="post_pancasila(2)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step2"  onchange="post_pancasila(2)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila1_step2"  onchange="post_pancasila(2)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';

            $("#table_pancasila").append(sub_proyek1);

            if(foundObject.sub_proyek2){
                sub_proyek2 += '<tr style="background-color: #f2f2f2;">'+
                                    '<td class="text-gray-800 text-hover-primary fw-bold px-5">'+foundObject.sub_proyek2+'</td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila2_step1" onkeyup="post_pancasila(1)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step1"  onchange="post_pancasila(1)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step1"  onchange="post_pancasila(1)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step1" onchange="post_pancasila(1)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step1" onchange="post_pancasila(1)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila2_step2" onkeyup="post_pancasila(2)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step2" onchange="post_pancasila(2)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step2" onchange="post_pancasila(2)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step2" onchange="post_pancasila(2)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila2_step2" onchange="post_pancasila(2)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';

                $("#table_pancasila").append(sub_proyek2);

            }

            
            if(foundObject.sub_proyek3){
                sub_proyek3 += '<tr style="background-color: #f2f2f2;">'+
                                    '<td class="text-gray-800 text-hover-primary fw-bold px-5">'+foundObject.sub_proyek3+'</td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                    '<td></td>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila3_step1" onkeyup="post_pancasila(1)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step1" onchange="post_pancasila(1)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step1" onchange="post_pancasila(1)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step1" onchange="post_pancasila(1)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step1" onchange="post_pancasila(1)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td class="text-gray-800 px-3">'+
                                        '<textarea name="desc_pancasila3_step2" onkeyup="post_pancasila(2)" class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step2" onchange="post_pancasila(2)" value="BB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step2" onchange="post_pancasila(2)" value="MB">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center table-active">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step2" onchange="post_pancasila(2)" value="BSH">'+
                                        '</div>'+
                                    '</td>'+
                                    '<td class="text-center">'+
                                        '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                            '<input class="form-check-input" type="radio" name="pancasila3_step2" onchange="post_pancasila(2)" value="SB">'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';

                $("#table_pancasila").append(sub_proyek3);
            }
                } else {
                    // Objek tidak ditemukan
                    console.log('Objek tidak ditemukan');
                }
            } else {
                // Response bukan objek
                console.log('Response bukan objek');
            }


           

            

            $("textarea[name='desc_pancasila1_step1']").val(desc_pancasila1_step1);
            console.log(desc_pancasila1_step1);
            $("textarea[name='desc_pancasila2_step1']").val(desc_pancasila2_step1);
            $("textarea[name='desc_pancasila3_step1']").val(desc_pancasila3_step1);
            $("textarea[name='catatan']").val(catatan);


            // Untuk pancaSila1
            if (pancasila1_step1 === "BB") {
                $("input[name='pancasila1_step1'][value='BB']").prop('checked', true);
            } else if (pancasila1_step1 === "MB") {
                $("input[name='pancasila1_step1'][value='MB']").prop('checked', true);
            } else if (pancasila1_step1 === "BSH") {
                $("input[name='pancasila1_step1'][value='BSH']").prop('checked', true);
            } else if (pancasila1_step1 === "SB") {
                $("input[name='pancasila1_step1'][value='SB']").prop('checked', true);
            }

            // Untuk pancaSila2
            if (pancasila2_step1 === "BB") {
                $("input[name='pancasila2_step1'][value='BB']").prop('checked', true);
            } else if (pancasila2_step1 === "MB") {
                $("input[name='pancasila2_step1'][value='MB']").prop('checked', true);
            } else if (pancasila2_step1 === "BSH") {
                $("input[name='pancasila2_step1'][value='BSH']").prop('checked', true);
            } else if (pancasila2_step1 === "SB") {
                $("input[name='pancasila2_step1'][value='SB']").prop('checked', true);
            }

            // Untuk pancaSila3
            if (pancasila3_step1 === "BB") {
                $("input[name='pancasila3_step1'][value='BB']").prop('checked', true);
            } else if (pancasila3_step1 === "MB") {
                $("input[name='pancasila3_step1'][value='MB']").prop('checked', true);
            } else if (pancasila3_step1 === "BSH") {
                $("input[name='pancasila3_step1'][value='BSH']").prop('checked', true);
            } else if (pancasila3_step1 === "SB") {
                $("input[name='pancasila3_step1'][value='SB']").prop('checked', true);
            }

            // Untuk pancaSila1
            if (pancasila1_step2 === "BB") {
                $("input[name='pancasila1_step2'][value='BB']").prop('checked', true);
            } else if (pancasila1_step2 === "MB") {
                $("input[name='pancasila1_step2'][value='MB']").prop('checked', true);
            } else if (pancasila1_step2 === "BSH") {
                $("input[name='pancasila1_step2'][value='BSH']").prop('checked', true);
            } else if (pancasila1_step2 === "SB") {
                $("input[name='pancasila1_step2'][value='SB']").prop('checked', true);
            }

            // Untuk pancaSila2
            if (pancasila2_step2 === "BB") {
                $("input[name='pancasila2_step2'][value='BB']").prop('checked', true);
            } else if (pancasila2_step2 === "MB") {
                $("input[name='pancasila2_step2'][value='MB']").prop('checked', true);
            } else if (pancasila2_step2 === "BSH") {
                $("input[name='pancasila2_step2'][value='BSH']").prop('checked', true);
            } else if (pancasila2_step2 === "SB") {
                $("input[name='pancasila2_step2'][value='SB']").prop('checked', true);
            }

            // Untuk pancaSila3
            if (pancasila3_step2 === "BB") {
                $("input[name='pancasila3_step2'][value='BB']").prop('checked', true);
            } else if (pancasila3_step2 === "MB") {
                $("input[name='pancasila3_step2'][value='MB']").prop('checked', true);
            } else if (pancasila3_step2 === "BSH") {
                $("input[name='pancasila3_step2'][value='BSH']").prop('checked', true);
            } else if (pancasila3_step2 === "SB") {
                $("input[name='pancasila3_step2'][value='SB']").prop('checked', true);
            }

            console.log(desc_pancasila1_step1);

            $("textarea[name='desc_pancasila1_step2']").val(desc_pancasila1_step2);
            $("textarea[name='desc_pancasila2_step2']").val(desc_pancasila2_step2);
            $("textarea[name='desc_pancasila3_step2']").val(desc_pancasila3_step2);

            $("input[name='pancasila1_step2']:checked").val();        
            $("input[name='pancasila2_step2']:checked").val();
            $("input[name='pancasila3_step2']:checked").val();
        }
    });
}



function getNilaiSiswa(nisn){
    var tahunAkademik = $("#tahunAkademik").val();
    var semester = $("#semester").val();

    
    $.ajax({
        url: '/get-json-nilai/'+nisn+'/'+tahunAkademik+'/'+semester,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            // console.log(response.data_diri[0]);
            $(".nama_siswa").empty();
            $(".nisn_siswa").empty();
            $(".kelas_tingkat").empty();
            $(".fase_siswa").empty();
            $(".semester").empty();
            $(".tahun_pelajaran").empty();

            $(".nama_siswa").append(response.data_diri[0].nama_lengkap);
            $(".nisn_siswa").append(response.data_diri[0].nisn);
            $(".fase_siswa").append(response.data_diri[0].kelas);
            $(".kelas_tingkat").append(response.data_diri[0].tingkat);
            $(".semester").append(response.informasi_sekolah[0].semester);
            $(".tahun_pelajaran").append(response.informasi_sekolah[0].tahun_pelajaran);
            var len = response.distinctData.length;
            $("#listNilai").empty();

            for(var i = 0; i < len; i++){
                var tr_str = '<tr>'+
                                '<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">'+response.distinctData[i].nama_mapel+'</td>';

                var sum = 0;
                var totalSumatif = response.dataNilai.filter(item => item.id_mapel_kelas === response.distinctData[i].id_mapel_kelas).length;
                // console.log(totalSumatif);

                for (let j = 1; j < 11; j++) {
                    const dataNilaiFiltered = response.dataNilai.filter(item => item.id_mapel_kelas === response.distinctData[i].id_mapel_kelas && item.sumatif == j);
                    if (dataNilaiFiltered[0] == null) {
                        tr_str += '<td id="sumatif' + j + '" class="text-gray-800 text-hover-primary text-center">-</td>';
                    } else {
                        sum += dataNilaiFiltered[0].nilai;
                        tr_str += '<td id="sumatif' + j + '" class="text-gray-800 text-hover-primary text-center">' + dataNilaiFiltered[0].nilai + '</td>';
                    }
                }

                tr_str += '<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">'+(sum/totalSumatif).toFixed(2)+'</td>'+
                        '<td id="pts" class="text-gray-800 text-hover-primary text-center">'+ (response.distinctData[i].pas !== null && response.distinctData[i].pas !== undefined ? response.distinctData[i].pas : 0) +'</td>'+
                        '<td id="pas" class="text-gray-800 text-hover-primary text-center">'+ (response.distinctData[i].pts !== null && response.distinctData[i].pts !== undefined ? response.distinctData[i].pts : 0) +'</td>'+
                        '<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">'+(((sum/totalSumatif) + (response.distinctData[i].pas !== null && response.distinctData[i].pas !== undefined ? response.distinctData[i].pas : 0) + (response.distinctData[i].pts !== null && response.distinctData[i].pts !== undefined ? response.distinctData[i].pts : 0)) / 3).toFixed(2)+'</td>'+
                    '</tr>';
                $("#listNilai").append(tr_str);
            }
        }
    });
}


</script>

<script>
    function updateHiddenInput(nisn, isShow) {
        var csrfToken = document.querySelector('input[name="csrf_token"]').value;

        fetch('/show-rapor/' + nisn + '/' + isShow, {
            method: 'get',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
        })
        .then(response => response.json())
        .then(data => {
            console.log('Data berhasil dikirim:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

</script>
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->