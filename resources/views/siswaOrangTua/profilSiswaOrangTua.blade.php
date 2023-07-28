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
                        <li class="breadcrumb-item text-muted">Profil Siswa</li>
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
                                <span class="card-label fw-bold fs-3 mb-1">Profil Siswa</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!-- end::row header -->
                    <!-- begin::Row Toolbar -->
                    <!--begin::Header-->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-sm-6">
                            <div class="card-header border-0 pt-5 w-20">
                                <div class="mb-1">
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Kelas</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
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
                                        <select class="form-select form-select-solid">
                                            <option value="">Pilih Semester</option>
                                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                            <option value="Bahasa Arab">Bahasa Arab</option>
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
                                        <th class="min-w-20px w-20px text-center px-2">No.</th>
                                        <th class="min-w-75px w-100px text-center">Mata Pelajaran</th>
                                        <th class="min-w-30px w-75px text-center">Nilai Akhir</th>
                                        <th class="min-w-50px w-110px text-center">Capaian Kompetensi</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    <tr>
                                        <td class="text-center px-2">1.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
                                        <td class="text-gray-800 text-hover-primary text-center">89</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan tentang materi beriman kepada Allah SWT
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu pendampingan dalam materi perilaku jujur, amanah, tabligh fathonah
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">2.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Kewarganegaraan</td>
                                        <td class="text-gray-800 text-hover-primary text-center">86</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan pemahaman terhadap Norma dan UUD NRI Tahun 1945 dan mampu menerapkan dalam kehiduan sehari-hari
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam menjelaskan kelahiran Pancasila
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">3.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Indonesia</td>
                                        <td class="text-gray-800 text-hover-primary text-center">82</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan kemampuan untuk mendiskusikan unsur intrinsik, mengenali majas, dan berlatih menyajikan gagasannya dengan menulis cerita fantasi sederhana
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam mengeskpresikan ide melalui latihan menulis puisi rakyat
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">4.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Matematika</td>
                                        <td class="text-gray-800 text-hover-primary text-center">79</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik dalam mengoperasikan bilangan asli dan bilangan bulat
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bantuan dalam menentukan himpunan penyelesaian pada pertidaksamaan linear satu variabel
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">5.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Alam</td>
                                        <td class="text-gray-800 text-hover-primary text-center">82</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik daam melakukan identifikasi sifat dan karakteristik zat secara kolaboratif, membedakan perubahan fisik dan kimia, melakukan pemisahan campuran sederhana
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam melakukan pengukuran panjang, waktu, dan massa secara kolaboratif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">6.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Sosial</td>
                                        <td class="text-gray-800 text-hover-primary text-center">82</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik dalam menjelaskan ciri khas kehidupan manusia pra aksara dan membandingkan dengan manusia modern jaman sekarang
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam membuat pohon silsiah keluarga dari pihak ayah dan ibu
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">7.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Inggris</td>
                                        <td class="text-gray-800 text-hover-primary text-center">82</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik dalam menyapa, memperkenalkan diri, dan menyatakan waktu dalam Bahasa Inggris
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam memperkanalkan orang lain dan mengidentifikasi benda di sekitarnya
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">8.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Seni Budaya</td>
                                        <td class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Sangat memahami tentang unsur-unsur nada
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu pendampingan dalam memahami unsur-unsur nada
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">9.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
                                        <td class="text-gray-800 text-hover-primary text-center">83</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik dalam materi olahraga bola
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu pendampingan dalam memahami dan mempraktikkan materi pembelajaran bola basket dan perlu pembimbingan lebih lanjut agar kemampuan tersebut dikuasai secara konsisten
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">10.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Teknologi Ilmu Komputer</td>
                                        <td class="text-gray-800 text-hover-primary text-center">85</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan dalam memahami sistem operasi dan juga jaringan komputer
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam melakukan perakitan komputer
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">11.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Jawa</td>
                                        <td class="text-gray-800 text-hover-primary text-center">83</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan dalam memahami struktur teks profie tokoh dengan baik
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu bimbingan dalam penggunaan unggah-ungguh basa dan menjabarkan struktur cerita wayang
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">12.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Bahasa Arab</td>
                                        <td class="text-gray-800 text-hover-primary text-center">93</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik dalam melakukan percakapan tentang At-Ta'aaruf (Perkenalan)
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu pendampingan dalam menulis dan membaca teks tentang Fil Fashli (di dalam kelas )
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center px-2">13.</td>
                                        <td class="text-gray-800 text-hover-primary fw-bold">Kemuhammadiyahan</td>
                                        <td class="text-gray-800 text-hover-primary text-center">88</td>
                                        <td class="text-gray-800 fw-bold">
                                            <div class="row">
                                                Menunjukkan penguasaan yang baik tentang sejarah hidup dan kepribadian tokoh Muhammadiyah
                                            </div>
                                            <hr>
                                            <div class="row">
                                                Perlu pendampingan dalam memahami Muhammadiyah sebagai gerakan pendidikan
                                            </div>
                                        </td>
                                    </tr>
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
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->