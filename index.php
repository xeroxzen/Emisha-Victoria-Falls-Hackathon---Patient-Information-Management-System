<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
    <link rel="stylesheet" href="styling/bootstrap.min.css" media='all'>
	<link rel="stylesheet" type="text/css" href="styling/main.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">

    <style type="text/css">
    	.#right span{
    		margin-right: 8px;
    		color: #ee3e80;
    	}
    	#right i{
    		margin-right: 8px;
    		color: #ee3e80;
    	}
    </style>
</head>
<body>
	<div class="main_wrapper">
		<div id="header">
			<h2 id='admin_header'>Know Me Admin Panel</h2>
		</div>
		<div id="right">
			<h3 style="text-align: center;"><i class="fa fa-user "></i>Directory Admin</h3>
			<a href="index.php"><h5 style="text-align: center; color: cyan;"><i class="fa fa-dashboard "></i>Dashboard</h5></a>
			<hr>
				<a href="index.php"><i class="fa fa-home "></i>Home</a>
				<a href="index.php?add_people"><i class="ti ti-thought"></i>Add New Person</a>
				<a href="index.php?view_people"><i class="fa fa-spinner"></i>All People</a>
				<a href="logout.php"><i class="fa fa-lock "></i>Admin Logout</a>
		</div>
		<div id="left">
			<div>
			<h5 style ="color: green; text-align: center;"><?php #echo @$_GET['logged_in']; ?></h5>
		</div>
<?php
if (isset($_GET['add_people'])) {
	include 'add_people.php';
}

if (isset($_GET['view_people'])) {
	include 'view_people.php';
}
if (isset($_GET['edit_person'])) {
	include 'edit_person.php';
}
if (isset($_GET['delete_people'])) {
	include 'delete_post.php';
}
?>
		</div>
	</div>
</body>
</html>