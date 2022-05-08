<?php

include 'connect1.php';
if(isset($_GET['deleteid']))
{
$ID=$_GET['deleteid'];
$sql="delete from `reg` where id=$ID";
$result=mysqli_query($con,$sql);

if($result){
    //echo "Delete successfull";
    header('location:UserDisply.php');
    

}else{
    die(mysqli_error($con));
}

}
?>