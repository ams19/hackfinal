<?php

include 'connection.php';


{   $e=$_POST['email'];
    $un=$_POST['username'];
    $bk=$_POST['description'];
    
$i=$_GET['id'];
$sql="insert into donate (name,school,book) values ('$un','$i','$bk')";

mysqli_query($con,$sql);
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
mail($i,"Donation Recieved","Your school recieved a donation from '$un','$e' .",$headers);
mail($e," Reciept For Donation Done","You donated successfully for betterment of school '$i'.",$headers);
include 'thanku.php';

}


?>