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
							<span class="card-label fw-bold fs-3 mb-1">New Arrivals</span>
							<span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
						</h3>
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light-primary">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->New Member</a>
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
										<th class="ps-4 min-w-200px rounded-start">Mata Pelajaran</th>
										<th class="min-w-80px">Kelas</th>
										<th class="min-w-125px">Guru</th>
										<th class="min-w-125px">Tahun Akademik</th>
										<th class="min-w-150px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="px-5">Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011-04-25</td>
									</tr>
									<tr>
										<td class="px-5">Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011-07-25</td>
									</tr>
									<tr>
										<td class="px-5">Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009-01-12</td>
									</tr>
									<tr>
										<td class="px-5">Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012-03-29</td>
									</tr>
									<tr>
										<td class="px-5">Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008-11-28</td>
									</tr>
									<tr>
										<td class="px-5">Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012-12-02</td>
									</tr>
									<tr>
										<td class="px-5">Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012-08-06</td>
									</tr>
									<tr>
										<td class="px-5">Rhona Davidson</td>
										<td>Integration Specialist</td>
										<td>Tokyo</td>
										<td>55</td>
										<td>2010-10-14</td>
									</tr>
									<tr>
										<td class="px-5">Colleen Hurst</td>
										<td>Javascript Developer</td>
										<td>San Francisco</td>
										<td>39</td>
										<td>2009-09-15</td>
									</tr>
									<tr>
										<td class="px-5">Sonya Frost</td>
										<td>Software Engineer</td>
										<td>Edinburgh</td>
										<td>23</td>
										<td>2008-12-13</td>
									</tr>
									<tr>
										<td class="px-5">Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>30</td>
										<td>2008-12-19</td>
									</tr>
									<tr>
										<td class="px-5">Quinn Flynn</td>
										<td>Support Lead</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2013-03-03</td>
									</tr>
									<tr>
										<td class="px-5">Charde Marshall</td>
										<td>Regional Director</td>
										<td>San Francisco</td>
										<td>36</td>
										<td>2008-10-16</td>
									</tr>
									<tr>
										<td class="px-5">Haley Kennedy</td>
										<td>Senior Marketing Designer</td>
										<td>London</td>
										<td>43</td>
										<td>2012-12-18</td>
									</tr>
									<tr>
										<td class="px-5">Tatyana Fitzpatrick</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>19</td>
										<td>2010-03-17</td>
									</tr>
									<tr>
										<td class="px-5">Michael Silva</td>
										<td>Marketing Designer</td>
										<td>London</td>
										<td>66</td>
										<td>2012-11-27</td>
									</tr>
									<tr>
										<td class="px-5">Paul Byrd</td>
										<td>Chief Financial Officer (CFO)</td>
										<td>New York</td>
										<td>64</td>
										<td>2010-06-09</td>
									</tr>
									<tr>
										<td class="px-5">Gloria Little</td>
										<td>Systems Administrator</td>
										<td>New York</td>
										<td>59</td>
										<td>2009-04-10</td>
									</tr>
									<tr>
										<td class="px-5">Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012-10-13</td>
									</tr>
									<tr>
										<td class="px-5">Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>35</td>
										<td>2012-09-26</td>
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
@endsection