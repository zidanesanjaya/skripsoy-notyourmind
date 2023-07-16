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
							<select id="filterBy" class="form-select form-select-solid" data-control="" data-hide-search="true" data-placeholder="Filter Berdasarkan" onchange="filterData()">
								<option value="">Filter Berdasarkan</option>
								<option value="Kelas">Kelas</option>
								<option value="Semester">Semester</option>
								<option value="Tahun Akademik">Tahun Akademik</option>
							</select>
						</div>
						<!--end::Filter group-->
						<!--begin::Filter group-->
						<div class="d-flex flex-column mb-8">
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Filter Berdasarkan" data-kt-ecommerce-order-filter="status">
								<option value=""></option>
								<option value="all">All</option>
								<option value="Kelas">Kelas</option>
								<option value="Semester">Semester</option>
								<option value="Tahun Akademik">Tahun Akademik</option>
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
							<table id="datasiswa" class="table align-middle gs-0 gy-4 table-striped" style="width:100%">
								<thead>
									<tr class="fw-bold text-muted bg-light">
										<th class="px-5 min-w-20px text-center">No.</th>
										<th class="ps-4 min-w-20px text-center">NIS</th>
										<th class="min-w-50px w-100px rounded-start text-center">NISN</th>
										<th class="min-w-100px w-200px text-center">Nama Siswa</th>
										<th class="min-w-50px text-center">Kelas</th>
										<th class="min-w-50px text-center">Semester</th>
										<th class="min-w-70px text-center">Tahun Akademik</th>
										<th class="min-w-150px w-50px text-center">Aksi</th>
									</tr>
								</thead>
								<tbody id="listSiswa">
									<tr>
										<td class="px-5 text-center">1.</td>
										<td class="px-5 text-center">9925</td>
										<td class="text-center">2104295256</td>
										<td class="text-center">Aisyah Fatin Sholikah</td>
										<td class="px-5 text-center" data-order="Kelas">7C</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2022/2023</td>
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
									<tr>
										<td class="px-5 text-center">2.</td>
										<td class="px-5 text-center">9927</td>
										<td class="text-center">3092008099</td>
										<td class="text-center">Asmira Dwi Ramadhani</td>
										<td class="px-5 text-center data-order=" Kelas"">8D</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2023/2024</td>
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
									<tr>
										<td class="px-5 text-center">3.</td>
										<td class="px-5 text-center">9934</td>
										<td class="text-center">3091363191</td>
										<td class="text-center">Jaisy Naylan Syahidah</td>
										<td class="px-5 text-center" data-order="Kelas">9E</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2022/2023</td>
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
									<tr>
										<td class="px-5 text-center">4.</td>
										<td class="px-5 text-center">9936</td>
										<td class="text-center">0095428847</td>
										<td class="text-center">Khaira Aleeza</td>
										<td class="px-5 text-center" data-order="Kelas">8F</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2024/2025</td>
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
									<tr>
										<td class="px-5 text-center">5.</td>
										<td class="px-5 text-center">9940</td>
										<td class="text-center">3090524821</td>
										<td class="text-center">Meilina Mouza Almira Wibowo</td>
										<td class="px-5 text-center" data-order="Kelas">7A</td>
										<td class="px-5 text-center">Ganjil</td>
										<td class="px-5 text-center">2023/2024</td>
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
									<tr>
										<td class="px-5 text-center">6.</td>
										<td class="px-5 text-center">9947</td>
										<td class="text-center">0108800031</td>
										<td class="text-center">Noura Kamila</td>
										<td class="px-5 text-center" data-order="Kelas">9B</td>
										<td class="px-5 text-center">Genap</td>
										<td class="px-5 text-center">2023/2024</td>
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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Orders Listing</h1>
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
						<li class="breadcrumb-item text-muted">eCommerce</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Sales</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<!--begin::Filter menu-->
					<div class="m-0">
						<!--begin::Menu toggle-->
						<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
							<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->Filter</a>
						<!--end::Menu toggle-->
						<!--begin::Menu 1-->
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_633e6e070bf4a">
							<!--begin::Header-->
							<div class="px-7 py-5">
								<div class="fs-5 text-dark fw-bold">Filter Options</div>
							</div>
							<!--end::Header-->
							<!--begin::Menu separator-->
							<div class="separator border-gray-200"></div>
							<!--end::Menu separator-->
							<!--begin::Form-->
							<div class="px-7 py-5">
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Status:</label>
									<!--end::Label-->
									<!--begin::Input-->
									<div>
										<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
											<option></option>
											<option value="1">Approved</option>
											<option value="2">Pending</option>
											<option value="2">In Process</option>
											<option value="2">Rejected</option>
										</select>
									</div>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Member Type:</label>
									<!--end::Label-->
									<!--begin::Options-->
									<div class="d-flex">
										<!--begin::Options-->
										<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" value="1" />
											<span class="form-check-label">Author</span>
										</label>
										<!--end::Options-->
										<!--begin::Options-->
										<label class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="2" checked="checked" />
											<span class="form-check-label">Customer</span>
										</label>
										<!--end::Options-->
									</div>
									<!--end::Options-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Notifications:</label>
									<!--end::Label-->
									<!--begin::Switch-->
									<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
										<label class="form-check-label">Enabled</label>
									</div>
									<!--end::Switch-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex justify-content-end">
									<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
									<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Form-->
						</div>
						<!--end::Menu 1-->
					</div>
					<!--end::Filter menu-->
					<!--begin::Secondary button-->
					<!--end::Secondary button-->
					<!--begin::Primary button-->
					<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
					<!--end::Primary button-->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-1 position-absolute ms-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order" />
							</div>
							<!--end::Search-->
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
							<!--begin::Flatpickr-->
							<div class="input-group w-250px">
								<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
								<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
									<span class="svg-icon svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
											<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
							</div>
							<!--end::Flatpickr-->
							<div class="w-100 mw-150px">
								<!--begin::Select2-->
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
									<option></option>
									<option value="all">All</option>
									<option value="Cancelled">Cancelled</option>
									<option value="Completed">Completed</option>
									<option value="Denied">Denied</option>
									<option value="Expired">Expired</option>
									<option value="Failed">Failed</option>
									<option value="Pending">Pending</option>
									<option value="Processing">Processing</option>
									<option value="Refunded">Refunded</option>
									<option value="Delivered">Delivered</option>
									<option value="Delivering">Delivering</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--begin::Add product-->
							<a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Order</a>
							<!--end::Add product-->
						</div>
						<!--end::Card toolbar-->
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
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
										</div>
									</th>
									<th class="min-w-100px">Order ID</th>
									<th class="min-w-175px">Customer</th>
									<th class="text-end min-w-70px">Status</th>
									<th class="text-end min-w-100px">Total</th>
									<th class="text-end min-w-100px">Date Added</th>
									<th class="text-end min-w-100px">Date Modified</th>
									<th class="text-end min-w-100px">Actions</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-semibold text-gray-600">
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13358</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Failed">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Failed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$229.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-10-01">
										<span class="fw-bold">01/10/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-10-05">
										<span class="fw-bold">05/10/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13359</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$305.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-27">
										<span class="fw-bold">27/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-10-04">
										<span class="fw-bold">04/10/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13360</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Denied">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Denied</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$346.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-10-02">
										<span class="fw-bold">02/10/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-10-03">
										<span class="fw-bold">03/10/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13361</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Failed">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Failed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$306.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-27">
										<span class="fw-bold">27/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-10-02">
										<span class="fw-bold">02/10/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13362</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$323.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-24">
										<span class="fw-bold">24/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-10-01">
										<span class="fw-bold">01/10/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13363</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$13.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-26">
										<span class="fw-bold">26/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-30">
										<span class="fw-bold">30/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13364</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Denied">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Denied</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$401.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-25">
										<span class="fw-bold">25/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-29">
										<span class="fw-bold">29/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13365</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$149.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-24">
										<span class="fw-bold">24/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-28">
										<span class="fw-bold">28/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13366</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Cancelled">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Cancelled</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$493.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-23">
										<span class="fw-bold">23/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-27">
										<span class="fw-bold">27/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13367</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Expired">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Expired</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$328.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-23">
										<span class="fw-bold">23/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-26">
										<span class="fw-bold">26/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13368</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-info text-info">A</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$437.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-19">
										<span class="fw-bold">19/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-25">
										<span class="fw-bold">25/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13369</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$338.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-20">
										<span class="fw-bold">20/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-24">
										<span class="fw-bold">24/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13370</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Cancelled">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Cancelled</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$405.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-21">
										<span class="fw-bold">21/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-23">
										<span class="fw-bold">23/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13371</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$319.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-17">
										<span class="fw-bold">17/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-22">
										<span class="fw-bold">22/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13372</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$260.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-20">
										<span class="fw-bold">20/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-21">
										<span class="fw-bold">21/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13373</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Processing">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Processing</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$347.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-19">
										<span class="fw-bold">19/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-20">
										<span class="fw-bold">20/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13374</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$135.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-17">
										<span class="fw-bold">17/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-19">
										<span class="fw-bold">19/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13375</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Cancelled">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Cancelled</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$126.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-15">
										<span class="fw-bold">15/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-18">
										<span class="fw-bold">18/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13376</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$360.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-15">
										<span class="fw-bold">15/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-17">
										<span class="fw-bold">17/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13377</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Delivered">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Delivered</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$389.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-15">
										<span class="fw-bold">15/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-16">
										<span class="fw-bold">16/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13378</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-info text-info">A</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$378.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-14">
										<span class="fw-bold">14/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-15">
										<span class="fw-bold">15/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13379</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$59.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-10">
										<span class="fw-bold">10/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-14">
										<span class="fw-bold">14/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13380</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Expired">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Expired</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$326.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-11">
										<span class="fw-bold">11/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-13">
										<span class="fw-bold">13/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13381</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$70.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-09">
										<span class="fw-bold">09/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-12">
										<span class="fw-bold">12/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13382</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$446.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-10">
										<span class="fw-bold">10/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-11">
										<span class="fw-bold">11/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13383</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-info text-info">A</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$155.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-07">
										<span class="fw-bold">07/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-10">
										<span class="fw-bold">10/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13384</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$217.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-05">
										<span class="fw-bold">05/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-09">
										<span class="fw-bold">09/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13385</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$278.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-06">
										<span class="fw-bold">06/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-08">
										<span class="fw-bold">08/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13386</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$245.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-03">
										<span class="fw-bold">03/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-07">
										<span class="fw-bold">07/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13387</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$319.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-04">
										<span class="fw-bold">04/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-06">
										<span class="fw-bold">06/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13388</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Delivering">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Delivering</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$387.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-09-03">
										<span class="fw-bold">03/09/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-05">
										<span class="fw-bold">05/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13389</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$74.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-29">
										<span class="fw-bold">29/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-04">
										<span class="fw-bold">04/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13390</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$436.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-30">
										<span class="fw-bold">30/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-03">
										<span class="fw-bold">03/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13391</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$96.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-26">
										<span class="fw-bold">26/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-02">
										<span class="fw-bold">02/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13392</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$446.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-26">
										<span class="fw-bold">26/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-09-01">
										<span class="fw-bold">01/09/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13393</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$385.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-25">
										<span class="fw-bold">25/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-31">
										<span class="fw-bold">31/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13394</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-info text-info">A</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Expired">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Expired</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$458.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-24">
										<span class="fw-bold">24/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-30">
										<span class="fw-bold">30/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13395</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$306.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-23">
										<span class="fw-bold">23/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-29">
										<span class="fw-bold">29/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13396</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Cancelled">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Cancelled</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$213.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-22">
										<span class="fw-bold">22/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-28">
										<span class="fw-bold">28/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13397</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$313.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-21">
										<span class="fw-bold">21/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-27">
										<span class="fw-bold">27/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13398</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$154.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-20">
										<span class="fw-bold">20/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-26">
										<span class="fw-bold">26/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13399</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$198.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-22">
										<span class="fw-bold">22/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-25">
										<span class="fw-bold">25/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13400</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Delivering">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Delivering</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$478.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-17">
										<span class="fw-bold">17/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-24">
										<span class="fw-bold">24/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13401</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$22.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-22">
										<span class="fw-bold">22/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-23">
										<span class="fw-bold">23/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13402</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-info text-info">A</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$437.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-18">
										<span class="fw-bold">18/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-22">
										<span class="fw-bold">22/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13403</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$14.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-20">
										<span class="fw-bold">20/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-21">
										<span class="fw-bold">21/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13404</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label">
														<img src="/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
													</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Completed">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Completed</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$66.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-19">
										<span class="fw-bold">19/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-20">
										<span class="fw-bold">20/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13405</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Denied">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Denied</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$229.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-16">
										<span class="fw-bold">16/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-19">
										<span class="fw-bold">19/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13406</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Delivering">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Delivering</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$253.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-13">
										<span class="fw-bold">13/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-18">
										<span class="fw-bold">18/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::Order ID=-->
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13407</a>
									</td>
									<!--end::Order ID=-->
									<!--begin::Customer=-->
									<td>
										<div class="d-flex align-items-center">
											<!--begin:: Avatar -->
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="../../demo1/dist/apps/user-management/users/view.html">
													<div class="symbol-label fs-3 bg-light-success text-success">L</div>
												</a>
											</div>
											<!--end::Avatar-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<!--end::Customer=-->
									<!--begin::Status=-->
									<td class="text-end pe-0" data-order="Refunded">
										<!--begin::Badges-->
										<div class="badge badge-light-info">Refunded</div>
										<!--end::Badges-->
									</td>
									<!--end::Status=-->
									<!--begin::Total=-->
									<td class="text-end pe-0">
										<span class="fw-bold">$144.00</span>
									</td>
									<!--end::Total=-->
									<!--begin::Date Added=-->
									<td class="text-end" data-order="2022-08-13">
										<span class="fw-bold">13/08/2022</span>
									</td>
									<!--end::Date Added=-->
									<!--begin::Date Modified=-->
									<td class="text-end" data-order="2022-08-17">
										<span class="fw-bold">17/08/2022</span>
									</td>
									<!--end::Date Modified=-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Products-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">2022&copy;</span>
				<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
				</li>
				<li class="menu-item">
					<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
	<!--end::Footer-->
