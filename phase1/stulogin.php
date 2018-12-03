<?php
require_once("config.php");
error_reporting(0);
?>
<!DOCTYPE HTML>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="jumbotron">
  <h1 align="center"> J.A.R.V.I.S. </h1>
<form action="stulogin.php?mode=check" method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">SID</label>
    <input type="text" name="sid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter SID">
   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
    <a href="forgot_password.php?id=<?php echo $sid; ?>&password=<?php echo $password; ?>">Forgot Password?</a>
  </div>
  <button type="buttonx" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>

</html>
<?php
if($_GET['mode'] == "check")
{
	$query = mysqli_fetch_row(mysqli_query($con, "select count(*) from student where sid='".$_POST['sid']."' and password='".$_POST['pass']."'"));
	if($query[0] == 1)
	{
		echo "Login successful";
		$query = mysqli_query($con, "select sid,password from student");
		header("location: home.php?sid=".$_POST['sid']."&password=".$_POST['pass']);
		/*while($row = mysqli_fetch_row($query))
		{
			echo $row[0]. " " . $row[1]. "<br>";
		}*/
	}
	else
		echo "Username/Password mismatch";
}
?>
