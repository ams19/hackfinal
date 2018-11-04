<?php

$money=$_POST['donatedamount'];
$i=$_GET['id'];
include 'connection.php';


{   $e=$_POST['email'];
	$sql1="select Username from user where Email='$e'" ;
    $res1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($res1);
    $username=$row1['Username'];
  
   $sql="insert into donate (name,school,money) values ('$username','$i','$money')";
mysqli_query($con,$sql);
mail($i,"Donation Recieved","Your school recieved a donation from '$username','$e' .");
mail($e," Reciept For Donation Done","You donated successfully for betterment of school '$i'.");
include 'thanku.php';


}


?>