<?php

//require_once 'includes/db.php';

//Stuff to be collected
/*
1. Name
2. Surname
3. Email
4. Mobile No
5. Profession
6. Date of Birth
7. Sex
8. natinal ID
9. Residence
10. Home town
11. Country
12. Image

 */

?>
<head>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
</head>

		<form action="" method="POST" class="form-control" enctype="multipart/form-data">
			<table class="table table-striped table-dark" width="auto" border="2" align="center">
				<tr align="center">
					<td colspan="8"><h2>Add New Person</h2></td>
				</tr>
				<tr>
					<td align="right">Name</td>
					<td><input type="text" name="person_name" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Surname</td>
					<td><input type="text" name="person_surname" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Sex</td>
					<td><input type="text" name="person_sex" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">National ID</td>
					<td><input type="text" name="person_identity" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td><input type="text" name="person_profession" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Date of Birth</td>
					<td><input type="date" name="person_birth" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Mobile No</td>
					<td><input type="phone" name="person_mobile" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Email Address</td>
					<td><input type="email" name="person_email" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Residence</td>
					<td><input type="text" name="person_res" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Home Town</td>
					<td><input type="text" name="person_town" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Country</td>
					<td><input type="text" name="person_country" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr>
					<td align="right">Your Image</td>
					<td><input type="file" name="person_pic" autocomplete="On" size="60" required="required"></td>
				</tr>
				<tr align="center">
					<td colspan="8">
						<input type="submit" name="add_person" class="btn-primary btn-sm" value="Add Profile">
					</td>
				</tr>
			</table>
		</form>
<?php

include 'includes/db.php';

if (isset($_POST['add_person'])) {

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

	$insert_person = "INSERT INTO people(fname, lname, sex, profession, dob, national_id, mobile_no, email, residence, home_town, country, image) VALUES('$person_name', '$person_lname', '$person_sex', '$person_prof', '$person_dob', '$person_identity', '$person_mobile', '$person_email', '$person_residence', '$person_home_town', '$person_country', '$person_image')";

	$run_person = mysqli_query($connection, $insert_person);

	if ($run_person) {
		echo "

				<div class='alert alert-success' role='alert'style='margin-top: -30px;'>
                     <strong>Success:</strong> Profile was successful added.
                 </div>

			";
	} else {

		echo "

					<div class='alert alert-success' role='alert'style='margin-top: -30px;'>
                        <strong>Warning:</strong> Profile was not successful added.
                    </div>


			";
	}

}
?>