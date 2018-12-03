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
$sql="SELECT * FROM student_table INNER JOIN car_data ON student_table.SID=car_data.ID";
$result=mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="css.css">
<!DOCTYPE html>
<html>
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
        table {
            width: 120%;
            border:4px solid black;
        }
        td {text-align:center}
        tr {font-weight:900;
            border-color:blacks;
            border-width:4px;
        }
        th {font-style:italic;
            height: 50px;
            text-align:center;
        }
        t{
            text-align:center;
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
                <li><a href="parking_instructions.pdf">Info</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="stulogin.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<p></p>
<hr>

    <h1><tr>
            <th colspan="11">Students Applied for Vehicle Stickers</th>
        </tr></h1>

    <table align="Center" border="1px" style="width:90%; line-height:40px;">
        <t class="form-group">
            <th > SID</th>
            <th> Name</th>
            <th> Course</th>
            <th> Designation</th>
            <th col span="2">Type Of Vehicle</th>
            <th>Vehicle Manufacturer</th>
            <th>Vehicle Name</th>
            <th> RC Number</th>
            <th>User Image</th>
            <th>SID Photocopy</th>
            <th>RC Photocopy</th>
            <th> Checkbox </th>
        </t>
        <form action=sendqr.php method="post">
        <?php
            while($rows=mysqli_fetch_array($result))
            {
         ?>
                <tr>
                    <td><?php echo $rows['SID']; ?> </td>
                    <td><?php echo $rows['Name']; ?> </td>
                    <td><?php echo $rows['Course']; ?> </td>
                    <td><?php echo $rows['Designation']; ?> </td>
                    <td><?php echo $rows['TypeofVehicle']; ?> </td>
                    <td><?php echo $rows['Vehicle_Manufacturer']; ?> </td>
                    <td><?php echo $rows['RC_Number']; ?> </td>
                    <td><?php echo $rows['Vehicle_Name']; ?> </td>

                    <td><?php
                        echo "<a  href='images/".$rows['image']."' target=\" _blank\" >" ; echo "<p>click</p>"; ?></td>
                    <td><?php
                        echo "<a  href='images/".$rows['SID_Photocopy']."' target=\" _blank\" >" ; echo "<p>click</p>"; ?></td>
                    <td><?php
                        //echo "<a  href='images/".$rows['RC_Photocpy']."' target=\" _blank\" >" ; echo "<p>click</p>";
                        echo "<a  href='images/rcimage_Nitin%20Kashyap.jpeg' target=\" _blank\" >" ; echo "<p>click</p>"; ?>
                    </td>
                    <td>
                        <?php
                        echo '<input type="checkbox" name="chk1[]" class="checkbox" value="'.$rows['SID'].'" id="checkbox" />'."Accept".'</br>'; ?>
                    </td>
                </tr>
        <?php
            }
        ?>
        
    
    </table>
    <input type ="submit" name="Submit" value="Submit" class="form-control"  >

    </form>
</body>
</html>