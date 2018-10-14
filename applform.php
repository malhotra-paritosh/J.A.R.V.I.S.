<?php
require_once("config.php");
error_reporting(0);
?>
<link rel="stylesheet" href="css.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>J.A.R.V.I.S.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >J.A.R.V.I.S</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li ><a href="parking_instructions.pdf">Info</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="stulogin.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
$sid = $_REQUEST['sid'];
$password = $_REQUEST['password'];

?>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">

            <p>       <a href="change_password.php?_id=<?php echo $sid; ?>&_password=<?php echo $password; ?>">Change Password</a>
            </p>

        </div>
        <div class="col-sm-8 text-left">
            <form action="2ndform.php" method="post" >
                <h1>Select Designation
                    <?php
                    $sid = $_REQUEST['sid'];
                    ?>
                    <?php
                    $query = mysqli_query($con,"SELECT * FROM student where sid='".$sid."'");
                    //echo " $sid ";
                    ?>
                    <?php
                    while($row=mysqli_fetch_array($query))
                    {

                        $email= $row['email'];
                        $sid=$row['sid'];
                        $password=$row['password'];
                        $name=$row['name'];
                        echo $name;
                    }
                    ?></h1>

                <div class="contentform">

                    <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>
                    <ul><div >
                            <button type="button" class="topdown"><a href="second_form.php">Student</a></button>
                            <div class="validation"></div>
                        </div></ul>
                    <ul><div >
                            <button type="button" class="topdown"><a href="fac_staff_form.php">Faculty</a></button>
                            <div class="validation"></div>
                        </div>
                    </ul>
                    <ul><div >
                            <button type="button" class="topdown"><a href="fac_staff_form.php">Staff</a></button>
                            <div class="validation"></div>
                        </div>
                    </ul>
                    <ul><div >
                            <button type="button" class="topdown"><a href="othersform.php">Others</a></button>
                            <div class="validation"></div>
                        </div>

                    </ul>
            </form>
        </div>

    </div>
    <div class="col-sm-2 sidenav">
        <div >
            <button type="button" class="btn "><a href="applform.php"> User Application form </a></button>
        </div>
        <div >
            <button type="button" class="btn "><a href="car_form.php" >Car reg</a></button>
        </div>
        <div >
            <button type="button" class="btn "><a href="bike_form.php" >Bike reg</a></button>
        </div>
    </div>
</div>
</body>
