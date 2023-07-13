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
							<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
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
            
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->


<!--begin::Modal - Tambah Data Siswa-->
<div class="modal fade" id="tambahDataSiswa" tabindex="-1" aria-hidden="true">
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
				<form id="tambahDataSiswa_form" method="post" class="form" action="">
					@csrf
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Tambah Data Siswa</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nomor Induk Siswa</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan NIS" name="nis" />
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nomor Induk Siswa Nasional</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan NISN" name="nisn" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Nama Siswa</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Siswa" name="email" />
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="tambahDataSiswa_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="tambahDataSiswa_submit" class="btn btn-primary">
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
<!--end::Modal - Tambah Data Siswa-->

<!--begin::Modal - Edit Data Siswa-->
<div class="modal fade" id="editDataSiswa" tabindex="-1" aria-hidden="true">
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
				<form id="editDataSiswa_form" method="post" class="form">
					@csrf
					@method('put')
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Edit Data Siswa</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nomor Induk Siswa</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan NIS" name="nis" />
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Nomor Induk Siswa Nasional</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan NISN" name="nisn" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Nama Siswa</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Siswa" name="email" />
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="editDataSiswa_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="editDataSiswa_submit" class="btn btn-primary">
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
<!--end::Modal - Edit Data Siswa-->
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>