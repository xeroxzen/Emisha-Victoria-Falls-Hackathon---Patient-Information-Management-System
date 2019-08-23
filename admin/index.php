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
    <style type="text/css">
        h3, a{
            text-decoration: none;
            font-size: 0.8em;
        }
    </style>
</head>
<body>

    <div class="main">
                <a href="index.php"><i class="fa fa-home "></i>Home</a>
                <a href="index.php?add_patient"><i class="ti ti-thought"></i>Add New Patient</a>
                <a href="index.php?view_patient"><i class="fa fa-spinner"></i>All Patient</a>
                <a href="logout.php"><i class="fa fa-lock "></i>Admin Logout</a>
            </div>

        <div class="container">
                <h2 style="margin-bottom: 30px;">InnovEmisha Health System</h2>
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/african-doctor.jpg" alt="">
                </div>
                    <ul class="list-group">
                        <h2 class="list-group-item">Menu Options</h2>
                        <h3 class="list-group-item list-group-item-primary"><a href="/patient-management-system/admin/add_patient.php">Add New Patient to the System</a></h3>
                        <h3 class="list-group-item list-group-item-secondary"><a href="/patient-management-system/admin/view_patients.php">View All Patients in the System</a></h3>
                        <!-- <h3 class="list-group-item list-group-item-light"><a href="">This is a light list group item</a></h3> -->
                        <!-- <h3 class="list-group-item list-group-item-dark">This is a dark list group item</h3> -->
                    </ul>
            </div>

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

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>