@extends('backend.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!--Begin::Dashboard-->



<!--End::Dashboard 1-->



@endsection









@section('js')
	<script src="{{ asset(config('directory.assets-admin-js') . 'pages/dashboard.js') }}" type="text/javascript"></script>
@endsection



@section('scripts')
	<script src="{{ asset(config('directory.assets-admin-vendors') . 'custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="{{ asset(config('directory.assets-admin-vendors') . 'custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
@endsection



@section('css')
<link href="{{ asset(config('directory.assets-admin-vendors') . 'custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection