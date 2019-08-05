<?php

include_once 'includes/db.php';

if (isset($_GET['delete_person'])) {
	$delete_id = $_GET['delete_person'];

	$delete_post = "DELETE FROM people WHERE id ='$delete_id'";

	$run_delete = mysqli_query($connection, $delete_post);

	if ($run_delete) {
		echo "<script>alert('A profile has been deleted.')</script>";

		echo "<script>window.open('index.php?view_people', '_self')</script>";
	}
}
?>