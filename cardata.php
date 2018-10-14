<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tov = $conn->real_escape_string($_POST['tov']);
$Vehiclem = $conn->real_escape_string($_POST['Vehiclem']);
$vehicle_name=$conn->real_escape_string($_POST['Vehicle_name']);
$RCno = $conn->real_escape_string($_POST['RCno']);
$sql = "INSERT INTO car_data (TypeofVehicle,Vehicle_Manufacturer,RC_Number,Vehicle_Name) VALUES ('".$tov."','".$Vehiclem."','".$RCno."','".$vehicle_name."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?
ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'http://www.google.com'; // this can be set based on whatever

// clear out the output buffer
while (ob_get_status())
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );
?>
