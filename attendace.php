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
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=""></a>
	            
                <li>
                    <a href="dashboard.php">Leave </a>
                </li>
                <li>
                    <a href="attendace.php">Attendance</a>
                </li>
				<li>
                    <a href="profile.php">Profile</a>
                </li>
				
	            </ul>
	          </li>
	          
              

	        	
	  

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
             
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
					<li class="nav-item px-2"><a href="#" class="nav-link active">User :  <?php echo $_SESSION['email']?></a></li>
					
				</ul>
              <ul class="nav navbar-nav ml-auto">
			  
                <li class="nav-item active">
                    <a class="nav-link" href="home1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendace.php">Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Leave</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown mr-3">
						
						<li class="nav-item">
							<a href="logout.php" class="nav-link"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</li>
				</ul>
				
              </ul>
            </div>
          </div>
        </nav>

	
	
	

						<h5>Attendance IN And OUT</h5>
				
					<form action="" method="post">
						<div class="form-group">
							
                         
				<input type="hidden" name="email" value="<?php echo $_SESSION['email']?>">
						
						
						
						
			
				
                           
                <button name="IN" id="IN" class="click" class ="btn btn-primary" > IN</button>
                

                <button name="Out" class="click" class ="btn btn-danger"> OUT</button>
                
               
                	</div>
			</form>
		
	
	<script src="admin/js/home.js"></script>

<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/popper.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/main.js"></script>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>
</body>
</html>
<?php 
	if (isset($_POST['IN'])){
		$email = $_POST['email'];
		
		//ID, name, inTime, OutTime, Date

		$sql = "INSERT INTO attendance(email,InTime,Date)VALUES('$email', now(),now())";
        
		$run = mysqli_query($con,$sql);
        
		if($run == true){
			
			echo "<script> 
					alert('Leave Requested, Please wait for approval status');
					window.open('attendace.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Apply');
			</script>";
		}

	}
    if (isset($_POST['Out'])){
		$email = $_POST['email'];
		
		//ID, name, inTime, OutTime, Date

		$sql = "update attendance set  OutTime = now() WHERE email='$email' and Date";

		$run = mysqli_query($con,$sql);

		if($run == true){
			
			echo "<script> 
					alert('Leave Requested, Please wait for approval status');
					window.open('attendace.php');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Apply');
			</script>";
		}
	}

    
    
	
 ?>

