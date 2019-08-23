
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <metaname="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients</title>

    <link rel="stylesheet" href="styling/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="styling/css/materialize.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="styling/main.css"> -->
</head>
<body class="container-fluid">
<table class="table table-striped table-dark">
    
  <thead>
    <td align="center" colspan="15"><h3>Patients In The System</h3></td>
    <tr align="">
      <th>No:</th>
      <th scope="col">Surname</th>
      <th>Name</th>
      <th>Sex</th>
      <th>Date of Birth</th>
      <th>Home Address</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Illness</th>
      <th>Date of Visit</th>
    </tr>
  </thead>

    <?php
include 'includes/db.php';

global $connection;
$query = 'SELECT * FROM patients';

//For patient
$result = mysqli_query($connection, $query);
$i = 0;

while ($row_patient = mysqli_fetch_array($result)) {
	$patient_fname = $row_patient['lname'];
	$patient_lname = $row_patient['fname'];
	$patient_sex = $row_patient['sex'];
    $patient_address = $row_patient['home_address'];
    $patient_contacts = $row_patient['contact_details'];
    $patient_email = $row_patient['patient_email'];
    $patient_age = $row_patient['date_of_birth'];
    $patient_condition = $row_patient['patient_condition'];
    $patient_visit = $row_patient['date_of_visit'];
	
	++$i;?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $patient_fname; ?></td>
        <td><?php echo $patient_lname; ?></td>
        <td><?php echo $patient_sex; ?></td>
        <td><?php echo $patient_age; ?></td>
        <td><?php echo $patient_address; ?></td>
        <td><?php echo $patient_contacts; ?></td>
        <td><?php echo $patient_email; ?></td>
        <td><?php echo $patient_condition; ?></td>
        <td><?php echo $patient_visit; ?></td>
    </tr>

    <?php
}
?>
</table>

</body>
</html>
