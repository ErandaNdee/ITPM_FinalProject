<!doctype html>
<html lang="en">
  <head>
  	<title>Dash bord</title>
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

          <center><h2>STOCK AND DELIVERY DASHBORD</h2></center>


       <fieldset>  
     <table>
       <tr>
           <th style="width: 10%">
               <form action="Addstock.php" methode="post">
                   <br>
                   <br>
               <Input type="Submit" name="search" value="ADD STOCK"  class="btn btn-primary" style="width: 98%">
               
                   <br>
                   <br>
               </form>
           </th>
           <th style="width: 10%">
           
           <form action="View stock.php" methode="post">
           <br>
                   <br>
          
               <Input type="Submit" name="search" value="VIEW STOCK"  class="btn btn-primary" style="width: 98%"> 
               <br>
                   <br>
            </form>
           </th>
           <th style="width: 10%">
           <form action="SearchStock.php" methode="post">
           <br>
                   <br>
          
               <Input type="Submit" name="search" value="STOCK UPDATE"  class="btn btn-primary" style="width: 98%"> 
               <br>
                   <br>
            </form>
           </th>
</tr>
<tr>
           <th style="width: 10%">
           <form action="InsertHTML.php" methode="post">
           <br>
                   <br>
               <Input type="Submit" name="search" value="ADD DELIVERY"  class="btn btn-primary" style="width: 98%"> 
               <br>
                   <br>
            </form>
           </th>

           <th style="width: 10%"> <form action="Update.php" methode="post">
           <br>
                   <br>
               <Input type="Submit" name="search" value="VIEW DELIVERY"  class="btn btn-primary" style="width: 98%"> 
               <br>
                   <br>
            </form>
                <form>
               </form>
           </th>
           <th style="width: 10%">
           <form action="" methode="post">
           <br>
                   <br>
               <Input type="Submit" name="search" value="DELIVERY UPDATE"  class="btn btn-primary" style="width: 98%"> 
               <br>
                   <br>
            </form>
           </th>
</tr>    
     
     
     <table>

</fieldset>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>