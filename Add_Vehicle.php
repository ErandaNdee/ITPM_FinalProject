<?php
include 'connect1.php';
if(isset($_POST['submit'])) {
    $v_name=$_POST['v_name'];
    $v_number=$_POST['v_number'];
    $R_date=$_POST['R_date'];
    $O_name=$_POST['O_name'];
    $O_phoe=$_POST['O_phoe'];
    $v_type=$_POST['v_type'];
   
  
    $sql="insert into `vehicle` (v_name,v_number,R_date,O_name,O_phoe,v_type)
    values('$v_name','$v_number',' $R_date','$O_name','$O_phoe','$v_type')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:Display_Vehicle.php');
    }else{
        die(mysqli_error($con)); 
    }
      
}

?><!doctype html>
<html lang="en">
  <head>
  	<title>Add Vehicle</title>
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
                    <a href="Display_Vehicle.php">Available vehicle</a>
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
            <form method= "post">
  <div class="form-group">
    <label style="color:white" >Vehicle Name</label>
    <input type="text" class="form-control"  placeholder="Enter Vehicle Name" name="v_name">
</div>
<div class="form-group">
    <label style="color:white" >Vehicle Number</label>
    <input type="text" class="form-control"  placeholder="Enter Vehicle Number" name="v_number">
</div>
<div class="form-group">
    <label style="color:white">Register Date</label>
    <input type="Date" class="form-control"  placeholder="Register Dates" name="R_date">
</div>
<div class="form-group">
    <label style="color:white">Owner Name</label>
    <input type="text" class="form-control"  placeholder="Owner Namel" name="O_name">
</div>
<div class="form-group">
    <label style="color:white">Owner Phone</label>
    <input type="Number" class="form-control"  placeholder="Owner Phone" name="O_phoe">
</div>
<div class="form-group">
    <label style="color:white">Vehicle Type</label>
    <input type="text" class="form-control"  placeholder="Vehicle Type" name="v_type">
</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>    
</div>
<script src="js/home.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>