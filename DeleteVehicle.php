<?php

include 'connect1.php';
if(isset($_GET['deleteid']))
{
$V_ID=$_GET['deleteid'];
$sql="delete from `vehicle` where v_id=$V_ID";
$result=mysqli_query($con,$sql);

if($result){
    //echo "Delete successfull";
    header('location:Display_Vehicle.php');
    

}else{
    die(mysqli_error($con));
}

}
?>