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
								<!--end::Svg Icon-->Filter
							</div>
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
									<form action="/nilai-siswa-all" method="get">
										@csrf
										<div class="mb-10">
											<div class="row">
												<div class="col-3">
													<!--begin::Label-->
													<label class="form-label fw-semibold py-4">Tingkat:</label>
													<!--end::Label-->
												</div>
												<div class="col-9">
													<!--begin::Input-->
													<div>
													<select class="form-select form-select-solid" name="tingkat" data-kt-select2="true" data-placeholder="Pilih Tingkat" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
														<option value="-1" {{ $tingkat == -1 ? 'selected' : '' }}>Semua Tingkat</option>
														<option value="7" {{ $tingkat == 7 ? 'selected' : '' }}>7</option>
														<option value="8" {{ $tingkat == 8 ? 'selected' : '' }}>8</option>
														<option value="9" {{ $tingkat == 9 ? 'selected' : '' }}>9</option>
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
													<label class="form-label fw-semibold py-4">Kelas:</label>
													<!--end::Label-->
												</div>
												<div class="col-9">
													<!--begin::Input-->
													<div>
													<select class="form-select form-select-solid" name="kelas" data-kt-select2="true" data-placeholder="Pilih Kelas" data-dropdown-parent="#kt_menu_633e6e070bf4a" data-allow-clear="true">
														<option value="-1" {{ $kelas == -1 ? 'selected' : '' }}>Semua Kelas</option>
														<option value="A" {{ $kelas == 'A' ? 'selected' : '' }}>A</option>
														<option value="B" {{ $kelas == 'B' ? 'selected' : '' }}>B</option>
														<option value="C" {{ $kelas == 'C' ? 'selected' : '' }}>C</option>
														<option value="D" {{ $kelas == 'D' ? 'selected' : '' }}>D</option>
														<option value="E" {{ $kelas == 'E' ? 'selected' : '' }}>E</option>
														<option value="F" {{ $kelas == 'F' ? 'selected' : '' }}>F</option>
													</select>

													</div>
													<!--end::Input-->
												</div>
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Terapkan</button>
										</div>
										<!--end::Actions-->
									</form>
									
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
						<input type="hidden" name="semester" id="semester" value="{{$informasi_sekolah->semester}}">
						<input type="hidden" name="tahun_akademik" id="tahun_akademik" value="{{$informasi_sekolah->tahun_akademik}}">
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
										<th class="min-w-50px text-center text-nowrap">Tingkat</th>
										<th class="min-w-50px text-center text-nowrap">Kelas</th>
										<th class="min-w-50px text-center text-nowrap">Semester</th>
										<th class="min-w-70px text-center text-nowrap">Tahun Akademik</th>
										<th class="min-w-150px w-50px text-center text-nowrap">Nilai</th>
									</tr>
								</thead>
								<tbody id="listDataNilaiSiswaKepalaSekolah">
									@foreach($data AS $key => $datas)
									<tr>
										<td class="px-5 text-center">{{$key+1}}</td>
										<td class="px-5 text-center">{{$datas->nis}}</td>
										<td class="text-center">{{$datas->nisn}}</td>
										<td class="text-center">{{$datas->nama_lengkap}}</td>
										<td class="px-5 text-center">{{$datas->tingkat}}</td>
										<td class="px-5 text-center">{{$datas->kelas}}</td>
										<td class="px-5 text-center">{{$datas->semester}}</td>
										<td class="px-5 text-center">{{$datas->tahun_akademik}}</td>
										<td class="text-center">
											<div class="row m-1">
												<div class="col-12">
													<a href="{{ url('/nilai-detail-siswa/'.$datas->nisn) }}" class="btn btn-sm fw-bold btn-Success">Keseluruhan</a>
												</div>
											</div>
											<div class="row m-1">
												<div class="col-12">
													<a href="#" class="btn btn-sm fw-bold btn-primary" onclick="getNilaiSiswa({{$datas->nisn}});getRapor({{$datas->nisn}});" data-bs-toggle="modal" data-bs-target="#nilaiRaporSiswaKepalaSekolah">Rapor</a>
												</div>
											</div>
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
                                <tbody class="text-nowrap">
                                    <tr>
                                        <td>Nama Peserta Didik</td>
                                        <td class="px-5">: <span class="nama_siswa"></span></td>
                                        <td class="px-15 ">Kelas</td>
                                        <td>: <span class="kelas_tingkat"></span></td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td class="px-5">: <span class="nisn_siswa"></span></td>
                                        <td class="px-15">Fase</td>
                                        <td>: {{$informasi_sekolah->fase}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sekolah</td>
                                        <td class="px-5">: SMP Muhammadiyah 1 Malang</td>
                                        <td class="px-15">Semester</td>
                                        <td>: <span class="semester"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="px-5">: JL. Brigjen Slamet Riadi 134 Malang</td>
                                        <td class="px-15">Tahun Pelajaran</td>
                                        <td>: <span class="tahun_pelajaran"></span></td>
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
							<tbody class="fw-semibold text-gray-600" id="rapor">
								<!-- <tr>
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
								</tr> -->
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

<script>
	function getRapor(nisn){
		$.ajax({
			url: '/nilai-rapor-json/'+nisn,
			type: 'get',
			dataType: 'JSON',
			success: function(response){
				console.log(response);
				$("#rapor").empty();
				var len = response.length;
				for(var i = 0; i < len; i++){
					var tr_str = '<tr>'+
										'<td class="text-center">'+(i+1)+'</td>'+
										'<td class="text-gray-800 text-hover-primary fw-bold">'+response[i].nama_mapel+'</td>'+
										'<td class="text-gray-800 text-hover-primary text-center">'+response[i].nilai_akhir+'</td>'+
										'<td class="text-gray-800 fw-bold">'+
											'<div class="row">'+
												response[i].high_deskripsi+
											'</div>'+
											'<hr>'+
											'<div class="row">'+
												response[i].low_deskripsi+
											'</div>'+
										'</td>'+
									'</tr>';
					$("#rapor").append(tr_str);
				}
			}
		});
	}

	function getNilaiSiswa(nisn){
		var tahunAkademik = $("#tahun_akademik").val();
		var semester = $("#semester").val();

		
		$.ajax({
			url: '/get-json-nilai/'+nisn+'/'+tahunAkademik+'/'+semester,
			type: 'get',
			dataType: 'JSON',
			success: function(response){
				// console.log(response.data_diri[0]);
				$(".nama_siswa").empty();
				$(".nisn_siswa").empty();
				$(".kelas_tingkat").empty();
				$(".fase_siswa").empty();
				$(".semester").empty();
				$(".tahun_pelajaran").empty();

				$(".nama_siswa").append(response.data_diri[0].nama_lengkap);
				$(".nisn_siswa").append(response.data_diri[0].nisn);
				$(".fase_siswa").append(response.data_diri[0].kelas);
				$(".kelas_tingkat").append(response.data_diri[0].tingkat);
				$(".semester").append(response.informasi_sekolah[0].semester);
				$(".tahun_pelajaran").append(response.informasi_sekolah[0].tahun_pelajaran);
				// var len = response.distinctData.length;
				// $("#listNilai").empty();

				// for(var i = 0; i < len; i++){
				// 	var tr_str = '<tr>'+
				// 					'<td id="mataPelajaran" class="text-gray-800 text-hover-primary fw-bold">'+response.distinctData[i].nama_mapel+'</td>';

				// 	var sum = 0;
				// 	var totalSumatif = response.dataNilai.filter(item => item.id_mapel_kelas === response.distinctData[i].id_mapel_kelas).length;
				// 	// console.log(totalSumatif);

				// 	for (let j = 1; j < 11; j++) {
				// 		const dataNilaiFiltered = response.dataNilai.filter(item => item.id_mapel_kelas === response.distinctData[i].id_mapel_kelas && item.sumatif == j);
				// 		if (dataNilaiFiltered[0] == null) {
				// 			tr_str += '<td id="sumatif' + j + '" class="text-gray-800 text-hover-primary text-center">-</td>';
				// 		} else {
				// 			sum += dataNilaiFiltered[0].nilai;
				// 			tr_str += '<td id="sumatif' + j + '" class="text-gray-800 text-hover-primary text-center">' + dataNilaiFiltered[0].nilai + '</td>';
				// 		}
				// 	}

				// 	tr_str += '<td id="naSumatifLingkupMateri" class="text-gray-800 text-hover-primary text-center">'+(sum/totalSumatif).toFixed(2)+'</td>'+
				// 			'<td id="pts" class="text-gray-800 text-hover-primary text-center">'+ (response.distinctData[i].pas !== null && response.distinctData[i].pas !== undefined ? response.distinctData[i].pas : 0) +'</td>'+
				// 			'<td id="pas" class="text-gray-800 text-hover-primary text-center">'+ (response.distinctData[i].pts !== null && response.distinctData[i].pts !== undefined ? response.distinctData[i].pts : 0) +'</td>'+
				// 			'<td id="naSumatifAkhirSemester" class="text-gray-800 text-hover-primary text-center">'+(((sum/totalSumatif) + (response.distinctData[i].pas !== null && response.distinctData[i].pas !== undefined ? response.distinctData[i].pas : 0) + (response.distinctData[i].pts !== null && response.distinctData[i].pts !== undefined ? response.distinctData[i].pts : 0)) / 3).toFixed(2)+'</td>'+
				// 		'</tr>';
				// 	$("#listNilai").append(tr_str);
				// }
			}
		});
	}
</script>
<!-- begin::Link Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- end::Link Javascript -->