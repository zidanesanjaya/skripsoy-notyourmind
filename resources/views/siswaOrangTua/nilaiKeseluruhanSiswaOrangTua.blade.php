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
                        <li class="breadcrumb-item text-muted">Leger Nilai Siswa</li>
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
                                <span class="card-label fw-bold fs-3 mb-1">Nilai Keseluruhan</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                    </div>
                    <input type="hidden" value="{{$auth->nisn}}" id="nisn_get">
                    <!-- end::row header -->
                    <!-- begin::Row Toolbar -->
                    <!--begin::Header-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-sm-6">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-1">
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id="tahunAkademik" onchange="getNilaiSiswa();">
                                            @foreach($tahunAkademik AS $data)
                                            <option value="{{$data->id}}">{{$data->tahun_akademik}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-1">
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id="semester" onchange="getNilaiSiswa();">
                                            <option value="Ganjil">Ganjil</option>
                                            <option value="Genap">Genap</option>
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
                                        <th class="min-w-150px text-center">Mata Pelajaran</th>
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

<script>

    $( document ).ready(function() {
        getNilaiSiswa();
    });
    function getNilaiSiswa(){
        // var tahunAkademik = $("#tahunAkademik").val();
        var nisn = $('#nisn_get').val();
        var semester = $("#semester").val();

        var tahunAkademik = 6;
        
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
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->