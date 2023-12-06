@extends('layouts.app')

@section('content')

@if(session('current_role') === 'guru')
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
					<!--begin::Title-->
					<h2>
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello {{Auth::user()->username}} </h1> Guru
					</h2>
					<!--end::Title-->
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
						<li class="breadcrumb-item text-muted">Dashboards</li>
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
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #71ce7d;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Data </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Siswa</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/nilai/create')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #4FC0D0;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Input </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Nilai Siswa</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/nilai')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
@elseif(session('current_role') === 'wali_kelas')
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
					<!--begin::Title-->
					<h2>
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello {{Auth::user()->username}} </h1> Wali Kelas
					</h2>
					<!--end::Title-->
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
						<li class="breadcrumb-item text-muted">Dashboards</li>
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
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #71ce7d;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Data </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Siswa Kelas</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/data-kelas')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #4FC0D0;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Data </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Nilai Kelas</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/data-nilai-siswa')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #5e1cf8;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Leger </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Siswa</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/leger-nilai')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
@elseif(session('current_role') === 'siswa')
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
					<!--begin::Title-->
					<h2>
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello {{Auth::user()->username}} </h1> Siswa
					</h2>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="{{ url('/dashboardSiswaOrangTua') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Dashboards</li>
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
				<!--begin::details View-->
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Profil Siswa</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Nama Peserta Didik</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$detailsiswa->nama_lengkap}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Nomor Induk Siswa (NIS)</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$detailsiswa->nis}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Nomor Induk Siswa Nasional (NISN)</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$detailsiswa->nisn}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Tempat, Tanggal Lahir</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">{{$detailsiswa->tempat}} , {{$detailsiswa->tanggal_lahir}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Jenis Kelamin</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">{{$detailsiswa->jenis_kelamin}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Agama</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">{{$detailsiswa->agama}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Alamat</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$detailsiswa->alamat_siswa}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Nomor Telepon/Hp</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$detailsiswa->no_hp}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Kelas</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-semibold text-gray-800 fs-6">{{$detailsiswa->tingkat}} {{$detailsiswa->kelas}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Notice-->
					
						<!--end::Notice-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::details View-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
@elseif(session('current_role') === 'kepala_sekolah')
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
					<!--begin::Title-->
					<h2>
						<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello {{Auth::user()->username}} </h1> Kepala Sekolah
					</h2>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="{{ url('/dashboardKepalaSekolah') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Dashboards</li>
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
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #71ce7d;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Data </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Nilai Siswa</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/dataNilaiSiswaKepalaSekolah')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #4FC0D0;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">Data </span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Guru</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/dataGuruKepalaSekolah')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
@elseif(session('current_role') === 'admin')
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
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello Admin</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="{{ route('index.dashboard') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Dashboards</li>
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
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #71ce7d;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Header-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-2 text-white fw-bold me-6">Jumlah Murid</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">
										@isset($count_siswa)
										{{ $count_siswa }}
										@endisset
									</span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Murid</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/siswa')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #4FC0D0;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Header-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-2 text-white fw-bold me-6">Jumlah Guru</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">
										@isset($count_guru)
										{{ $count_guru }}
										@endisset
									</span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Guru</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/karyawan')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xl-4">
						<!--begin::Card widget 3-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #164B60;background-image:url('/media/svg/shapes/wave-bg-dark.svg'); background-size: auto;">
							<!--begin::Header-->
							<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
								<!--begin::Progress-->
								<div class="fw-bold text-white py-2">
									<span class="fs-2 text-white fw-bold me-6">Total Mata Pelajaran</span>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end mb-3">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<span class="fs-4hx text-white fw-bold me-6">
										@isset($count_matpel)
										{{ $count_matpel }}
										@endisset
									</span>
									<div class="fw-bold fs-1 text-white">
										<span class="d-block">Mata Pelajaran</span>
									</div>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<a href="{{url('/mapel')}}">
								<div class="card-footer d-flex" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
									<span class="text-white">Selengkapnya</span>
									<span class="material-symbols-outlined text-white ms-auto bd-highlight">arrow_right_alt</span>
								</div>
							</a>
							<!--end::Card footer-->
						</div>
						<!--end::Card widget 3-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endif
@endsection