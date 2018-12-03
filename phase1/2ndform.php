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
$SID = $conn->real_escape_string($_POST['SID']);
$SIDp = $conn->real_escape_string($_FILES['SIDp']);
$Course = $conn->real_escape_string($_POST['Course']);
$image= $conn->real_escape_string($_FILES['image']);

$image=$_FILES["image"]["SID"];

//Get the content of the image and then add slashes to it
$imagetmp=addslashes(file_get_contents($_FILES['image']['SID']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table(image,name) VALUES('$imagetmp','$image')";

mysql_query($insert_image);


$sql= "INSERT into student_table (SID,SID_photocopy,Course,image) VALUES ('".SID."','".SIDp."','".$Course."','".$image."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>