</div>
<!--end:::Main-->

<!-- Begin::Sorting Tabel Data Nilai Siswa Kepala Sekolah -->
<script>
	// Membaca data tabel dan menyimpannya dalam array
	function readTableData() {
		var table = document.getElementById("datasiswa");
		var data = [];

		for (var i = 1; i < table.rows.length; i++) {
			var row = table.rows[i];
			var rowData = {
				no: row.cells[0].innerText,
				nis: row.cells[1].innerText,
				nisn: row.cells[2].innerText,
				nama: row.cells[3].innerText,
				kelas: row.cells[4].innerText,
				semester: row.cells[5].innerText,
				tahunAkademik: row.cells[6].innerText
			};
			data.push(rowData);
		}

		return data;
	}

	// Memfilter dan menampilkan data berdasarkan pilihan dropdown
	function filterData() {
		var filterBy = document.getElementById("filterBy").value;
		var keyword = document.getElementById("keyword").value.toLowerCase();
		var data = readTableData();

		var filteredData = data.filter(function(row) {
			if (filterBy === "Kelas") {
				return row.kelas.toLowerCase().includes(keyword);
			} else if (filterBy === "Semester") {
				return row.semester.toLowerCase().includes(keyword);
			} else if (filterBy === "Tahun Akademik") {
				return row.tahunAkademik.toLowerCase().includes(keyword);
			} else {
				return true; // Tampilkan semua data jika tidak ada filter yang dipilih
			}
		});

		renderTable(filteredData);
	}

	// Menampilkan data pada tabel
	function renderTable(data) {
		var tableBody = document.getElementById("listSiswa");
		tableBody.innerHTML = "";

		data.forEach(function(row) {
			var newRow = document.createElement("tr");
			newRow.innerHTML = `
        <td class="px-5 text-center">${row.no}</td>
        <td class="px-5 text-center">${row.nis}</td>
        <td class="text-center">${row.nisn}</td>
        <td class="text-center">${row.nama}</td>
        <td class="px-5 text-center">${row.kelas}</td>
        <td class="px-5 text-center">${row.semester}</td>
        <td class="px-5 text-center">${row.tahunAkademik}</td>
        <td class="text-center">
          <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editDataSiswa" data-id="${row.no}" onclick="">
            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
            <span class="svg-icon svg-icon-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </a>
          <a href="/deleteAnggota/${row.no}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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
      `;

			tableBody.appendChild(newRow);
		});
	}
</script>
<!-- End::Sorting Tabel Data Nilai Siswa Kepala Sekolah -->

<!--begin::Javascript-->
<script>
	var hostUrl = "/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="/plugins/global/plugins.bundle.js"></script>
<script src="/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="/js/custom/apps/ecommerce/sales/listing.js"></script>
<script src="/js/widgets.bundle.js"></script>
<script src="/js/custom/widgets.js"></script>
<script src="/js/custom/apps/chat/chat.js"></script>
<script src="/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="/js/custom/utilities/modals/create-app.js"></script>
<script src="/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>