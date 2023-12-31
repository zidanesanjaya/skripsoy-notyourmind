@extends('layouts.app')

@section('content')
<style>
    #dataTable {
        max-height: 400px;
        /* Sesuaikan dengan tinggi maksimum yang Anda inginkan */
        overflow-y: auto;
        /* Membuat scrollbar vertikal muncul jika melebihi tinggi maksimum */
        width: 100%;
        /* Menyesuaikan lebar tabel dengan kontainer */
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
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
                            <a href="{{ url('/dashboardGuru') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Input Nilai Sumatif Siswa</li>
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
                    <!-- begin::Row Header -->
                    <div class="row">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Input Nilai Sumatif Siswa</span>
                            </h3>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <!--begin::Export-->
                                    <a href="" class="btn btn-light-warning me-3" onclick="initSiswa();" id="initSiswa">Initialize</a>

                                    <a onclick="getNilaiExcel();" id="getNilaiExcel">
                                        <button type="button" class="btn btn-light-success me-3" id="downloadTemplateNilaiAsesmen" download>
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor"></rect>
                                                    <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor"></path>
                                                    <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Unduh Template Nilai Asesmen</button>
                                    </a>
                                    <!--end::Export-->
                                    <!--begin::Add customer-->
                                    <button type="button" onclick="uploadNilai();" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#importNilaiAsesmen">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil018.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"></path>
                                                <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="currentColor"></path>
                                                <path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Unggah Nilai Asesmen</button>
                                    <!--end::Add customer-->
                                    <!--begin::Input Nilai Ujian-->
                                    <a href="{{ url('/nilai-akhir') }}">
                                        <button type="button" class="btn btn-info">
                                            Input Nilai Ujian
                                        </button>
                                    </a>
                                    <!--end::Input Nilai Ujian-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::Row Header -->
                    <!--begin::Header-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 col-sm-3">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Mata Pelajaran:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" onchange="loadData();changeSelectSumatif();" id="mapel">
                                            @foreach($mapel AS $key)
                                            <option value="{{$key->id}}">{{$key->nama_mapel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Tingkat:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" onchange="loadData();" id="filterTingkat">
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Kelas:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id="filterKelas" onchange="loadData();">
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
                        <div class="col-md-3 col-sm-3">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Sumatif:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id="filterSumatif" onchange="loadData();">

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
                            <table id="dataTable" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light text-nowrap">
                                        <th class="px-5 min-w-20px w-20px text-center">No.</th>
                                        <th class="ps-4 min-w-20px w-20px text-center">NIS</th>
                                        <th class="min-w-50px w-75px text-center">NISN</th>
                                        <th class="min-w-100px w-100px text-center">Nama Siswa</th>
                                        <th class="min-w-100px w-50px text-center">Nilai Sumatif</th>
                                        <th class="min-w-150px w-150px text-start">Deskripsi Tertinggi</th>
                                        <th class="min-w-150px w-150px text-start">Deskripsi Terendah</th>
                                        <th class="min-w-75px w-50px text-center">S</th>
                                        <th class="min-w-75px w-50px text-center">I</th>
                                        <th class="min-w-75px w-50px text-center">A</th>
                                    </tr>
                                </thead>
                                <tbody id="listSiswa" class="text-center">

                                </tbody>
                            </table>
                            <!--end::Table-->
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

<!--begin::Modal - Upload File-->
<div class="modal fade" id="importNilaiAsesmen" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form action="/import-nilai" method="post" enctype="multipart/form-data">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header">
                    <input type="hidden" id="id_mapel_up" name="id_mapel">
                    <input type="hidden" id="tingkat_up" name="tingkat">
                    <input type="hidden" id="kelas_up" name="kelas">
                    <input type="hidden" id="sumatif_up" name="sumatif">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Upload Nilai Asesmen</h2>
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
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group">
                        <!--begin::Dropzone-->
                            <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                            <!--begin::Controls-->
                                <div class="dropzone-panel mb-4">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"name="file" aria-label="Upload">
                                    </div>
                                </div>
                            <!--end::Controls-->
                            <!--begin::Items-->
                                <div class="dropzone-items wm-200px">
                                    <div class="dropzone-item p-5" style="display:none">
                                        <div class="form-group mb-4">
                                            <div class="custom-file text-left">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="dropzone-toolbar">
                                            <span class="dropzone-start">
                                                <i class="bi bi-play-fill fs-3"></i>
                                            </span>
                                            <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                <i class="bi bi-x fs-3"></i>
                                            </span>
                                            <span class="dropzone-delete" data-dz-remove="">
                                                <i class="bi bi-x fs-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Dropzone-->
                            <div class="text-end">
                                <button type="reset" id="" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" id="" class="btn btn-primary">
                                    <span class="indicator-label">Upload</span>
                                </button>
                            </div>

                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Upload File-->

<script>
    $(document).ready(async function() {
        await changeSelectSumatif();
        await loadData();
    });

   function getNilaiExcel() {
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();
        document.getElementById('getNilaiExcel').href = "/getExcelNilai/" + filterTingkat + "/" + filterKelas;
    }


    function uploadNilai(){
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();
        var filterSumatif = $("#filterSumatif").val();

        $("#id_mapel_up").val(mapel);
        $("#kelas_up").val(filterKelas);
        $("#tingkat_up").val(filterTingkat);
        $("#sumatif_up").val(filterSumatif);
    }

    async function changeSelectSumatif() {
        var mapel = $("#mapel").val();

        return new Promise(function(resolve, reject) {
            $.ajax({
                url: 'get-json-sumatif-by-id/' + mapel,
                dataType: 'json',
                success: function(data) {
                    $('#filterSumatif').empty();
                    $('#filterSumatif').append('<option selected value="-1" selected>Pilih Sumatif</option>');
                    for (let i = 0; i < data.length; i++) {
                        $('#filterSumatif').append('<option value="' + data[i].id + '">' + data[i].nama_sumatif + '</option>');
                    }
                    resolve(); // Tandai bahwa operasi selesai
                },
                error: function(error) {
                    console.error('Terjadi kesalahan:', error);
                    reject(error); // Tangani kesalahan jika terjadi
                }
            });
        });
    }

    function changeSumatif(id_nilai, id_sumatif_tertinggi, id_sumatif_terendah) {
        var id_mapel = $("#mapel").val();
        $.ajax({
            url: 'get-json-sumatif-by-id/' + id_mapel, // Lokasi file JSON
            dataType: 'json',
            success: function(data) {
                $('#highdesc_' + id_nilai).empty();
                $('#lowdesc_' + id_nilai).empty();

                $('#lowdesc_' + id_nilai).append('<option value="">Pilih Sumatif</option>');
                for (let i = 0; i < data.length; i++) {
                    if (id_sumatif_terendah && id_sumatif_terendah == data[i].id) {
                        $('#lowdesc_' + id_nilai).append('<option value="' + data[i].id + '" selected>' + data[i].nama_sumatif + '</option>');
                    } else {
                        $('#lowdesc_' + id_nilai).append('<option value="' + data[i].id + '">' + data[i].nama_sumatif + '</option>');
                    }
                }

                $('#highdesc_' + id_nilai).append('<option value="">Pilih Sumatif</option>');
                for (let i = 0; i < data.length; i++) {
                    if (id_sumatif_tertinggi && id_sumatif_tertinggi == data[i].id) {
                        $('#highdesc_' + id_nilai).append('<option value="' + data[i].id + '" selected>' + data[i].nama_sumatif + '</option>');
                    } else {
                        $('#highdesc_' + id_nilai).append('<option value="' + data[i].id + '">' + data[i].nama_sumatif + '</option>');
                    }
                }
            },
            error: function(error) {
                console.error('Terjadi kesalahan:', error);
            }
        });

    }

    function initSiswa() {
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();
        var filterSumatif = $("#filterSumatif").val();
        var csrfToken = document.querySelector('input[name="csrf_token"]').value;

        document.getElementById("initSiswa").href = "/initSiswa/" + mapel + '/' + filterKelas + '/' + filterTingkat + '/' + filterSumatif;

    }

    function loadData() {
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();
        var filterSumatif = $("#filterSumatif").val();

        console.log('/get-json-data-siswa/' + mapel + '/' + filterTingkat + '/' + filterKelas + '/' + filterSumatif);
        $('#dataTable').DataTable().destroy();
        $('#dataTable').DataTable({
            ajax: {
                url: '/get-json-data-siswa/' + mapel + '/' + filterTingkat + '/' + filterKelas + '/' + filterSumatif,
                dataSrc: 'data',
            },
            columns: [{
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + 1; // Menggunakan nomor baris sebagai counter
                    }
                },
                {
                    data: 'nis'
                },
                {
                    data: 'nisn'
                },
                {
                    data: 'nama_lengkap'
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<div class="row m-1">' +
                            '<div class="col-12">' +
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="Nilai" id="nilai_' + (meta.row + 1) + '" value="' + row.nilai + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');" />' +
                            '</div>' +
                            '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return data.sumatif_tertinggi;
                        // '<div>'+
                        //     '<select class="form-select form-select-solid" name="deskripsi_tertinggi" id="highdesc_'+(meta+1)+'" onkeyup="saveNilai('+(meta+1)+','+data.nisn+');" >'+

                        //     '</select>'+
                        // '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return data.sumatif_terendah;
                        // '<div>'+
                        //     '<select class="form-select form-select-solid" name="deskripsi_terendah" id="lowdesc_'+(meta+1)+'" onkeyup="saveNilai('+(meta+1)+','+data.nisn+');" >'+

                        //     '</select>'+
                        // '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<div class="row m-1">' +
                            '<div class="col-12">' +
                            '<div class="row">' +
                            '<div class="col-12">' +
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="S" id="sakit_' + (meta.row + 1) + '" value="' + row.sakit + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');"  />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<div class="row m-1">' +
                            '<div class="col-12">' +
                            '<div class="row">' +
                            '<div class="col-12">' +
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="I" id="ijin_' + (meta.row + 1) + '" value="' + row.ijin + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');"  />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<div class="row m-1">' +
                            '<div class="col-12">' +
                            '<div class="row">' +
                            '<div class="col-12">' +
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="A" id="alasan_' + (meta.row + 1) + '" value="' + row.alpha + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');"  />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                }
            ],
            // drawCallback: function(settings){
            //     this.api().rows().every(function(){
            //         var meta = this;
            //         var data = meta.data();
            //         changeSumatif(data.id_nilai , data.id_sumatif_tertinggi , data.id_sumatif_terendah);
            //     });
            // }
        });

    }

    function saveNilai(num, nisn) {
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();
        var filterSumatif = $("#filterSumatif").val();

        var nilai = document.getElementById('nilai_' + num).value || 0;
        var sakit = document.getElementById('sakit_' + num).value || 0;
        var ijin = document.getElementById('ijin_' + num).value || 0;
        var alasan = document.getElementById('alasan_' + num).value || 0;

        // var lowdesc = document.getElementById('lowdesc_'+num).value;
        // var highdesc = document.getElementById('highdesc_'+num).value;

        var csrfToken = document.querySelector('input[name="csrf_token"]').value;

        var data = {
            nisn: nisn,
            id_mapel: mapel,
            nilai: nilai,
            sakit: sakit,
            ijin: ijin,
            alpha: alasan,
            id_sumatif: filterSumatif,
            // lowdesc: lowdesc,
            // highdesc: highdesc
        };

        fetch('/update-nilai', {
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
</script>

@endsection
