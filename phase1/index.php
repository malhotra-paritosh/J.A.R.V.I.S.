<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "parking");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    $SIDp = $_FILES['SIDp']['name'];
    // Get text
    $Course = mysqli_real_escape_string($db, $_POST['Course']);
    $SID = mysqli_real_escape_string($db, $_POST['SID']);
    $Sname = mysqli_real_escape_string($db, $_POST['Sname']);
    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT into student_table (SID,Course,image,SID_photocopy,Name) VALUES ('".$SID."','".$Course."','".$image."','".$SIDp."','".$Sname."')";
    // execute query
    mysqli_query($db, $sql);

    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $target = "images/".basename($SIDp);
    move_uploaded_file($_FILES['SIDp']['tmp_name'], $target);
    $sid=$_REQUEST['sid'];
    $password=$_REQUEST['password'];
    include 'car_form.php';
    echo '<script language="javascript">';
    echo 'alert("Request Succesfully Submitted")';
    echo '</script>';
}
$result = mysqli_query($db, "SELECT * FROM student_table");
?>
