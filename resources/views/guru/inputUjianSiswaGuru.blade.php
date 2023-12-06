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
                        <li class="breadcrumb-item text-muted">Input Nilai Ujian Siswa</li>
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
                                <span class="card-label fw-bold fs-3 mb-1">Input Nilai Ujian Siswa</span>
                            </h3>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Input Nilai Ujian-->
                                <a href="{{route('nilai.index')}}">
                                    <button type="button" class="btn btn-info">
                                        Input Nilai Sumatif
                                    </button>
                                </a>
                                <!--end::Input Nilai Ujian-->
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
                                        <select class="form-select form-select-solid" onchange="loadData();" id="mapel">
                                        @foreach($data_mapel AS $data)
                                            <option value="{{$data->id}}">{{$data->nama_mapel}}</option>
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
                                        <th class="min-w-100px w-50px text-center">PTS</th>
                                        <th class="min-w-100px w-50px text-center">PAS</th>
                                        <th class="min-w-100px w-50px text-center">Rata - Rata Sumatif</th>
                                        <th class="min-w-100px w-50px text-center">Rata - Rata Ujian</th>
                                        <th class="min-w-100px w-50px text-center">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">

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

<script>
    $(document).ready(async function() {
        // await changeSelectSumatif();
        await loadData();
    });


    function loadData() {
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();

        $('#dataTable').DataTable().destroy();
        $('#dataTable').DataTable({
            ajax: {
                url: '/get-json-nilai-akhir/'+mapel+'/'+filterKelas+'/'+filterTingkat,
                dataSrc: '',
            },
            columns: [
                {
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
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="Nilai" id="nilai_pts' + (meta.row + 1) + '" value="' + row.pts + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');" />' +
                            '</div>' +
                            '</div>';
                    }
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<div class="row m-1">' +
                            '<div class="col-12">' +
                            '<input type="number" class="form-control form-control-solid text-center" placeholder="Nilai" id="nilai_pas' + (meta.row + 1) + '" value="' + row.pas + '" onkeyup="saveNilai(' + (meta.row + 1) + ',' + data.nisn + ');" />' +
                            '</div>' +
                            '</div>';
                    }
                },
                {
                    data: 'ratasuma'
                },
                {
                    data: 'ratauji'
                },
                {
                    data: 'nilai_akhir'
                },
            ],
        });

    }

    function saveNilai(num, nisn) {
        var mapel = $("#mapel").val();
        var filterKelas = $("#filterKelas").val();
        var filterTingkat = $("#filterTingkat").val();

        var nilaiPas = document.getElementById('nilai_pas' + num).value || 0;
        var nilaiPts = document.getElementById('nilai_pts' + num).value || 0;

        var csrfToken = document.querySelector('input[name="csrf_token"]').value;

        var data = {
            nisn: nisn,
            id_mapel: mapel,
            nilaiPas: nilaiPas,
            nilaiPts: nilaiPts
        };

        fetch('/update-nilai-akhir', {
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