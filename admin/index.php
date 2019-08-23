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
            </div>

        <div class="container">
                <h2 style="margin-bottom: 30px;">InnovEmisha Health System</h2>
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/african-doctor.jpg" alt="">
                </div>
                    <ul class="list-group">
                        <h3 class="list-group-item">Dapibus ac facilisis in</li>
                        <h3 class="list-group-item list-group-item-primary">This is a primary list group item</h3>
                        <h3 class="list-group-item list-group-item-secondary">This is a secondary list group item</h3>
                        <h3 class="list-group-item list-group-item-success">This is a success list group item</h3>
                        <h3 class="list-group-item list-group-item-danger">This is a danger list group item</h3>
                        <h3 class="list-group-item list-group-item-warning">This is a warning list group item</h3>
                        <h3 class="list-group-item list-group-item-info">This is a info list group item</h3>
                        <h3 class="list-group-item list-group-item-light">This is a light list group item</h3>
                        <h3 class="list-group-item list-group-item-dark">This is a dark list group item</h3>
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