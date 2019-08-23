<?php

//require_once 'includes/db.php';

//Stuff to be collected
/*

1. patient_id
2 First Name
3. Last Name
4. Sex
5. Date of Birth
6. Home Address
7. Contact Details
8. Condition

 */

?>

<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Registration Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
                <a href="index.php"><i class="fa fa-home "></i>Home</a>
                <a href="index.php?add_patient"><i class="ti ti-thought"></i>Add New Patient</a>
                <a href="index.php?view_patient"><i class="fa fa-spinner"></i>All Patient</a>
                <a href="logout.php"><i class="fa fa-lock "></i>Admin Logout</a>
        <div class="container">
                <h2 style="margin-bottom: 30px;">InnovEmisha Health System</h2>
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/african-doctor.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="index.php?add_patient" method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        <h2>Patient Registration Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="patient_fname" id="name" required/>
                            </div>
                             <div class="form-group">
                                <label for="last name">Last Name :</label>
                                <input type="text" name="patient_lname" id="name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                        	<div class="form-group">
                                <label for="father_name">Date of Birth :</label>
                                <input type="date" name="date_of_birth" id="date" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Date of Visit :</label>
                                <input type="date" name="date_of_visit" id="date" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Home Address :</label>
                            <input type="text" name="home_address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Sex :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="patient_sex" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="patient_sex" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="us">America</option>
                                        <option value="uk">English</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div> -->

                        </div>
                        <div class="form-group">
                            <label for="social-security">National ID :</label>
                            <input type="text" name="national_id" id="pincode">
                        </div>
                        <!-- <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="computer">Computer Operator & Pragramming Assistant</option>
                                    <option value="desiger">Designer</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="phone">Phone Number :</label>
                            <input type="phone" name="patient_contacts" id="phone" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address :</label>
                            <input type="email" name="patient_email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="text">Condition :</label>
                            <input type="text" name="patient_condition" id="phone" />
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Patient Form" class="submit" name="submit_patient" id="submit" />
                        </div>
                    </form>
<?php

// include 'includes/db.php';

// if (isset($_GET['add_patient'])) {
//     include 'add_patient.php';
// }

// if (isset($_GET['view_patient'])) {
//     include 'view_patient.php';
// }
// if (isset($_GET['edit_patient'])) {
//     include 'edit_patient.php';
// }
// if (isset($_GET['delete_patient'])) {
//     include 'delete_patient.php';
// }
?>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php

include 'includes/db.php';

if (isset($_POST['submit_patient'])) {

	$patient_fname = $_POST['patient_fname'];
	$patient_lname = $_POST['patient_lname'];
	$patient_dob = $_POST['date_of_birth'];
	$patient_sex = $_POST['patient_sex'];
	$patient_identity = $_POST['national_id'];
	$patient_contacts = $_POST['patient_contacts'];
	$patient_email = $_POST['patient_email'];
	$patient_address = $_POST['home_address'];
	$patient_condition = $_POST['patient_condition'];
	$patient_visit = $_POST['date_of_visit'];


	$insert_patient = "INSERT INTO patients(fname, lname, sex, national_id, date_of_birth, home_address, contact_details, patient_email, patient_condition, date_of_visit) VALUES('$patient_fname', '$patient_lname', '$patient_sex', '$patient_dob', '$patient_identity', '$patient_contacts', '$patient_email', '$patient_address', $patient_condition, $patient_visit)";

	$run_patient = mysqli_query($connection, $insert_patient);

	if ($run_patient) {
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