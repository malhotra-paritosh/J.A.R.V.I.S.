<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";
$conn = new mysqli($servername, $username, $password, $dbname);
$tov = $conn->real_escape_string($_POST['tov']);
$Vehiclem = $conn->real_escape_string($_POST['Vehiclem']);
$vehicle_name=$conn->real_escape_string($_POST['Vehicle_name']);
$RCno = $conn->real_escape_string($_POST['RCno']);
$Rcimage="[BLOB-44B]";
//$Rcimage= $conn->real_escape_string($_FILES['rimage']['name']);
$sql = "INSERT INTO car_data (TypeofVehicle,Vehicle_Manufacturer,RC_Number,Vehicle_Name,RC_Photocpy) VALUES ('".$tov."','".$Vehiclem."','".$RCno."','".$vehicle_name."','".$Rcimage."')";
$target= "images/".basename($Rcimage);
//move_uploaded_file($_FILES['rimage']['tmp_name'], $target);
if ($conn->query($sql) === TRUE) {
    $sid=$_REQUEST['sid'];
    $password=$_REQUEST['password'];
    include 'home.php';
    echo '<script language="javascript">';
    echo 'alert("Request Succesfully Submitted")';
    echo '</script>';
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
