<script> 
    window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>

<style>

table,{

}


th, td {
  border: 1px solid black;
  width:110px;
}
label {

    font-size:15px;
}


    </style>

<?php

if(isset($_POST['Search'])) {

    $email =$_POST['name'];
    $query="select * FROM `report` WHERE email='$email'";
    $search_result =filtterTable($query);
 
}
else{
    $query= "select* from `report`";
    $search_result =filtterTable($query);
}

function filtterTable($query)
{
    $connect= mysqli_connect('localhost','Shashika','m300#856','itpm_stock') ;
    $filter_Result= mysqli_query($connect,$query);
    return $filter_Result;
}



?>
<html>
    <head>

    <title>ADD new stock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
   
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
         

<center>



<div class="container">

<form action="" method="POST">

        <div class="form-input">
            <input type="text" name="name" id="name" placeholder="Enter the Email"/>	
        </div>
       
        <input type="submit" name="Search" value="Search" class="btn-login"/>
    </form>
</div>
</center>
<center>
   
</center>
       <br> <br>
<div id="invoice">

<center><h2>CELONE CLOTHING</h2>
    <h3>The world best company</h3>
       <br><hr  style="border-size:2px">
       <h4>Leve planing Report report</h4><br></center>


 <center>   
    <table >
   
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>email</td>
            <td>department</td>
            <td>leavedate</td>
            <td>leavereason</td>

</tr>
    <?php while($row= mysqli_fetch_array($search_result)):?>

      <tr>
    <td><?php echo $row['id']; ?> </td>
    <td><?php echo $row['name']; ?> </td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php echo $row['department']; ?> </td>
    <td><?php echo $row['leavedate']; ?> </td>
    <td><?php echo $row['leavereason']; ?> </td>

    </tr>
	<?php endwhile; ?>
    
    </table>
    </center>
	<br><br><br>	


    </div>

</form>
    
<center><button  id="download" class="btn btn-primary"> download pdf</button></center>

</body>
</html>