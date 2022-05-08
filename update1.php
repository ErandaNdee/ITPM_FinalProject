<?php
include 'connect1.php';
$ID=$_GET['updateid'];

$sql="select * from `reg` where id=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $FirstName=$row['FirstName'];
    $LastName=$row['LastName'];
    $Address=$row['Address'];
    $Email=$row['Email'];
    $Phone=$row['Phone'];
    $NICNumber=$row['NICNumber'];
    $DateOfBirth=$row['DateOfBirth'];
    $Gender=$row['Gender'];
    $JobTitle=$row['JobTitle'];
    $Password=$row['Password'];


if(isset($_POST['submit'])) {
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Address=$_POST['Address'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $NICNumber=$_POST['NICNumber'];
    $DateOfBirth=$_POST['DateOfBirth'];
    $Gender=$_POST['Gender'];
    $JobTitle=$_POST['JobTitle'];
    $Password=$_POST['Password'];	
    
    $sql="update `reg` set id=$ID,FirstName='$FirstName',LastName='$LastName',Address='$Address',Email='$Email',Phone='$Phone',NICNumber='$NICNumber',DateOfBirth='$DateOfBirth',
    Gender='$Gender',JobTitle='$JobTitle',Password='$Password' where id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo "update successfully";
       header('location:UserDisply.php');
    }else{
        die(mysqli_error($con)); 
    }
      
}

?><!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
				<div class="p-4 pt-5">
                <img src="img/Logo.png" alt="alternatetext">
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Attendance</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="AttendanceView.php">Attendance View</a>
                </li>
                <li>
                    <a href="repo.php">Attendance Report</a>
                </li>
	            </ul>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Root</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                    <a href="dashboard.php">Leave Request</a>
                </li>
                <li>
                    <a href="Pending_leav.php">Pending Leave </a>
                </li>
                <li>
                    <a href="approve.php">Approved Leave</a>
                </li>
              </ul>
	          </li>
              <li>
             
              <li>
              <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Store</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="#">Available Store</a>
                </li>
                <li>
                    <a href="#">Monthly sale</a>
                </li>
                <li>
                    <a href="#">Sales Report</a>
                </li>
                <li>
                    <a href="#">Return Store</a>
                </li>
              </ul>
	          </li>
              <li>
              <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Monthly Reports</a>
              <ul class="collapse list-unstyled" id="pageSubmenu3">
              <li>
                    <a href="UserDisply.php">View Employee</a>
                </li>
                <li>
                    <a href="user.php">Add Employee</a>
                </li>
                <li>
                    <a href="UserDisply.php">Manage Employee</a>
                </li>
               
              </ul>
	          </li>
	        </ul>

	        <div class="footer">
	        	
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Add_Vehicle.php">Add vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Leave</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Store</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="content">
            <form method= "post">
  <div class="form-group">
    <label style="color:white" >First Name</label>
    <input type="text" class="form-control"  placeholder="Enter First Name" name="FirstName" autocomplete="off" value=<?php  
    echo $FirstName;?>>
</div>
<div class="form-group">
    <label style="color:white" >Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter last Name" name="LastName" autocomplete="off" value=<?php  
    echo $LastName;?>>
</div>
<div class="form-group">
    <label style="color:white">Address</label>
    <input type="text" class="form-control"  placeholder="Enter Address" name="Address" autocomplete="off" value=<?php  
    echo $Address;?>>
</div>
<div class="form-group">
    <label style="color:white">Email</label>
    <input type="Email" class="form-control"  placeholder="Enter Email" name="Email" autocomplete="off" value=<?php  
    echo $Email;?>>
</div>
<div class="form-group">
    <label style="color:white">Phone</label>
    <input type="Number" class="form-control"  placeholder="Enter phone number" name="Phone" autocomplete="off" value=<?php  
    echo $Phone;?>>
</div>
<div class="form-group">
    <label style="color:white">NIC Number</label>
    <input type="Number" class="form-control"  placeholder="Enter NIC number" name="NICNumber" autocomplete="off" value=<?php  
    echo $NICNumber;?>>
</div>
<div class="form-group">
    <label style="color:white">Date Of Birth</label>
    <input type="date" class="form-control"  placeholder="Enter Date Of Birth" name="DateOfBirth" autocomplete="off" value=<?php  
    echo $DateOfBirth;?>>
</div>
<div class="form-group">
    <label style="color:white">Gender</label>
    <input type="text" class="form-control"  placeholder="Enter Gender" name="Gender" autocomplete="off" value=<?php  
    echo $Gender;?>>
</div>
<div class="form-group">
    <label style="color:white">Job Title</label>
    <input type="text" class="form-control"  placeholder="Enter Job Title" name="JobTitle"autocomplete="off" value=<?php  
    echo $JobTitle;?>>
</div>
<div class="form-group">
    <label style="color:white">Password</label>
    <input type="Password" class="form-control"  placeholder="Enter Password" name="Password" autocomplete="off" value=<?php  
    echo $Password;?>>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>    
</div>


<script src="js/home.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>