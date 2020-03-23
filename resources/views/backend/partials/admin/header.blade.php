<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
	<div class="kt-header-mobile__logo">
		<a href="demo12/index.html">
			<img alt="Logo" src="{{ asset(config('directory.logo') . 'admin-header-logo.png') }}" />
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
		<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->



<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

	<!-- begin: Header Menu -->
	<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
	<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
		<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
			<ul class="kt-menu__nav ">
				<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="" class="kt-menu__link "><span class="kt-menu__link-text">Visit Site</span></a></li>
			</ul>
		</div>
	</div>
	<!-- end: Header Menu -->

	<!-- begin:: Header Topbar -->
	<div class="kt-header__topbar">

		<!--begin: User Bar -->
		<div class="kt-header__topbar-item kt-header__topbar-item--user">
			<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
				<div class="kt-header__topbar-user">
					<span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
					<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
					@if ($user->avatar)
						<img alt="Pic" class="kt-radius-100" src="{{ $user->avatar }}" />
					@else
						<img alt="Pic" class="kt-radius-100" src="{{ asset(config('directory.users') . 'user.png') }}" />
					@endif

					

					<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
					<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
				</div>
			</div>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

				<!--begin: Head -->
				<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
					<div class="kt-user-card__avatar">
						@if ($user->avatar)
							<img class="kt-hidden-" alt="Pic" src="{{ $user->avatar }}" />
						@else
							<img class="kt-hidden-" alt="Pic" src="{{ asset(config('directory.users') . 'user.png') }}" />
						@endif

						<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
						<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
					</div>
					<div class="kt-user-card__name">
						{{ $user->name }}
					</div>
					<div class="kt-user-card__badge">
						<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
					</div>
				</div>
				<!--end: Head -->

				<!--begin: Navigation -->
				<div class="kt-notification">
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-calendar-3 kt-font-success"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title kt-font-bold">
								My Profile
							</div>
							<div class="kt-notification__item-time">
								Account settings and more
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-mail kt-font-warning"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title kt-font-bold">
								My Messages
							</div>
							<div class="kt-notification__item-time">
								Inbox and tasks
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-rocket-1 kt-font-danger"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title kt-font-bold">
								My Activities
							</div>
							<div class="kt-notification__item-time">
								Logs and notifications
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-hourglass kt-font-brand"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title kt-font-bold">
								My Tasks
							</div>
							<div class="kt-notification__item-time">
								latest tasks and projects
							</div>
						</div>
					</a>
					<a href="#" class="kt-notification__item">
						<div class="kt-notification__item-icon">
							<i class="flaticon2-cardiogram kt-font-warning"></i>
						</div>
						<div class="kt-notification__item-details">
							<div class="kt-notification__item-title kt-font-bold">
								Billing
							</div>
							<div class="kt-notification__item-time">
								billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
							</div>
						</div>
					</a>
					<div class="kt-notification__custom kt-space-between">
						<a href="{{ route('logout') }}" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
						<a href="demo12/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
					</div>
				</div>
				<!--end: Navigation -->
			</div>
		</div>

		<!--end: User Bar -->
	</div>

	<!-- end:: Header Topbar -->
</div>

<!-- end:: Header -->