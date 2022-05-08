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
    $Shift=$_POST['OFF'];
    $Section=$_POST['Section'];
   
    $sql="insert into `stock` (Customer,Size,Style,Cord,Quantity,Date,EPF,Shift,Section)
    values('$Customer','$Size','$Style',' $Cord','$Quantity','$Date','$EPF','$Shift','$Section')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con)); 
    }
      
}

?>





<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/home.css">
        <body>


        <div class="header">

<img src="img/Logo.png" alt="Balloons" width="200" height="80" style="vertical-align:bottom">>

  <div class="header-right">
    <a class="active" href="#home">Stock Update And Delete</a>
   
  </div>

</div>
        <div class="accordion">

<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
       <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
        <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
        <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
        <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>
<div class="accordion-head">
    <h4>Section A</h4><div class="arrow down"></div>

</div>
<div class="accordion-body">
    
        <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
</div>




<div class="accordion-head">
            <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>
    <button class="btn success">Success</button><br/>

</div>
<div class="accordion-body">
    <p>Lorem Ipsum is sfnti nting and typesetting industry dummy text o g and typesetting industry.</p>
</div>

</div>
</div>
            <div class="content">
            <form method= "post">
                <br>
<center>
<table width="80%">
 <tr> 
   <th>    
    <div class="form-group">
     <label style="color:white" >Customer</label>
       <select name="Customer" id="Customer">
       <option value="ME UNDIS">ME UNDIS</option>
          <option value="VS PINK">VS PINK</option>
          <option value="VS LOGO">VS LOGO</option>
          <option value="ME UNDIS">ME UNDIS</option>
          <option value="GAP">GAP</option>
        </select>
       </div>
</th>
<th>
  <div class="form-group">
    <label style="color:white" >Size</label>
       
       <select name="Size" id="Size">
        <option value="XL">XL</option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L" class="text">L</option>
          <option value="XXL">XXL</option>
        </select>
    </div>
</th>

<th>
<div class="form-group">
    <label style="color:white">Style</label>
    <input type="" class="form-control"  placeholder="10000" name="Style">
</div>
</th>
</tr>
<tr>
 <th>   
  <div class="form-group">
      <label style="color:white">Cord</label>
      <input type="text" class="form-control"  placeholder="S2050" name="Cord">
   </div>
</th> 
<th>
 <div class="form-group">
    <label style="color:white">Quantity</label>
    <input type="Number" class="form-control"  placeholder="1000" name="Quantity">
  </div>
</th>
<th>
  <div class="form-group">
      <label style="color:white">Date</label>
      <input type="" class="form-control"  placeholder="2022/04/18" name="Date">
   </div>
</th>
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
    <label style="color:white">EPF</label>
    <input type="text" class="form-control"  placeholder="20164" name="20164" width="80%" >
   </div>
</th>
<th>
<div class="form-group">
    <label style="color:white">Shift</label>
    <input type="text" class="form-control"  placeholder="BOTH" name="BOTH" width="80%" >
   </div>
  
  </div>
</th>
<th>
 
    <div class="form-group">
       <label style="color:white" >Section</label>
          <select name="Section" id="Section">
          <option value="3">Section NO 03</option>
            <option value="1">Section NO 01</option>
            <option value="2">Section NO 02</option>
            
            <option value="4">Section NO 04</option>
            <option value="5">Section NO 05</option>
         </select>
   </div>
</th>  
</tr> 
<tr>
<th> 
</tr>
</th> 
<tr>
<th>
  <button type="submit" class="btn btn-primary" name="submit" Background-color="red">Update</button>
</th>
<th>
  <button type="submit" class="btn btn-primary" name="submit">Delete</button>
</th>
</tr>
  </table>
  </center>
</form>    
</div>
<script src="js/home.js"></script>
</body>
</head>
    </html>