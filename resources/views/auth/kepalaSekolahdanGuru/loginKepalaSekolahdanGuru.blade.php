<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../" />
	<title>Login Kepala Sekolah dan Guru</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="/images/logohead.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<style>
			body {
				background-image: url('/images/guruwithopacity.jpg');
				background-size: contain;
			}
		</style>
		<!--end::Page bg image-->
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid flex-lg-row">
			<!--begin::Aside-->
			<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
				<!--begin::Aside-->
				<div class="d-flex flex-center flex-lg-start flex-column">
					<!--begin::Logo-->
					<div class="mb-7">
						<img class="w-200px h-200px" alt="Logo" src="/images/logohead.png" />
					</div>
					<!--end::Logo-->
					<!--begin::Title-->
					<div class="row d-flex justify-content-center">
						<div class="col-sm-12">
							<span>
								<h2 class="text-white fw-bold m-2">Sistem Informasi Rapor Online</h2>
							</span>
						</div>
						<div class="col-sm-12">
							<span>
								<h1 class="text-white fw-bold m-2 fs-2hx">SMP Muhammadiyah 1 Malang</h1>
							</span>
						</div>
					</div>
					<!--end::Title-->
				</div>
				<!--begin::Aside-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-center w-lg-50 p-10">
				<!--begin::Card-->
				<div class="card rounded-3 w-md-550px">
					<!--begin::Card body-->
					<div class="card-body p-10 p-lg-20">
						<!--begin::Form-->
						<form class="form w-100" action="{{route('login.user')}}" method="post">
							@csrf
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Log In Kepala Sekolah dan Guru</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-8">
								<!--begin::Select2-->
								<select class="form-select mb-2" name="role" data-control="select2" data-hide-search="true" data-placeholder="Log In Sebagai" name="role">
									<option></option>
									<option value="kepala_sekolah">Kepala Sekolah</option>
									<option value="guru">Guru</option>
									<option value="wali_kelas">Wali Kelas</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Username-->
								<input type="text" placeholder="Username" name="username" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Username-->
							</div>
							<!--end::Input group=-->
							<!--begin::Input group=-->
							<div class="fv-row mb-3">
								<!--begin::Password-->
								<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
								<!--begin::Link-->
								<!-- <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password ?</a> -->
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Log In</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	@if (\Session::has('danger'))
	<div class="container" style="position:absolute;bottom:0;width:40%;" id="error-alert">
		<div class="alert alert-danger float-left mr-3" role="alert">
			{{ session('danger') }}
		</div>
	</div>
	@elseif (\Session::has('success'))
	<div class="container" style="position:absolute;bottom:0;width:40%;" id="success-alert">
		<div class="alert alert-success float-left mr-3" role="alert">
			{{ session('success') }}
		</div>
	</div>
	@endif


    <script>
    	setTimeout(function() {
			document.getElementById('success-alert')?.remove();
			document.getElementById('error-alert')?.remove();
		}, 3000);
	</script>
	<script>
		var hostUrl = "/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="/plugins/global/plugins.bundle.js"></script>
	<script src="/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>