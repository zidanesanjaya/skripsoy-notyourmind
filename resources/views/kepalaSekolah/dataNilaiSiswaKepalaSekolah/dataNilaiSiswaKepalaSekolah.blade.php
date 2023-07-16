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
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Tables Widget 11-->
				<div class="card mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bold fs-3 mb-1">Data Siswa</span>
						</h3>
						<!--begin::Filter group-->
						<div class="d-flex flex-column mb-8">
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Kelas">
								<option value=""></option>
								<option value="All">All</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
							</select>
						</div>
						<!--end::Filter group-->
						<!--begin::Filter group-->
						<div class="d-flex flex-column mb-8">
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Fase" data-kt-ecommerce-order-filter="status">
								<option value=""></option>
								<option value="All">All</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
							</select>
						</div>
						<!--end::Filter group-->
						<!--begin::Filter group-->
						<div class="d-flex flex-column mb-8">
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Semester">
								<option value=""></option>
								<option value="All">All</option>
								<option value="Ganjil">Ganjil</option>
								<option value="Genap">Genap</option>
							</select>
						</div>
						<!--end::Filter group-->
						<!--begin::Filter group-->
						<div class="d-flex flex-column mb-8">
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Tahun Akademik" data-kt-ecommerce-order-filter="status">
								<option value=""></option>
								<option value="All">All</option>
								<option value="2022/2023">2022/2023</option>
								<option value="2023/2024">2023/2024</option>
								<option value="2024/2025">2024/2025</option>
							</select>
						</div>
						<!--end::Filter group-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table id="dataNilaiSiswaKepalaSekolah" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
								<thead>
									<tr class="fw-bold text-muted bg-light">
										<th class="px-5 min-w-20px text-center">No.</th>
										<th class="ps-4 min-w-20px text-center">NIS</th>
										<th class="min-w-50px w-100px rounded-start text-center">NISN</th>
										<th class="min-w-100px w-200px text-center">Nama Siswa</th>
										<th class="min-w-50px text-center">Kelas</th>
										<th class="min-w-50px text-center">Fase</th>
										<th class="min-w-50px text-center">Semester</th>
										<th class="min-w-70px text-center">Tahun Akademik</th>
										<th class="min-w-150px w-50px text-center">Nilai</th>
									</tr>
								</thead>
								<tbody id="listDataNilaiSiswaKepalaSekolah">
									<tr>
										<td class="px-5 text-center">1.</td>
										<td class="px-5 text-center">9925</td>
										<td class="text-center">2104295256</td>
										<td class="text-center">Aisyah Fatin Sholikah</td>
										<td class="px-5 text-center">7</td>
										<td class="px-5 text-center">C</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2022/2023</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="px-5 text-center">2.</td>
										<td class="px-5 text-center">9927</td>
										<td class="text-center">3092008099</td>
										<td class="text-center">Asmira Dwi Ramadhani</td>
										<td class="px-5 text-center">8</td>
										<td class="px-5 text-center">D</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2023/2024</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="px-5 text-center">3.</td>
										<td class="px-5 text-center">9934</td>
										<td class="text-center">3091363191</td>
										<td class="text-center">Jaisy Naylan Syahidah</td>
										<td class="px-5 text-center">9</td>
										<td class="px-5 text-center">E</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2022/2023</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="px-5 text-center">4.</td>
										<td class="px-5 text-center">9936</td>
										<td class="text-center">0095428847</td>
										<td class="text-center">Khaira Aleeza</td>
										<td class="px-5 text-center">8</td>
										<td class="px-5 text-center">F</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2024/2025</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="px-5 text-center">5.</td>
										<td class="px-5 text-center">9940</td>
										<td class="text-center">3090524821</td>
										<td class="text-center">Meilina Mouza Almira Wibowo</td>
										<td class="px-5 text-center">7</td>
										<td class="px-5 text-center">A</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2023/2024</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="px-5 text-center">6.</td>
										<td class="px-5 text-center">9947</td>
										<td class="text-center">0108800031</td>
										<td class="text-center">Noura Kamila</td>
										<td class="px-5 text-center">9</td>
										<td class="px-5 text-center">B</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2023/2024</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-Success" data-bs-toggle="modal" data-bs-target="#nilaiKeseluruhanSiswaKepalaSekolah">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
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

<!--begin::Modal Nilai Keseluruhan-->
<div class="modal fade" id="nilaiKeseluruhanSiswaKepalaSekolah" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal body-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-md-5">
						<h3 class="card-title align-items-start flex-column">
							Nilai Keseluruhan
							<span class="card-label fw-bold fs-3 mb-1 mt-5">Aisyah Fatin Sholikah</span>
						</h3>
						<div class="row">
							<div class="col-4">
								<h3 class="card-title align-items-start flex-column">
									Jumlah Nilai
									<div class="btn btn-sm fw-bold btn-primary">1102.7</div>
								</h3>
							</div>
							<div class="col-8">
								<h3 class="card-title align-items-start flex-column px-10">
									Rata - Rata Nilai
									<div class="btn btn-sm fw-bold btn-primary">84.82</div>
								</h3>
							</div>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-175px">Mata Pelajaran</th>
									<th class="min-w-100px text-center">Nilai</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-semibold text-gray-600">
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
								<tr>
									<td class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td class="text-gray-800 text-hover-primary text-center">89.44642857</td>
								</tr>
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Products-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal Nilai Keseluruhan-->

<!-- Begin::Sorting Tabel Data Nilai Siswa Kepala Sekolah -->
<script>
	var dataTable = $('.datatable').DataTable({
		buttons: [{
			extend: 'excel',
			text: 'Export to Excel',
			className: 'btn-sm btn-flat',
		}, ],
		dom: "<'row'<'col-md-3'l><'col-md-6 text-center'B><'col-md-3'f>>" +
			"<'row'<'col-md-12'tr>>" +
			"<'row'<'col-md-5'i><'col-md-7'p>>",
		drawCallback: function(settings) {
			if (!$('.datatable').parent().hasClass('table-responsive')) {
				$('.datatable').wrap("<div class='table-responsive'></div>");
			}
		}
	});

	dataTable.columns().every(function() {
		var column = this;

		$('.filter-column', this.footer()).on('keyup change', function() {
			if (column.search() !== this.value) {
				column
					.search(this.value && `^${this.value}$`, true, false)
					.draw();
				this.focus();
			}
		});
	});
</script>
<!-- End::Sorting Tabel Data Nilai Siswa Kepala Sekolah -->
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<!-- Responsive extension -->
<script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
<!-- Buttons extension -->
<script src="//cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<!-- end::Link Javascript -->