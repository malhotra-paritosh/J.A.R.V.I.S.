<?php
require_once("config.php");
 
?>
<?php 
$checkbox = $_REQUEST['chk1'];
if($_POST["Submit"]=="Submit")
{
	//doesnt work if no check box selected
     echo "Email sent to these SID </br>";
for($i=0;$i<sizeof($checkbox);$i++)
{
	echo  $checkbox[$i].'</br>';
	$sid= $checkbox[$i];
	?>

	<?php
//$sid = $_POST['sid'];
//echo $teacher;
$query = mysqli_query($con,"SELECT * FROM student where sid='".$sid."'");
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
<h3> Parking sticker generated.   </h3>
<?php

}
$to = $email;
$subject = "Parking Sticker Generated";
//echo $_GET['_id'];
$message = "
<html>
<head>
<title>PEC parking Sticker</title>
</head>
<body>
Dear ".$name." 
<p>Please collect your parking sticker from GUARD Office.</p>
<table>
<tr>
</tr>
</table>
Make sure the sticker is on the registered vehicle only
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
	<form name="insert" action="sendmail.php" method="post">
		    <input type="hidden" name="sid" class="form-control" id="sid" value="<?php echo $sid ?>" aria-describedby="emailHelp" placeholder="Enter SID">

	</form>
	<?php

?>
	<?php
	//query

}

}
?>