
<html lang="en">
  <head>
  	<title>View stock</title>
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
         
     <center>  <h2>RE-EDIT FORM </h2> </center>  
	   
<fieldset >

<div>

</div>

<fieldset>
  <form  action=" " method="POST">
<table >    
 <tr>  
 <th style="width:30%">       
  <label style="color:Black" >ORDER ID</label><br>
      <input type="text" name="id" id="id"placeholder="Enter the ID">
</th>   
<th style="width:30%">
     <label style="color:Black"  >Customer</label><br>
       <select name="cus" id="cus" style="width: 68%" >
          <option value="VS PINK">VS PINK</option>
          <option value="VS LOGO">VS LOGO</option>
          <option value="ME UNDIS">ME UNDIS</option>
          <option value="GAP">GAP</option>
        </select>
       
</th>
<th style="width: 10%">

       <label style="color:Black">Size</label><br>
       <select name="size" id="size" style="width: 87%" >
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
        </select>
        <br>
</th>        
</tr>        
<tr>
<th>
        <label style="color:Black"  >Style</label><br>
  <input type="number" name="style" id="style" placeholder="Enter the Style" required>

</th>
<th>

  <label style="color:Black"  >Color cord</label><br>  
  <input type="number" name="cord" id="cord" placeholder="Enter the color code" required>
  
</th>

<th>
  <label style="color:Black"  >Date</label><br>
  <input type="Date" name="Date" id="Date" placeholder="Enter the Date" required> 
</th>
</tr>

</table>
<br>
     <center> <Input type="Submit" name="search" value="Search Data"  class="btn btn-primary"> </center>



</form>

<?php

$con= mysqli_connect('localhost','Shashika','m300#856') ;
$db =mysqli_select_db($con,'itpm_stock');  

 

if(isset($_POST['id']) || isset($_POST['cus']) || isset($_POST['size']) || isset($_POST['style']) ||isset($_POST['cord']) || isset($_POST['Date'])  )
 {
     $id =$_POST['id']; 
     $cus =$_POST['cus']; 
     $size =$_POST['size'];
     $style=$_POST['style'];
     $cord=$_POST['cord'];
     $Date=$_POST['Date'];


     $query="SELECT * FROM stock where id='$id' and Customer='$cus' and Size='$size' and Style='$style' and Cord=' $cord' and Date='$Date'";
     $query_run = mysqli_query($con,$query);


     while($row = mysqli_fetch_array($query_run)){

        ?>
        <form action="Update.php" method="POST">
<table>
 <tr>
  <th>
        <label style="color:black" >ORDER ID</label>
            <input type="text" name="id" readonly value="<?php echo $row['id']?> " readonly/>
  </th> 
  <th>         
        <label style="color:black"  >Customer</label>    
            <input type="text"  name="Customer" value="<?php echo $row['Customer']?>" readonly>
  </th>  
  <th>          
        <label style="color:black" >Size</label><br>    
            <input type="text" name="Size" value="<?php echo $row['Size']?>"  readonly >
  </th>            
  </tr>
  <tr> 
    <th>           
        <label style="color:black" >Style</label><br>  
            <input type="text" name="Style" value="<?php echo $row['Style']?>" readonly>
     </th>
     <th>        
        <label style="color:black" >Color cord</label>     
            <input type="text" name="Cord" value="<?php echo $row['Cord']?>" readonly>
     </th> 
     <th>      
        <label style="color:black" >Quantity</label>   
            <input type="number" name="Quantity" value="<?php echo $row['Quantity']?>" >
     </th>        
  </tr> 
  <tr>
    <th>        
        <label style="color:black" >Date</label><br>  
            <input type="text" name="Date" value="<?php echo $row['Date']?>" readonly>
    </th>
    <th>         
        <label style="color:black" >EPF</label> <br> 
            <input type="text" name="EPF" value="<?php echo $row['EPF']?>" readonly>
     </th>
     <th>         
        <label style="color:black" >Shift</label><br>    
            <input type="text" name="Shift" value="<?php echo $row['Shift']?>" readonly>
     <th>       
 </tr>
 <tr>
     <th>
        <label style="color:black" >Section</label>
            <input type="text" name="Section" value="<?php echo $row['Section']?>">
     </th>       
 </tr>

 </table>

 <br>
 <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            &nbsp &nbsp &nbsp &nbsp 

            <Input style="width:15%"  type="Submit" name="update" value="Update" class="update-btn">  
            
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
         
            <Input style="width:15%" type="Submit" name="Delete" value="Delete" class="delete-btn">
       
         
       
     </form> 

 
     <?php   
     }
 }
?>
</fieldset>	
</body>



</html>
