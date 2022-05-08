
<?php 
	include('DB/head.php'); 
	session_start();

	if (isset($_SESSION['email'])) {
		
	}
	else{
		header('location:index.php');
	}

?>


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

	
	
	
			
			<table id="customer_data" class="table table-bordered table-hover table-striped">
							<thead>
								<th>ID</th>
								<th>email</th>
								<th>InT ime</th>
								<th>Out Time</th>
                <th>Date</th>
							
								
							</thead>
							 <tbody>
							 	<?php 
                                 
									$sql = "SELECT * FROM simpleave.attendance ";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['email']; ?></td>
							 		<td><?php echo $result['InTime']; ?></td>
							 		<td><?php echo $result['OutTime']; ?></td>
                   <td><?php echo $result['Date']; ?></td>
                                     
							 		
							 		<td>
							 			<?php 
							 			
							 	$cnt++;	}
							 		 ?>


                              
							 		</td>
							 	</tr>

							 </tbody>
						</table>
            
			</div>
		</div>

	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/re.js"></script>
  <script>
  

	CKEDITOR.replace('editor1');
  </script>
</body>
</html>

