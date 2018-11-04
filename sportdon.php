<?php

include 'connection.php';

{   $e=$_POST['email'];
    $un=$_POST['username'];
    $sp=$_POST['description'];
    
$i=$_GET['id'];
$sql="insert into donate (name,school,sports) values ('$un','$i','$sp')";
mysqli_query($con,$sql);
mail($i,"Donation Recieved","Your school recieved a donation from '$un','$e' .");
mail($e," Reciept For Donation Done","You donated successfully for betterment of school '$i'.");
include 'thanku.php';

}


?>