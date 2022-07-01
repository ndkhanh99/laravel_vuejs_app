@extends('layouts.app')

@section('content')

<div class="hold-transition sidebar-mini">
	
	<div class="wrapper">
		<!-- Navbar -->
		<header-component></header-component>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->

		<sidebar-component></sidebar-component>

		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->

		<content-component></content-component>

		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<footer-component></footer-component>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE -->
	<script src="dist/js/adminlte.js"></script>

	<!-- OPTIONAL SCRIPTS -->
	<script src="plugins/chart.js/Chart.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard3.js"></script>
</div>

@endsection
