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
						<li class="breadcrumb-item text-muted">Update Informasi</li>
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
							<h3 class="fw-bold m-0">Data Sekolah</h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<a class="btn btn-primary align-self-center" data-bs-toggle="modal" data-bs-target="#editDataSekolah">Edit Data Sekolah</a>
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body table-responsive">
						<!--begin::Table container-->
						<table class="table align-middle table-row-dashed fs-6 gy-5 table-responsive" style="cursor:context-menu">
							<tbody>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Sekolah</td>
									<td id="row2">: SMP Muhammadiyah 1 Malang</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">NPSN</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">NSS</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Alamat Sekolah</td>
									<td id="row2">: Jl. Brigjen Slamet Riadi No. 134 Oro - Oro Dowo Malang
									</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Kode Pos</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Desa / Kelurahan</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Kecamatan</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Kabupaten / Kota</td>
									<td id="row2">: Malang</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Provinsi</td>
									<td id="row2">: Jawa Timur</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Website</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">E - Mail</td>
									<td id="row2">: smpm1.mlg@gmail.com</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Nama Kepala Sekolah</td>
									<td id="row2">: Yanur Setyaningrum, M.Pd</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">NBM</td>
									<td id="row2">: 1222.086</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">NIP / NIY</td>
									<td id="row2">: </td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Semester</td>
									<td id="row2">: Ganjil</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Fase</td>
									<td id="row2">: D</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Tahun Pelajaran</td>
									<td id="row2">: 2023/2024</td>
								</tr>
								<tr>
									<td id="row1" class="text-gray-800 fw-bold text-nowrap">Tempat / Tanggal Rapor</td>
									<td id="row2">: Kota Malang, Desember 2022</td>
								</tr>
							</tbody>
						</table>
						<!--end::Table container-->
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

<!--begin::Modal - Edit Data Sekolah-->
<div class="modal fade" id="editDataSekolah" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form" action="#" id="kt_modal_add_customer_form" data-kt-redirect="../../demo1/dist/apps/customers/list.html">
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_add_customer_header">
					<!--begin::Modal title-->
					<h2 class="fw-bold">Edit Data Sekolah</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-10 px-lg-17">
					<!--begin::Scroll-->
					<div class="scroll-y me-n7 pe-7" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">Nama Sekolah</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="SMP Muhammadiyah 1 Malang" disabled />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row">
							<div class="col-sm-6">
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">NSS</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan NSS" name="nss" value="" />
									<!--end::Input-->
								</div>
							</div>
							<div class="col-sm-6">
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">NPSN</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan NPSN" name="npsn" value="" />
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">Alamat Sekolah</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="alamatSekolah" value="" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<div class="row">
								<div class="col-sm-4">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Kode Pos</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan Kode Pos" name="kodePos" value="" />
									<!--end::Input-->
								</div>
								<div class="col-sm-8">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Desa / Kelurahan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan Desa / Kelurahan" name="desaKelurahan" />
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<div class="row">
								<div class="col-sm-6">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Kecamatan</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan Kecamatan" name="kecamatan" value="" />
									<!--end::Input-->
								</div>
								<div class="col-sm-6">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Kabupaten / Kota</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="kabupatenKota" value="Malang" disabled />
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<div class="row">
								<div class="col-sm-6">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Provinsi</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="provinsi" value="Jawa Timur" disabled />
									<!--end::Input-->
								</div>
								<div class="col-sm-6">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Website</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan Website" name="website" value="" />
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">E - Mail</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="email" value="smpm1.mlg@gmail.com" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">Nama Kepala Sekolah</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="namaKepalaSekolah" value="Yanur Setyaningrum, M.Pd" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">NBM</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukkan NBM" name="nbm" value="" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<div class="row">
								<div class="col-sm-4">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Fase</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan Fase" name="fase" value="" />
									<!--end::Input-->
								</div>
								<div class="col-sm-4">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">NPY / NIY</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="Masukkan NPY / NIY" name="npyniy" value="" />
									<!--end::Input-->
								</div>
								<div class="col-sm-4">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Semester</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select class="form-select form-select-solid" aria-label="Semester">
										<option>Pilih Semester</option>
										<option value="Ganjil">Ganjil</option>
										<option value="Genap">Genap</option>
									</select>
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<div class="row">
								<div class="col-sm-4">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Semester</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select class="form-select form-select-solid" aria-label="Semester">
										<option>Pilih Semester</option>
										<option value="Ganjil">Ganjil</option>
										<option value="Genap">Genap</option>
									</select>
									<!--end::Input-->
								</div>
								<div class="col-sm-8">
									<!--begin::Label-->
									<label class="fs-6 fw-semibold mb-2">Tempat, Tanggal Lahir</label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="input-group mb-5">
										<input type="text" class="form-control form-control-solid" placeholder="Tempat" aria-label="Username" />
										<input id="datepicker" type="date" class="form-control" />
									</div>
									<!--end::Input-->
								</div>
							</div>
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Scroll-->
				</div>
				<!--end::Modal body-->
				<!--begin::Modal footer-->
				<div class="modal-footer flex-center">
					<!--begin::Button-->
					<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
						<span class="indicator-label">Submit</span>
					</button>
					<!--end::Button-->
				</div>
				<!--end::Modal footer-->
			</form>
			<!--end::Form-->
		</div>
	</div>
</div>
<!--end::Modal - Edit Data Sekolah-->
@endsection