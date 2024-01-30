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
                    <div class="col-sm-10 col-xs-10">
                        <div class="card mb-5">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Rapor Penguatan Profil Pelajar Pancasila</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9">
                                        <select class="form-select form-select-solid" id="list_proyek" onchange="getPancasila();">
                                            @foreach($pancasila AS $data)
                                            <option value="{{$data->id}}">{{$data->nama_project}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <a href="{{ url('/keterangan-siswa') }}" class="btn btn-sm btn-light btn-active-danger">
                                                Kembali 
                                            </a>
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
                    <div class="col-sm-2 col-xs-2">
                        <div class="card mb-5">
                            <!--begin::Header 2-->
                            <div class="card-header border-0 pt-5">
                                <div class="mb-1">
                                    <!--begin::Input-->
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pilih Rapor                                     
                                        </button>
                                        <ul class="dropdown-menu form-select-solid" aria-labelledby="dropdownMenuButton">
                                            @if($detail_siswa->is_show == 1)
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
                            <!--end::Header 2-->
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
                    <div class="modal-content">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Modal body-->
                            <input type="hidden" id="nisn_get" value="{{$nisn}}">
                            <input type="hidden" value="{{$getTahunAkademik}}" id="tahunAkademik">
                            <input type="hidden" value="{{$getSemester}}" id="semester">

                            <div class="mt-10">
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
                                                    <textarea name="catatan" disabled class="form-control form-control-solid" placeholder="Isi Catatan Proses" onkeyup="post_pancasila(1);"></textarea>
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
                                </form>
                            </div>
                            <!--end::Modal body-->
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            getPancasila();
        });

        function getPancasila(){
            $("#table_pancasila").empty();
            $("#nama_proyek").empty();
            $("#deskripsi_pancasila").empty();

            var nisn =  $("#nisn_get").val();;
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

                    pancasila1_step1 = response[0]?.nilai_pancasila1 ?? '';
                    pancasila2_step1 = response[0]?.nilai_pancasila2 ?? '';
                    pancasila3_step1 = response[0]?.nilai_pancasila3 ?? '';

                    if(response[1]){
                        pancasila1_step2 = response[1]?.nilai_pancasila1 ?? '';
                        pancasila2_step2 = response[1]?.nilai_pancasila2 ?? '';
                        pancasila3_step2 = response[1]?.nilai_pancasila3 ?? '';
                    }
                    

                    desc_pancasila1_step1 = response[0]?.desc_pancasila1 ?? '';
                    desc_pancasila2_step1 = response[0]?.desc_pancasila2 ?? '';
                    desc_pancasila3_step1 = response[0]?.desc_pancasila3 ?? '';

                    if(response[1]){
                        desc_pancasila1_step2 = response[1]?.desc_pancasila1 ?? '';
                        desc_pancasila2_step2 = response[1]?.desc_pancasila2 ?? '';
                        desc_pancasila3_step2 = response[1]?.desc_pancasila3 ?? '';
                    }
                
                    catatan = response[0]?.catatan ?? '';
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

                    console.log(response);
                    id_pancasila = document.querySelector('select[id="list_proyek"]').value;
                    const foundObject = Object.values(response).find(item => item.id == id_pancasila);

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
                                                '<textarea name="desc_pancasila1_step1" disabled class="form-control form-control-solid" disabled placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step1" disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step1" disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step1" disabled value="BSH">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step1"  disabled value="SB">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td class="text-gray-800 px-3">'+
                                                '<textarea name="desc_pancasila1_step2" disabled class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step2" disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step2" disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step2" value="BSH" disabled>'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila1_step2"  disabled value="SB">'+
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
                                                '<textarea name="desc_pancasila2_step1" disabled class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step1"  disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step1"  disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step1" disabled value="BSH">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step1" disabled value="SB">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td class="text-gray-800 px-3">'+
                                                '<textarea name="desc_pancasila2_step2" disabled class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step2" disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step2" disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step2" disabled value="BSH">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila2_step2" disabled value="SB">'+
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
                                                '<textarea name="desc_pancasila3_step1" disabled class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step1" disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step1" disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step1" disabled value="BSH">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step1" disabled value="SB">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td class="text-gray-800 px-3">'+
                                                '<textarea name="desc_pancasila3_step2" disabled class="form-control form-control-solid" placeholder="Isi Deskripsi Nilai Siswa"></textarea>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step2" disabled value="BB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step2" disabled value="MB">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center table-active">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step2" disabled value="BSH">'+
                                                '</div>'+
                                            '</td>'+
                                            '<td class="text-center">'+
                                                '<div class="form-check form-check-lg form-check-custom form-check-solid d-flex justify-content-center">'+
                                                    '<input class="form-check-input" type="radio" name="pancasila3_step2" disabled value="SB">'+
                                                '</div>'+
                                            '</td>'+
                                        '</tr>';

                        $("#table_pancasila").append(sub_proyek3);
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


                    $("textarea[name='desc_pancasila1_step2']").val(desc_pancasila1_step2);
                    $("textarea[name='desc_pancasila2_step2']").val(desc_pancasila2_step2);
                    $("textarea[name='desc_pancasila3_step2']").val(desc_pancasila3_step2);

                    $("input[name='pancasila1_step2']:checked").val();        
                    $("input[name='pancasila2_step2']:checked").val();
                    $("input[name='pancasila3_step2']:checked").val();
                }
            });
        }
    </script>
    <!-- begin::Link Javascript -->
    <!-- end::Link Javascript -->