<?php

include 'includes/db.php';

if (isset($_GET['edit_patient'])) {
	$get_id = $_GET['edit_patient'];

	$query = "SELECT * FROM patients WHERE id='$get_id'";

	$result = mysqli_query($connection, $query);

	$row_people = mysqli_fetch_array($result);
	$patient_id = $row_patient['patient_id'];
	$patient_fname = $row_patient['First Name'];
	$patient_lname = $row_patient['Last Name'];
	$patient_sex = $row_patient['Sex'];
	$patient_dob = $row_patient['Date of Birth'];
	$patient_identity = $row_patient['National ID'];
	$patient_mobile = $row_patient['Contact Details'];
	$patient_email = $row_patient['Email'];
	$patient_home_town = $row_patient['Home Address'];
	$profile_created = $row_patient['created_at']; 
}

?>
<head>
	<link rel="stylesheet" type="text/css" href="styling/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styling/bootstrap.min.css">
</head>

		<form action="" method="POST" class="form-control" enctype="multipart/form-data">
			<table class="table table-striped table-dark" width="auto" border="2" align="center">
				<tr align="center">
					<td colspan="8"><h2>Edit Profile</h2></td>
				</tr>
				<tr>
					<td align="right">Name</td>
					<td><input type="text" name="patient_name" autocomplete="On" size="60" required="required" value="<?php echo $patient_fname; ?>"></td>
				</tr>
				<tr>
					<td align="right">Surname</td>
					<td><input type="text" name="patient_surname" autocomplete="On" size="60" required="required" value="<?php echo $patient_lname; ?>"></td>
				</tr>
				<tr>
					<td align="right">Sex</td>
					<td><input type="text" name="patient_sex" autocomplete="On" size="60" required="required" value="<?php echo $patient_sex; ?>"></td>
				</tr>
				<tr>
					<td align="right">National ID</td>
					<td><input type="text" name="patient_identity" autocomplete="On" size="60" required="required" value="<?php echo $patient_identity; ?>"></td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td><input type="text" name="patient_profession" autocomplete="On" size="60" required="required" value="<?php echo $patient_prof; ?>"></td>
				</tr>
				<tr>
					<td align="right">Date of Birth</td>
					<td><input type="date" name="patient_birth" autocomplete="On" size="60" required="required" value="<?php echo $patient_dob; ?>"></td>
				</tr>
				<tr>
					<td align="right">Mobile No:</td>
					<td><input type="phone" name="patient_mobile" autocomplete="On" size="60" required="required" value="<?php echo $patient_mobile; ?>"></td>
				</tr>
				<tr>
					<td align="right">Email Address</td>
					<td><input type="email" name="patient_email" autocomplete="On" size="60" required="required" value="<?php echo $patient_email; ?>"></td>
				</tr>
				<tr>
					<td align="right">Residence</td>
					<td><input type="text" name="patient_res" autocomplete="On" size="60" required="required" value="<?php echo $patient_res; ?>"></td>
				</tr>
				<tr>
					<td align="right">Home Town</td>
					<td><input type="text" name="patient_town" size="60" required="required" value="<?php echo $patient_home_town; ?>"></td>
				</tr>
				<tr>
					<td align="right">Country</td>
					<td><input type="text" name="patient_country" autocomplete="On" size="60" required="required" value="<?php echo $patient_country; ?>"></td>
				</tr>
				<tr>
					<td align="right">Your Image</td>
					<td><input type="file" name="patient_pic" autocomplete="On" size="60" required="required" value="<?php echo $patient_image; ?>"></td>
				</tr>
				<tr align="center">
					<td colspan="8">
						<input type="submit" name="update_profile" class="btn-primary btn-sm" value="Update Profile">
					</td>
				</tr>
			</table>
		</form>
<?php

if (isset($_POST['update_profile'])) {

	$profile_id = $patient_id;
	$patient_name = $_POST['First Name'];
	$patient_lname = $_POST['Last Name'];
	$patient_sex = $_POST['Sex'];
	$patient_dob = $_POST['Date of Birth'];
	$patient_identity = $_POST['National ID'];
	$patient_contact = $_POST['Contact Details'];
	$patient_email = $_POST['Email'];
	$patient_address = $_POST['Home Address'];

	//Picture Collection

	// $patient_image = $_FILES['patient_pic']['name'];
	// $patient_image_tmp = $_FILES['patient_pic']['tmp_name'];

	// move_uploaded_file($patient_image_tmp, "people_images/$patient_image");

	$update_profile = "UPDATE patients SET First Name ='$patient_name', Last Name='$patient_lname', Sex='$patient_sex', Date of Birth='$patient_dob', National ID='$patient_identity', Contact Details ='$patient_contact', Email='$patient_email', Home Address='$patient_address', country='$patient_country' /*image='$patient_image'*/ WHERE id ='$profile_id'";

	$run_update = mysqli_query($connection, $update_profile);

	if (isset($run_update)) {
		echo "

				<div class='alert alert-success' role='alert'style='margin-top: -30px;'>
                     <strong>Success:</strong> Patient information successful updated.
                 </div>

			";
	} else {

		echo "

					<div class='alert alert-warning' role='alert'style='margin-top: -30px;'>
                        <strong>Warning:</strong> Patient information was not successful updated.
                    </div>


			";
	}

}
?>