<!DOCTYPE html>

<html lang="en">

	@include('backend.partials.admin.head')

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				@include('backend.partials.admin.menu')

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					@include('backend.partials.admin.header')

					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						@include('backend.partials.admin.content')
					</div>
					
					@include('backend.partials.admin.footer')
					
				</div>
			</div>
		</div>
		<!-- end:: Page -->	

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->
		
		@include('backend.partials.admin.footscripts')

	</body>

	<!-- end::Body -->
</html>