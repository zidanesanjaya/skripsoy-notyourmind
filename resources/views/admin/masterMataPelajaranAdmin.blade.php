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
							<a href="{{ url('/dashboardAdmin') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Mata Pelajaran</li>
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
							<span class="card-label fw-bold fs-3 mb-1">Daftar Mata Pelajaran</span>
						</h3>
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light btn-active-success" data-bs-toggle="modal" data-bs-target="#inputTahunAkademik">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								Input Tahun Akademik
							</a>
						</div>
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#tambahMataPelajaran">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-3">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								Tambah Mata Pelajaran
							</a>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table id="datamatapelajaran" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
								<thead>
									<tr class="fw-bold text-muted bg-light">
										<th class="ps-4 min-w-150px w-300px rounded-start">Mata Pelajaran</th>
										<th class="min-w-25px">KKM</th>
										<th class="min-w-25px">Semester</th>
										<th class="min-w-125px">Guru</th>
										<th class="min-w-50px w-100px text-center">Tahun Akademik</th>
										<th class="min-w-150px w-50px text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($mataPelajaran as $key)
									<tr>
										<td class="px-5">{{$key->nama_mapel}}</td>
										<td>{{$key->kkm}}</td>
										<td class="px-5">{{$key->semester}}</td>
										<td>{{$key->nama_lengkap}}</td>
										<td class="text-center">{{$key->tahun_akademik}}</td>
										<td class="text-center">
											<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editMataPelajaran" onclick="editMapel({{$key->id}})">
												<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
														<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
											<a href="{{route('destroy.mapel', $key->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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


