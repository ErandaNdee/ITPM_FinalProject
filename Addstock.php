<!doctype html>


<?php
include 'Connect.php';
if(isset($_POST['submit'])) {
    $Customer=$_POST['Customer'];
    $Size=$_POST['Size'];
    $Style=$_POST['Style'];
    $Cord=$_POST['Cord'];
    $Quantity=$_POST['Quantity'];
    $Date=$_POST['Date'];
    $EPF=$_POST['EPF'];
    $Shift=$_POST['Sift'];
    $Section=$_POST['Section'];
    $Unit=$_POST['Unit'];
    $tot=$Unit*$Quantity;
   
    $sql="insert into `stock` (Customer,Size,Style,Cord,Quantity,Date,EPF,Shift,Section,price,TOT_price)
    values('$Customer','$Size','$Style',' $Cord','$Quantity','$Date','$EPF','$Shift','$Section','$Unit','$tot')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script >alert("Add stock success.....")</script>';
    }else{
        die(mysqli_error($con)); 
    }
      
}

?>


<html lang="en">
  <head>
  	<title>ADD new stock</title>
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
        <img src="images/Logo.png" alt="alternatetext">
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
         
     <center>  <h2>ADD STOCK FORM</h2> </center>  
	   
<fieldset >

<div>

</div>

<script>



<<script>
function myFunction() {
  // Get the value of the input field with id="numb"
  let x = document.getElementById("numb").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>


<form action="" method="post"  name="myform" onsubmit="return validateForm()" class="bor1" >
                <br>
<center>
<table width="80%">
 <tr> 
   <th>    
    <div class="form-group">
     <label style="color:Black" >Customer</label><br>
       <select name="Customer" id="Customer" style="width:95%">
          <option value="VS PINK">VS PINK</option>
          <option value="VS LOGO">VS LOGO</option>
          <option value="ME UNDIS">ME UNDIS</option>
          <option value="GAP">GAP</option>
        </select>
       </div>
</th>
<th>
  <div class="form-group">
    <label style="color:black" >Size</label><br>
       <select name="Size" id="Size" style="width:95%">
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
    </div>
</th>

<th>
<div class="form-group">
    <label style="color:black">Style</label>
    <input type="text" class="form-control"  placeholder="Enter Style" name="Style" id="Style" required>
</div>
</th>
</tr>
<tr>
 <th>   
  <div class="form-group">
      <label style="color:black">Cord</label>
      <input type="text" class="form-control"  placeholder="Enter Color cord" name="Cord" required>
   </div>
</th> 
<th>
 <div class="form-group">
    <label style="color:black">Quantity</label>
    <input type="Number" class="form-control"  placeholder="Enter Quantity" name="Quantity" required>
  </div>
</th>
<th>
  <div class="form-group">
      <label style="color:black">Date</label>
      <input type="Date" class="form-control"  placeholder="Date" name="Date" required>
   </div>
</th>
</tr>
<tr>
  <th>
  <div class="form-group">
    <label style="color:Black">Unit price</label>
    <input type="text" class="form-control"  placeholder="Enter Unit price" name="Unit" width="80%" required>
   </div>
</tr> 
</table>
</center>
<br>
 <hr>
</hr><br>
<center>
<table width="80%">
 <tr> 
   <th>       
   <div class="form-group">
    <label style="color:Black">EPF</label>
    <input type="text" class="form-control"  placeholder="Enter EPF" name="EPF" width="80%" required>
   </div>
</th>
<th>
  <div class="form-group">
    <label  style="color:black"> Shift</label><br>
    <label style="color:black">Both :</label> <input type="radio"   name="Sift" id="BOTH" Value="BOTH" required>
    <label style="color:black"> A  Shift :</label> <input type="radio"   name="Sift" id="A" Value="A" >
    <label style="color:black">B  Shift :</label> <input type="radio"   name="Sift" id="B" Value="B" >
  </div>
</th>
<th>
 
    <div class="form-group">
       <label style="color:black" >Section</label>
          <select name="Section" id="Section">
            <option value="1">Section NO 01</option>
            <option value="2">Section NO 02</option>
            <option value="3">Section NO 03</option>
            <option value="4">Section NO 04</option>
            <option value="5">Section NO 05</option>
         </select>
   </div>
</th> 

</tr> 

</table>

  <button type="submit" class="btn btn-primary" name="submit"   >Submit</button>
  </center>
</form>  


>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </fieldset>
  </body>
</html>