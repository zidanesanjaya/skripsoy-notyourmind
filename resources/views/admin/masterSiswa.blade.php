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
						<li class="breadcrumb-item text-muted">Master Data Siswa</li>
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
							<span class="card-label fw-bold fs-3 mb-1">Data Siswa</span>
						</h3>
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#tambahDataSiswa">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								Tambah Data Siswa
							</a>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table id="datasiswa" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
								<thead>
									<tr class="fw-bold text-muted bg-light">
										<th class="px-5 min-w-20px">No.</th>
										<th class="ps-4 min-w-20px">NIS</th>
										<th class="min-w-150px w-300px rounded-start">NISN</th>
										<th class="min-w-70px">Nama Siswa</th>
										<th class="min-w-150px w-50px text-center">Aksi</th>
									</tr>
								</thead>
								<tbody id="listSiswa">
									<tr>
										<td class="px-5">1.</td>
										<td class="px-5">9925</td>
										<td>2104295256</td>
										<td>Aisyah Fatin Sholikah</td>
										<td class="text-center">
										<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editDataSiswa" data-id="${data.id}" onclick="">
											<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
											<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<a href="/deleteAnggota/${data.id}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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