<!--begin::Modal - Tambah Mata Pelajaran-->
<div class="modal fade" id="tambahMataPelajaran" tabindex="-1" aria-hidden="true">
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
				<form id="tambahMataPelajaran_form" class="form" action="{{route('mapel.store')}}" method="post">
					@csrf
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Tambah Mata Pelajaran</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Nama Mata Pelajaran</span>
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Masukkan Nama Mata Pelajaran"></i>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Mata Pelajaran" name="nama_mapel" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Guru</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Guru" name="id_guru">
								<option value="">Pilih Guru...</option>
								@foreach($guru as $key)
								<option value="{{$key->id}}">{{$key->nama_lengkap}}</option>
								@endforeach
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Semester</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Semester" name="semester">
								<option value="">Pilih Semester...</option>
								<option value="Ganjil">Ganjil</option>
								<option value="Genap">Genap</option>
							</select>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<div class="col-md-6 fv-row">
							<label class="fs-6 fw-semibold mb-2">Tahun Akademik</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Tahun Akademik" name="id_tahun_akademik">
								<option value="">Pilih Tahun Akademik...</option>
								@foreach($tahunAkademik as $key)
								<option value="{{$key->id}}">{{$key->tahun_akademik}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Input Nilai KKM</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai KKM" name="kkm" />
						</div>
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="tambahMataPelajaran_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="tambahMataPelajaran_submit" class="btn btn-primary">
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
<!--end::Modal - Tambah Mata Pelajaran-->

<!--begin::Modal - Edit Mata Pelajaran-->
<div class="modal fade" id="editMataPelajaran" tabindex="-1" aria-hidden="true">
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
				<form id="editMataPelajaran_form" class="form" method="post" action="{{route('mapel.update' , 0)}}">
					@csrf
					@method('PATCH')
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Edit Mata Pelajaran</h1>
						<!--end::Title-->
					</div>
					<input type="hidden" name="id_mapel" id="id_mapel">
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Nama Mata Pelajaran</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Mata Pelajaran" name="nama_mapel" id="edit_mapel_name" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Guru</label>
							<select class="form-select form-select-solid" id="edit_guru" data-placeholder="Pilih Guru" name="id_guru">
								<option value="">Pilih Guru...</option>
								@foreach($guru as $key)
								<option value="{{$key->id}}">{{$key->nama_lengkap}}</option>
								@endforeach
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Semester</label>
							<select class="form-select form-select-solid" data-placeholder="Pilih Semester" id="edit_semester" name="semester">
								<option value="">Pilih Semester...</option>
								<option value="Ganjil">Ganjil</option>
								<option value="Genap">Genap</option>
							</select>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<div class="col-md-6 fv-row">
							<label class="fs-6 fw-semibold mb-2">Tahun Akademik</label>
							<select class="form-select form-select-solid" data-placeholder="Pilih Tahun Akademik" id="edit_tahun_akademik" name="id_tahun_akademik">
								@foreach($tahunAkademik AS $key)
								<option value="{{$key->id}}">{{$key->tahun_akademik}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Input Nilai KKM</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan Nilai KKM" name="kkm" id="edit_kkm" />
						</div>
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="editMataPelajaran_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="editMataPelajaran_submit" class="btn btn-primary">
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
<!--end::Modal - Edit Mata Pelajaran-->

<!--begin::Modal - Input Tahun Akademik-->
<div class="modal fade" id="inputTahunAkademik" tabindex="-1" aria-hidden="true">
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
				<form method="post" id="inputTahunAkademik_form" class="form" action="{{ route('store.tahun_akademik') }}">
					<!--begin::Heading-->
					@csrf
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Input Tahun Akademik</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8 justify-content-center">
						<!--begin::Col-->
						<div class="col-md-4 fv-row">
							<input type="text" class="form-control form-control-solid" placeholder="Tahun/Tahun" name="tahun_akademik" id="tahunAkademik" />
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Content-->
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<!--begin::Content container-->
						<div id="kt_app_content_container" class="app-container container-xxl">
							<!--begin::Tables Widget 11-->
							<div class="card mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold fs-3 mb-1">List Tahun Akademik</span>
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body py-3">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table id="tahunAkademik" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
											<thead>
												<tr class="fw-bold text-muted bg-light">
													<th class="ps-4 min-w-150px w-300px rounded-start">Tahun Akademik</th>
													<th class="min-w-150px w-50px text-center">Aksi</th>
												</tr>
											</thead>
											<tbody>

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
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="inputTahunAkademik_cancel" class="btn btn-light me-3">Cancel</button>
						<button id="inputTahunAkademik_submit" type="submit" class="btn btn-primary">
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
<!--end::Modal - Input Tahun Akademik-->

<script>
	$(document).ready(function() {
		loadTable();
	});

	function editMapel(id) {
		$.ajax({
			url: '/get-mapel/' + id,
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				// Sukses, data tersedia di variabel 'data'
				$("#id_mapel").val(data.id);
				$("#edit_mapel_name").val(data.nama_mapel);
				$("#edit_guru").val(data.id_guru);
				$("#edit_semester").val(data.semester);
				$("#edit_tahun_akademik").val(data.id_tahun_akademik);

			},
			error: function(xhr, status, error) {
				// Terjadi kesalahan dalam permintaan
				console.error('Gagal mengambil data. Status:', status, 'Error:', error);
			}
		});
	}

	document.getElementById('inputTahunAkademik_submit').addEventListener('click', function(e) {
		e.preventDefault();

		var tahunAkademik = document.getElementById('tahunAkademik').value;

		axios.post('{{ route("store.tahun_akademik") }}', {
				tahun_akademik: tahunAkademik,
			})
			.then(function(response) {
				loadTable();
				location.reload(); // Me-refresh halaman setelah POST berhasil
			})
			.catch(function(error) {
				console.log(error.response.data);
			});
	});


	function loadTable() {
		$.ajax({
			url: '/tahun_akademik/index',
			method: 'GET',
			dataType: 'json',
			success: function(data) {

				console.log(data);
				var tbody = $('#tahunAkademik tbody');
				tbody.empty();
				for (var i = 0; i < data.length; i++) {
					var row = '<tr>' +
						'<td class="px-5">' + data[i].tahun_akademik + '</td>' +
						'<td class="text-center"><a href="tahun_akademik/destroy/' + data[i].id + '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"><!--begin::Svg Icon | path: icons/duotune/general/gen027.svg--><span class="svg-icon svg-icon-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" /><path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" /><path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" /></svg></span><!--end::Svg Icon--></a></td>' +
						'</tr>'
					tbody.append(row);
				}
			},
			error: function(xhr, status, error) {
				console.error(error);
			}
		});
	}
</script>
@endsection