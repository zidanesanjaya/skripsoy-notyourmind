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
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hello (name as guru)</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
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
@endsection