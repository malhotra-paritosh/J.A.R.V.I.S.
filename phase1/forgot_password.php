<?php
require_once("config.php");
 
?>
<!DOCTYPE html>
<html >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Forgot Password</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		  
	</head>
	<body>
		<div class="jumbotron">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" >J.A.R.V.I.S.</a>
		</div>

</nav>

<div class="container-fluid">
  

  <div class="col-sm-8">
    <div class="row">
      <div class="col-xs-12">

      		<div ><h3>Enter your SID</h3> </div>
        
		<hr >
		<form name="insert" action="sendmail.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">SID</label>
    <input type="text" name="sid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter SID">
   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
 
    
<td><input type ="submit" name="Submit" value="Get Password" class="form-control"  ></td>
</tr>
</table>



 </form>

</div>
</div>
        
   
  </div><!--/center-->
</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		</div>
	</body>
	
</html>
