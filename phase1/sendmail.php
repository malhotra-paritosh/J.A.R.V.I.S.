<?php
require_once("config.php");
 
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
<!DOCTYPE html>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="stulogin.php">Home</a>
		</div>

</nav>
<?php
$sid = $_POST['sid'];
//echo $teacher;
$query = mysqli_query($con,"SELECT * FROM student where sid='".$_POST['sid']."'");
while($row=mysqli_fetch_array($query))
{ ?>
<!--<option value="<?php echo $row['dept_id'];?>"><?php echo $row['dept_name'];?></option>-->
<?php
$email= $row['email'];
$sid=$row['sid'];
$password=$row['password'];
$name = $row['name'];
//echo $email.$password.$name;
?>
<h3> Your current password has been mailed to your registered email id.   </h3>
<?php

}
$to = $email;
$subject = "Here is the password for you Account";
//echo $_GET['_id'];
$message = "
<html>
<head>
<title>Forgot Password</title>
</head>
<body>
Dear ".$name." 
<p>The password for your account for PEC Parking System is :-</p>
<table>
<tr>
<th>".$password."</th>
</tr>
</table>
Please change your password ASAP via change password button at the Home Page.
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <pec_parking@pec.edu.in>' . "\r\n";


mail($to,$subject,$message,$headers);
?>