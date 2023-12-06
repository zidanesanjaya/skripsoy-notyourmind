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
                            <a href="{{ url('/dashboardAdmin') }}" class="text-muted text-hover-primary">Home</a>
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
                                        <th class="min-w-20px w-50px text-center">Tingkat</th>
                                        <th class="min-w-20px w-50px text-center">Kelas</th>
                                        <th class="min-w-75px w-150px text-center">Wali Kelas</th>
                                        <th class="min-w-30px w-50px text-center">Kelola</th>
                                        <th class="min-w-100px w-50px text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="listWaliKelas">
                                    @foreach($data AS $data => $key)
                                    <tr>
                                        <td class="px-5">{{($data+1)}}</td>
                                        <td class="text-center">{{$key->tingkat}}</td>
                                        <td class="text-center">{{$key->kelas}}</td>
                                        <td>{{$key->nama_lengkap}}</td>
                                        <td class="text-center">
                                            <div class="row m-1">
                                                <div class="col-md-12 my-1">
                                                    <a href="#" id="wali_kelas_btn" class="btn btn-sm btn-success w-100" data-bs-toggle="modal" data-bs-target="#tambahWaliKelas" onclick="setWaliKelas({{$key->id}});">
                                                        Wali Kelas
                                                    </a>
                                                </div>
                                                <div class="col-md-12 my-1">
                                                    <a href="#" class="btn btn-sm fw-bold btn-info w-100" data-bs-toggle="modal" data-bs-target="#kelolaMatpelKelas" onclick="setKelasId({{$key->id}});getKelas({{$key->tingkat}} , '{{$key->kelas}}');">Mata Pelajaran</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="/deleteKelas/{{$key->id}}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
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
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Tambah Kelas</h1>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <div class="row g-9 mb-8">
                    <div class="col-sm-6 fv-row">
                        <button class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#hapusDataSiswaKelas">
                            <span class="indicator-label">Hapus Data Siswa Kelas</span>
                        </button>
                    </div>
                </div>
                <!--begin:Form-->
                <form method="post" class="form" action="{{route('kelas.store')}}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Tingkat</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Tingkat" name="kelas">
                                <option value="">Pilih Tingkat...</option>
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
                            <label class="required fs-6 fw-semibold mb-2">Kelas</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Kelas..." name="kelas_name">
                                <option value="">Pilih Kelas...</option>
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
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="tambahKelas_cancel" class="btn btn-light me-3">Batal</button>
                        <button type="submit" id="tambahKelas_submit" class="btn btn-primary">
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
<!--end::Modal - Tambah Data Kelas-->

<!--begin::Modal - Hapus Data Siswa Kelas-->
<div class="modal fade" id="hapusDataSiswaKelas" tabindex="-1" aria-hidden="true">
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
                <!--begin::Heading-->
                <h1 class="text-warning fw-bold fs-1 mb-5 text-center">WARNING!!!</h1>
                <h3 class="text-dark fw-bold fs-3 mb-5">Menghapus Data Siswa Kelas Akan Menghapus Semua Data Siswa Pada Masing - Masing Kelas</h3>
                <!--end::Heading-->
                <!--begin::Notice-->
                <div class="text-muted fw-semibold mb-10">Kalau Yakin, Ketik "Saya Yakin Menghapus Data Siswa Kelas"</div>
                <!--end::Notice-->
                <!--begin::Form-->
                <form class="form" action="#">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <input type="text" class="form-control form-control-lg form-control-solid" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-toggle="modal" data-bs-target="#tambahKelas">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Yakin</span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Hapus Data Siswa Kelas-->

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
                <form id="tambahKelas_form" method="post" class="form" action="{{ route('kelas.update',0)}}">
                    @csrf
                    @method('PATCH')
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Tambah Wali Kelas</h1>
                        <!--end::Title-->
                    </div>
                    <input type="hidden" name="id_kelas" id="id_kelas">
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Wali Kelas</label>
                            <select class="form-select form-select-solid" data-placeholder="Pilih Wali Kelas" name="wali_kelas" id="add_wali_kelas">
                                @foreach($wali_kelas AS $key)
                                    <option value="{{$key->username_user}}">{{$key->nama_lengkap}}</option>
                                @endforeach
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
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0">
                <!--begin:Form-->
                <form id="tambahKelas_form" method="post" class="form" action="/update-mapel">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-2 text-center">
                        <!--begin::Title-->
                        <h1>Kelola Mata Pelajaran Kelas <span id="class_name"></span></h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
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
                                        <table id="kelasTest" class="table align-middle table-striped" style="width:100%">
                                            <thead>
                                                <tr class="fw-bold bg-light">
                                                    <th class="px-5 min-w-50px p-50px text-center">Mata Pelajaran</th>
                                                    <th class="px-5 min-w-50px p-120px text-center">Guru</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div id="dataTable"></div>
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
                    <div class="card pb-15">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Pilih Mata Pelajaran</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 table-striped" style="width:100%">
                                <thead>
                                    <tr class="fw-bold bg-light">
                                        <th class="px-5 min-w-50px p-50px text-center">Mata Pelajaran</th>
                                        <th class="px-5 min-w-50px p-120px text-center">Guru</th>
                                        <th class="min-w-50px w-50px text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" id="output" name="id_kelas_update">
                                @foreach($data_mapel AS $key)
                                    <tr>
                                        <td class="px-5">{{$key->nama_mapel}}</td>
                                        <td class="px-5">{{$key->nama_lengkap}}</td>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="{{$key->id}}" name="id_mapel[]"/>
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

<script>
    var temp_id_kelas = 0;
  
    
    function setWaliKelas(id){
        $("#id_kelas").val(id);
    }
    function getKelas(tingkat , kelas){
        $("#class_name").empty();
        $("#class_name").append(tingkat+' '+kelas);
    }
    function setKelasId(id) {
        temp_id_kelas = id;
        $("#output").val(id);

        $('#kelasTest tbody').empty();
        // Buat elemen HTML baru
        $.ajax({
            url: "/get-kelas-exist/" + temp_id_kelas,
            type: "GET",
            dataType: "json",
            success: function(json) {
                var newElemen = '';
                for (let i = 0; i < json.length; i++) {
                    newElemen +=   '<tr>'+
                                        '<td>'+json[i].nama_mapel+'</td>'+
                                        '<td>'+json[i].nama_lengkap+'</td>'+
                                    '</tr>';    
                }            
                $('#kelasTest tbody').append(newElemen);
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
        // Tambahkan elemen ke halaman
    }



    function setMapel(id_mapel){
        var checkboxElement = document.getElementById('checkboxId');
        var isChecked = checkboxElement.checked;
        var csrfToken = document.querySelector('input[name="csrf_token"]').value;

        var data = {
            id_mapel: id_mapel,
            id_kelas: temp_id_kelas,
            isChecked: isChecked
        };

        fetch('/update-mapel', {
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
