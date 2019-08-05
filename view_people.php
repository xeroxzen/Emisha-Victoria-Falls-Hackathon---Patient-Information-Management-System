
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <metaname="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>

    <!--<link rel="stylesheet" href="style/bootstrap.min.css"-->
    <link rel="stylesheet" type="text/css" href="styling/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styling/main.css">
</head>
<body>
<table width="900" align="center" class="table table-striped table-dark">
    <tr align='center'>
        <td colspan='12'><h2>View All Profiles through here</h2></td>
    </tr>

    <tr align='' border='1' bgcolor='green'>
        <th>Number </th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Profession</th>
        <th>D.O.B</th>

        <th>Phone No</th>
        <th>Email</th>
        <th>Home Address</th>
        <th>Home Town</th>
        <th>Image</th>
    </tr>

    <?php
include 'includes/db.php';

global $connection;
$query = 'SELECT * FROM people';

//For People
$result = mysqli_query($connection, $query);
$i = 0;

while ($row_people = mysqli_fetch_array($result)) {
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
	++$i;?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $person_fname; ?></td>
        <td><?php echo $person_lname; ?></td>
        <td><?php echo $person_sex; ?></td>
        <td><?php echo $person_prof; ?></td>
        <td><?php echo $person_dob; ?></td>
        <td><?php echo $person_mobile ?></td>
        <td><?php echo $person_email ?></td>
        <td><?php echo $person_res ?></td>
        <td><?php echo $person_home_town ?></td>
        <td><img src="people_images/<?php echo $person_image; ?>" width="70" height="70"></td>

        <!--td><a href ='index.php?edit_person=<?php #echo $person_id; ?>' class="btn btn-sm btn-warning">Edit</a></td-->
        <!--td><a href ='delete_person.php?delete_person=<?php #echo $person_id; ?>' class="btn btn-sm btn-danger">Delete</a></td-->
    </tr>

    <?php
}
?>
</table>

</body>
</html>
