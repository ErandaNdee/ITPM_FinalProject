<?php
include_once 'Database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE order_db set Id='" . $_POST['Id'] . "', Date='" . $_POST['Date'] . "', Address='" . $_POST['Address'] . "', Email='" . $_POST['Email'] . "' ,Customer='" . $_POST['Customer'] . "' ,Size='" . $_POST['Size'] ."' ,Qty='" . $_POST['Qty'] . "' ,Colour='" . $_POST['Colour'] . "' ,Style='" . $_POST['Style'] . "' ,OFF='" . $_POST['OFF'] .  "' WHERE Id='" . $_POST['Id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM order_db WHERE Id ='" . $_GET['Id'] . "'");
$row= mysqli_fetch_array($result);
?>



<!doctype html>
<html lang="en">

<style>
input[type=Date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}	
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #F6BE00;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}



</style>

  <head>
  	<title>Update</title>
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
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="#">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Portfolio</a>
	          </li>
	          <li>
              <a href="#">Contact</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  </p>
	        </div>

	      </div>
    	</nav>

       
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    <div> 
    <center><h3>Update the Delivery Details</h3></center>  
    <form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Retrive data</a>
</div>
Customer ID: <br>
<input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>">
<input type="text" name="Id"  value="<?php echo $row['Id']; ?>">
<br>
Date: <br>
<input type="Date" name="Date" class="txtField" value="<?php echo $row['Date']; ?>">
<br>
Address:<br>
<input type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
<br>
E-mail:<br>
<input type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
Customer:<br>
<input type="text" name="Customer" class="txtField" value="<?php echo $row['Customer']; ?>">
<br>
Size:<br>
<input type="text" name="Size" class="txtField" value="<?php echo $row['Size']; ?>">
<br>
Qty:<br>
<input type="text" name="Qty" class="txtField" value="<?php echo $row['Qty']; ?>">
<br>
Colour:<br>
<input type="text" name="Colour" class="txtField" value="<?php echo $row['Colour']; ?>">
<br>
Style:<br>
<input type="text" name="Style" class="txtField" value="<?php echo $row['Style']; ?>">
<br>
OFF:<br>
<input type="text" name="OFF" class="txtField" value="<?php echo $row['OFF']; ?>">
<br>
<br>
<center><input type="submit" name="submit" value="Submit" class="buttom"></center>

</form>

		</div>   

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>