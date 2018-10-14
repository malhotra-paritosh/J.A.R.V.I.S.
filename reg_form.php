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
$name = $conn->real_escape_string($_POST['name']);
$father_name = $conn->real_escape_string($_POST['father_name']);
$mobn = $conn->real_escape_string($_POST['mobn']);
$gender = $conn->real_escape_string($_POST['gender']);
$phychl= $conn->real_escape_string($_POST['phychl']);
$dob= $conn->real_escape_string($_POST['dob']);
$faddress= $conn->real_escape_string($_POST['faddress']);
$sql = "INSERT INTO registration_data (name,father_name,gender,mobn,phychl,dob,faddress) VALUES ('".$name."','".$father_name."','".$gender."','".$mobn."','".$phychl."','".$dob."','".$faddress."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>