
<html>

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
    @yield('content')
	@include('sweetalert::alert')

		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	<script src="{{asset('admin/assets/DataTables/datatables.js')}}" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

</body>

</html>
