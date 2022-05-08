<?php
include 'connect1.php';

?>  


<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
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
                    <a href="#">Available Riders</a>
                </li>
                <li>
                    <a href="Display_Vehicle.php">Available vehicle</a>
                </li>
                <li>
                    <a href="#">Route Histry</a>
                </li>
              </ul>
	          </li>
              <li>
              <a href="#pagSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leave</a>
              <ul class="collapse list-unstyled" id="pagSubmenu">
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
              <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
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
 
 <button class= "btn btn-primary my-5"><a href="user.php"
 class="text-light " style="color:red" >Add User</a>

</button>



<table class="table table-striped" style="color:black" >
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last LastName</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">NIC Number</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">JobTitle</th>
      <th scope="col">Password</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
   <?php

   $sql="Select * from reg";
   $result=mysqli_query($con,$sql);
   if($result){
      while($row=mysqli_fetch_assoc($result)){
          $ID=$row['ID'];
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

          echo '<tr>
          <th scope="row">'.$ID.'</th>
          <td>'.$FirstName.'</td>
          <td>'.$LastName.'</td>
          <td>'.$Address.'</td>
          <td>'.$Email.'</td>
          <td>'.$Phone.'</td>
          <td>'.$NICNumber.'</td>
          <td>'.$DateOfBirth.'</td>
          <td>'.$Gender.'</td>
          <td>'.$JobTitle.'</td>
          <td>'.$Password.'</td>
          <td>
<button class ="btn btn-primary"><a href = "Update1.php? updateid='.$ID.'" style="color:white">Update</a></button>
<button class ="btn btn-danger"><a href = "Delete.php? deleteid='.$ID.'" style="color:white">Delete</a></button>


</td>
          </tr>';
      }
       


   }



?>


  </tbody>
</table>
</div>
    <script src="js/home.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>