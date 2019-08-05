<?php

include 'includes/db.php';

if (isset($_GET['edit_person'])) {
	$get_id = $_GET['edit_person'];

	$query = "SELECT * FROM people WHERE id='$get_id'";

	$result = mysqli_query($connection, $query);

	$row_people = mysqli_fetch_array($result);
	$person_id = $row_people['id'];
	$person_fname = $row_people['fname'];
	$person_lname = $row_people['lname'];
	$person_sex = $row_people['sex'];
	$person_prof = $row_people['profession'];
	$person_dob = $row_people['dob'];
	$person_identity = $row_people['national_id'];
	$person_mobile = $row_people['mobile_no'];
	$person_email = $row_people['email'];
	$person_res = $row_people['residence'];
	$person_home_town = $row_people['home_town'];
	$person_country = $row_people['country'];
	$person_image = $row_people['image'];
	$profile_created = $row_people['created_at'];

}

?>
<head>
	<link rel="stylesheet" type="text/css" href="styling/bootstrap.min.css">
</head>

		<form action="" method="POST" class="form-control" enctype="multipart/form-data">
			<table class="table table-striped table-dark" width="auto" border="2" align="center">
				<tr align="center">
					<td colspan="8"><h2>Edit Profile</h2></td>
				</tr>
				<tr>
					<td align="right">Name</td>
					<td><input type="text" name="person_name" autocomplete="On" size="60" required="required" value="<?php echo $person_fname; ?>"></td>
				</tr>
				<tr>
					<td align="right">Surname</td>
					<td><input type="text" name="person_surname" autocomplete="On" size="60" required="required" value="<?php echo $person_lname; ?>"></td>
				</tr>
				<tr>
					<td align="right">Sex</td>
					<td><input type="text" name="person_sex" autocomplete="On" size="60" required="required" value="<?php echo $person_sex; ?>"></td>
				</tr>
				<tr>
					<td align="right">National ID</td>
					<td><input type="text" name="person_identity" autocomplete="On" size="60" required="required" value="<?php echo $person_identity; ?>"></td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td><input type="text" name="person_profession" autocomplete="On" size="60" required="required" value="<?php echo $person_prof; ?>"></td>
				</tr>
				<tr>
					<td align="right">Date of Birth</td>
					<td><input type="date" name="person_birth" autocomplete="On" size="60" required="required" value="<?php echo $person_dob; ?>"></td>
				</tr>
				<tr>
					<td align="right">Mobile No:</td>
					<td><input type="phone" name="person_mobile" autocomplete="On" size="60" required="required" value="<?php echo $person_mobile; ?>"></td>
				</tr>
				<tr>
					<td align="right">Email Address</td>
					<td><input type="email" name="person_email" autocomplete="On" size="60" required="required" value="<?php echo $person_email; ?>"></td>
				</tr>
				<tr>
					<td align="right">Residence</td>
					<td><input type="text" name="person_res" autocomplete="On" size="60" required="required" value="<?php echo $person_res; ?>"></td>
				</tr>
				<tr>
					<td align="right">Home Town</td>
					<td><input type="text" name="person_town" size="60" required="required" value="<?php echo $person_home_town; ?>"></td>
				</tr>
				<tr>
					<td align="right">Country</td>
					<td><input type="text" name="person_country" autocomplete="On" size="60" required="required" value="<?php echo $person_country; ?>"></td>
				</tr>
				<tr>
					<td align="right">Your Image</td>
					<td><input type="file" name="person_pic" autocomplete="On" size="60" required="required" value="<?php echo $person_image; ?>"></td>
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

	$profile_id = $person_id;
	$person_name = $_POST['person_name'];
	$person_lname = $_POST['person_surname'];
	$person_sex = $_POST['person_sex'];
	$person_prof = $_POST['person_profession'];
	$person_dob = $_POST['person_birth'];
	$person_identity = $_POST['person_identity'];
	$person_mobile = $_POST['person_mobile'];
	$person_email = $_POST['person_email'];
	$person_residence = $_POST['person_res'];
	$person_home_town = $_POST['person_town'];
	$person_country = $_POST['person_country'];

	//Picture Collection

	$person_image = $_FILES['person_pic']['name'];
	$person_image_tmp = $_FILES['person_pic']['tmp_name'];

	move_uploaded_file($person_image_tmp, "people_images/$person_image");

	$update_profile = "UPDATE people SET fname ='$person_name', lname='$person_lname', sex='$person_sex', profession='$person_prof', dob='$person_dob', national_id='$person_identity', mobile_no='$person_mobile', email='$person_email', residence='$person_residence', home_town='$person_home_town', country='$person_country', image='$person_image' WHERE id ='$profile_id'";

	$run_update = mysqli_query($connection, $update_profile);

	if (isset($run_update)) {
		echo "

				<div class='alert alert-success' role='alert'style='margin-top: -30px;'>
                     <strong>Success:</strong> Profile was successful updated.
                 </div>

			";
	} else {

		echo "

					<div class='alert alert-warning' role='alert'style='margin-top: -30px;'>
                        <strong>Warning:</strong> Profile was not successful updated.
                    </div>


			";
	}

}
?>