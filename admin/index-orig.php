<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Management Database</title>
    <link rel="stylesheet" href="styling/css/materialize.min.css" media='all'>
	<link rel="stylesheet" type="text/css" href="styling/main.css" media="all">
	<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css"> -->

	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!--  <style type="text/css">
    	.#right span{
    		margin-right: 8px;
    		color: #ee3e80;
    	}
    	#right i{
    		margin-right: 8px;
    		color: #ee3e80;
    	}
    </style> -->
</head>
<body>
	<div class="main_wrapper">
		<div id="header">
			<h2 id='admin_header'>Patient Database</h2>
		</div>
		<div id="right">
			<h3 style="text-align: center;"><i class="fa fa-user "></i>Directory Admin</h3>
			<a href="index.php"><h5 style="text-align: center; color: cyan;"><i class="fa fa-dashboard "></i>Dashboard</h5></a>
			<hr>
				<a href="index.php"><i class="fa fa-home "></i>Home</a>
				<a href="index.php?add_patient"><i class="ti ti-thought"></i>Add New Patient</a>
				<a href="index.php?view_patient"><i class="fa fa-spinner"></i>All Patient</a>
				<a href="logout.php"><i class="fa fa-lock "></i>Admin Logout</a>
		</div>
		<div id="left">
			<div>
			<h5 style ="color: green; text-align: center;"><?php #echo @$_GET['logged_in']; ?></h5>
		</div>
<?php
if (isset($_GET['add_patient'])) {
	include 'add_patient.php';
}

if (isset($_GET['view_patient'])) {
	include 'view_patient.php';
}
if (isset($_GET['edit_patient'])) {
	include 'edit_patient.php';
}
if (isset($_GET['delete_patient'])) {
	include 'delete_patient.php';
}
?>
		</div>
	</div>
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>