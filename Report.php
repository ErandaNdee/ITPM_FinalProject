<?php

if(isset($_POST['submit'])) {

    $Customer =$_POST['Customer'];
    $query="select * FROM `stock` WHERE Customer='$Customer'";
    $search_result =filtterTable($query);
	
	$query2="select SUM(Quantity) AS 'tot' FROM `stock` WHERE Customer='$Customer'";
    $search_result2 =filtterTable($query2);

    $query3="select SUM(Quantity) AS 'totS' FROM `stock` WHERE Customer='$Customer' and Size='S'";
    $search_result3 =filtterTable($query3);

    $query4="select SUM(Quantity) AS 'totM' FROM `stock` WHERE Customer='$Customer' and Size='M'";
    $search_result4 =filtterTable($query4);

    $query5="select SUM(Quantity) AS 'totL' FROM `stock` WHERE Customer='$Customer' and Size='L'";
    $search_result5 =filtterTable($query5);

    $query6="select SUM(Quantity) AS 'totXL' FROM `stock` WHERE Customer='$Customer' and Size='XL'";
    $search_result6 =filtterTable($query6);

    $query7="select SUM(Quantity) AS 'totXXL' FROM `stock` WHERE Customer='$Customer' and Size='XXL'";
    $search_result7 =filtterTable($query7);
 
}
else{
    $query= "select* from `stock`";
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
</head>
<body>

<form  action=" " method="POST">

<label  >Customer</label>
       <select name="Customer" id="Customer">
          <option value="VS PINK">VS PINK</option>
          <option value="VS LOGO">VS LOGO</option>
          <option value="ME UNDIS">ME UNDIS</option>
          <option value="GAP">GAP</option>
        </select>
       </div>

       <Input type="Submit" name="submit" value="Summary">

    <table>
        <tr>
            <td>ID</td>
            <td>Customer</td>
            <td>Size</td>
            <td>style</td>
            <td>Color cord</td>
            <td>quantity</td>
</tr>
    <?php while($row= mysqli_fetch_array($search_result)):?>

      <tr>
    <td><?php echo $row['id']; ?> </td>
    <td><?php echo $row['Customer']; ?> </td>
    <td><?php echo $row['Size']; ?> </td>
    <td><?php echo $row['Style']; ?> </td>
    <td><?php echo $row['Cord']; ?> </td>
    <td><?php echo $row['Quantity']; ?> </td>

    </tr>
	<?php endwhile; ?>	
		
	<tr>
	
	<?php while($row2= mysqli_fetch_array($search_result2)):?>
	<td>Total quantity</td>
    <td><?php echo $row2['tot']; ?> </td>
	<?php endwhile; ?>
    </tr>

    <tr>
	
	<?php while($row3= mysqli_fetch_array($search_result3)):?>
	<td>Small quantity</td>
    <td><?php echo $row3['totS']; ?> </td>
	<?php endwhile; ?>
    </tr>

    <tr>
	
	<?php while($row4= mysqli_fetch_array($search_result4)):?>
	<td>Midum quantity</td>
    <td><?php echo $row4['totM']; ?> </td>
	<?php endwhile; ?>
    </tr>
    
    <?php while($row5= mysqli_fetch_array($search_result5)):?>
	<td>Large quantity</td>
    <td><?php echo $row5['totL']; ?> </td>
	<?php endwhile; ?>
    </tr>

    <?php while($row6= mysqli_fetch_array($search_result6)):?>
	<td>XL quantity</td>
    <td><?php echo $row6['totXL']; ?> </td>
	<?php endwhile; ?>
    </tr>

    <?php while($row7= mysqli_fetch_array($search_result7)):?>
	<td>XL quantity</td>
    <td><?php echo $row7['totXXL']; ?> </td>
	<?php endwhile; ?>
    </tr>

    



</table>



</form>

</body>
</html>