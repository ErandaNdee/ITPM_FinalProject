<!DOCTYPE html>
<?php
include_once 'Database.php';
if(isset($_POST['save']))
{	 
	 $Date = $_POST['Date'];
	 $Address = $_POST['Address'];
	 $Email = $_POST['Email'];
	 $Customer = $_POST['Customer'];
     $Size = $_POST['Size'];
     $Qty = $_POST['Qty'];
     $Colour = $_POST['Colour'];
     $Style = $_POST['Style'];
     $OFF = $_POST['OFF'];
	 $sql = "INSERT INTO Order_db (Date,Address,Email,Customer,Size,Qty,Colour,Style,OFF)
	 VALUES ('$Date','$Address','$Email','$Customer','$Size','$Qty','$Colour','$Style','$OFF')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>

  <head>
  	<title>Insert</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/Style.css">
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
    <a class="active" href="#home">Delivery Order</a> 
    <center><h3>Delivery Order</h3></center> 
	<form method="post" action="">
	<center>
		<table width="80%">
 <tr> 
   <th>       
   <div class="form-group">
    <label style="color:white">Delivery Date</label>
    <input type="Date" class="form-control"  placeholder="Date" name="Date" width="80%" required><br>
   </div>
</th>
<th>
<tr> 
   <th>       
   <div class="form-group">
    <label style="color:white">Delivery Address</label>
    <input type="text" class="form-control"  placeholder="Enter Address" name="Address" width="80%" required ><br>
   </div>

</th>
<th>
 
<tr> 
   <th>       
   <div class="form-group">
    <label style="color:white">E-mail</label>
    <input type="Email" class="form-control"  placeholder="Enter E-mail" name="Email" width="80%" required ><br>
   </div>

</th>  
</tr> 
</table>
</table>
<center>
<table width="80%">
 <tr> 
   <th>    
    <div class="form-group">
     <label style="color:white" >Customer</label>
       <select name="Customer_N" id="Customer">
          <option value="VS PINK">VS PINK</option>
          <option value="VS LOGO">VS LOGO</option>
          <option value="ME UNDIS">ME UNDIS</option>
          <option value="GAP">GAP</option>
        </select>
       </div>
</th>
<th>
  <div class="form-group">
    <label width="80%" style="color:white" >Size</label>
       <select name="Size_C" id="Size">
          <option value="S">Small</option>
          <option value="M">Mediam</option>
          <option value="L">Large</option>
          <option value="XL">Extra Large</option>
          <option value="XXL">Double Extra Large</option>
        </select>
    </div>
</th>

<th>
<div class="form-group">
    <label style="color:white">Qty</label>
    <input type="text" class="form-control"  placeholder="Enter Quantity" name="Qty" required >
</div>
</th>
</tr>
<tr>
 <th>   
  <div class="form-group">
      <label style="color:white">Colour Code</label>
      <input type="text" class="form-control"  placeholder="Enter Colour Code" name="Colour" required >
   </div>
</th> 
<th>
 <div class="form-group">
    <label style="color:white">Style</label>
    <input type="Number" class="form-control"  placeholder="Enter Style" name="Style" required >
  </div>
</th>
<th>
  <div class="form-group">
    <label style="color:white" >OFF</label>
       <select name="OFF" id="OFF">
          <option value="100.1%"> OFF  100.1%</option>
          <option value="100.2%"> OFF  100.2%</option>
          <option value="100.3%"> OFF  100.3%</option>
          <option value="100.4%"> OFF  100.4%</option>
          <option value="100.5%"> OFF  100.5%</option>
        </select>
    </div>
</th>
</tr>
</table>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </center>
</form>  

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>