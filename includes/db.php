<?php

$connection = mysqli_connect('localhost', 'Andile', '2019', 'peopleData');

if (mysqli_connect_errno()) {
	echo 'Failed to connect to MySQL: ' . mysqli_connect_errno();
}
