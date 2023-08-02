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
							<a href="{{ url('/dashboardKepalaSekolah') }}" class="text-muted text-hover-primary text-center">Home</a>
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
						<!--begin::Filter menu-->
						<div class="m-0">
							<!--begin::Menu toggle-->
							<div class="btn btn-sm btn-flex bg-primary btn-color-white btn-active-color-white fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
								<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Filter</div>
							<!--end::Menu toggle-->
							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_633e6e070bf4a">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 text-dark fw-bold">Pilih Filter</div>
								</div>
								<!--end::Header-->
								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->
								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<div class="row">
											<div class="col-3">
												<!--begin::Label-->
												<label class="form-label fw-semibold py-4">Kelas:</label>
												<!--end::Label-->
											</div>
											<div class="col-9">
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Kelas" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
														<option value=""></option>
														<option value="Semua Kelas">Semua Kelas</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<div class="row">
											<div class="col-3">
												<!--begin::Label-->
												<label class="form-label fw-semibold py-4">Fase:</label>
												<!--end::Label-->
											</div>
											<div class="col-9">
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Fase" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
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
												<!--end::Input-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<div class="row">
											<div class="col-3">
												<!--begin::Label-->
												<label class="form-label fw-semibold py-4">Semester:</label>
												<!--end::Label-->
											</div>
											<div class="col-9">
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Semester" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
														<option value=""></option>
														<option value="All">All</option>
														<option value="Ganjil">Ganjil</option>
														<option value="Genap">Genap</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<div class="row">
											<div class="col-3">
												<!--begin::Label-->
												<label class="form-label fw-semibold">Tahun Akademik:</label>
												<!--end::Label-->
											</div>
											<div class="col-9">
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Tahun Akademik" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
														<option value=""></option>
														<option value="All">All</option>
														<option value="2022/2023">2022/2023</option>
														<option value="2023/2024">2023/2024</option>
														<option value="2024/2025">2024/2025</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1-->
						</div>
						<!--end::Filter menu-->
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
										<th class="px-5 min-w-20px text-center text-nowrap">No.</th>
										<th class="ps-4 min-w-20px text-center text-nowrap">NIS</th>
										<th class="min-w-50px w-100px rounded-start text-center text-nowrap">NISN</th>
										<th class="min-w-100px w-200px text-center text-nowrap">Nama Siswa</th>
										<th class="min-w-50px text-center text-nowrap">Kelas</th>
										<th class="min-w-50px text-center text-nowrap">Fase</th>
										<th class="min-w-50px text-center text-nowrap">Semester</th>
										<th class="min-w-70px text-center text-nowrap">Tahun Akademik</th>
										<th class="min-w-150px w-50px text-center text-nowrap">Nilai</th>
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
	<div class="modal-dialog modal-dialog-centered mw-md-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal body-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-md-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bold fs-3 mb-1 mt-5">Nilai Keseluruhan</span>
						</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="table-responsive">
							<table>
								<tbody>
									<tr>
										<td>Nama Peserta Didik</td>
										<td class="px-5">: Aisyah Fatin Sholikah</td>
										<td class="px-15">Kelas</td>
										<td>: 7</td>
									</tr>
									<tr>
										<td>NISN</td>
										<td class="px-5">: 2104295256</td>
										<td class="px-15">Fase</td>
										<td>: D</td>
									</tr>
									<tr>
										<td>Sekolah</td>
										<td class="px-5">: SMP Muhammadiyah 1 Malang</td>
										<td class="px-15">Semester</td>
										<td>: Ganjil</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
										<td class="px-15">Tahun Pelajaran</td>
										<td>: 2022/2023</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row justify-content-around">
							<div class="row">
								<div class="col-6">
									<h3 class="card-title align-items-start flex-column">
										Jumlah Nilai
									</h3>
								</div>
								<div class="col-6">
									<h3 class="card-title align-items-start flex-column">
										Rata - Rata Nilai
									</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="btn btn-sm fw-bold btn-primary">1102.7</div>
								</div>
								<div class="col-6">
									<div class="btn btn-sm fw-bold btn-success">84.82</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5 table-striped" id="kt_ecommerce_sales_table" style="cursor:context-menu">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-150px">Mata Pelajaran</th>
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
									<th class="min-w-50px w-100px text-center">NA Sumatif Lingkup Materi</th>
									<th class="min-w-50px text-center">PTS</th>
									<th class="min-w-50px text-center">PAS</th>
									<th class="min-w-50px text-center">NA Sumatif Akhir Semester</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-semibold text-gray-600">
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Agama islam</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Kewarganegaraan</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">80</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">86</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">83.7</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">91</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Indonesia</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">86</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">86</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">85.2856</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">82</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">75</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">78.5</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Matematika</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Alam</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Ilmu Pengetahuan Sosial</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Inggris</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Seni Budaya</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Teknologi Ilmu Komputer</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Jawa</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Bahasa Arab</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
								</tr>
								<tr>
									<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">Kemuhammadiyahan</td>
									<td id="sumatif1" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif2" class="text-gray-800 text-hover-primary text-center">89</td>
									<td id="sumatif3" class="text-gray-800 text-hover-primary text-center">100</td>
									<td id="sumatif4" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="sumatif5" class="text-gray-800 text-hover-primary text-center">87</td>
									<td id="sumatif6" class="text-gray-800 text-hover-primary text-center">95</td>
									<td id="sumatif7" class="text-gray-800 text-hover-primary text-center">88</td>
									<td id="sumatif8" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif9" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="sumatif10" class="text-gray-800 text-hover-primary text-center"></td>
									<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">90.143</td>
									<td id="pts" class="text-gray-800 text-hover-primary text-center">92.5</td>
									<td id="pas" class="text-gray-800 text-hover-primary text-center">85</td>
									<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">88.75</td>
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

<!--begin::Modal Nilai Rapor-->
<div class="modal fade" id="nilaiRaporSiswaKepalaSekolah" tabindex="-1" aria-hidden="true">
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
							<span class="card-label fw-bold fs-3 mb-1 mt-5">Nilai Rapor</span>
						</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="table-responsive">
							<table>
								<tbody>
									<tr>
										<td>Nama Peserta Didik</td>
										<td class="px-5">: Aisyah Fatin Sholikah</td>
										<td class="px-15">Kelas</td>
										<td>: 7</td>
									</tr>
									<tr>
										<td>NISN</td>
										<td class="px-5">: 2104295256</td>
										<td class="px-15">Fase</td>
										<td>: D</td>
									</tr>
									<tr>
										<td>Sekolah</td>
										<td class="px-5">: SMP Muhammadiyah 1 Malang</td>
										<td class="px-15">Semester</td>
										<td>: Ganjil</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
										<td class="px-15">Tahun Pelajaran</td>
										<td>: 2022/2023</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0" style="overflow-x:auto; border-collapse: collapse;">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5 table-striped" id="kt_ecommerce_sales_table" style="cursor:context-menu">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-20px w-20px text-center">No.</th>
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
									<td class="text-center">1.</td>
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
									<td class="text-center">2.</td>
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
									<td class="text-center">3.</td>
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
									<td class="text-center">4.</td>
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
									<td class="text-center">5.</td>
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
									<td class="text-center">6.</td>
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
									<td class="text-center">7.</td>
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
									<td class="text-center">8.</td>
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
									<td class="text-center">9.</td>
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
									<td class="text-center">10.</td>
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
									<td class="text-center">11.</td>
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
									<td class="text-center">12.</td>
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
									<td class="text-center">13.</td>
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
<!--end::Modal Nilai Rapor-->
@endsection
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->