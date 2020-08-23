<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('v_admin/v_a_template/v_temp_header') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<?php $this->load->view('v_admin/v_a_template/v_temp_navbar') ?>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view('v_admin/v_a_template/v_temp_sidebar') ?>
		</aside>
		<div class="content-wrapper">
			<?php $this->load->view($page); ?>
		</div>
		<footer class="main-footer text-sm">
			<strong>Copyright &copy; 2020 <a href="http://adminlte.io">Theoarnan</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0.0
			</div>
		</footer>
		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>
	<?php $this->load->view('v_admin/v_a_template/v_temp_footer') ?>
</body>

</html>
