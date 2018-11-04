<?php

include 'connection.php';
if ($_POST['sid'] && filter_var($_POST["sid"], FILTER_VALIDATE_EMAIL) === false) {
        header('location:regnschool.php?sinvalid');}
else
{
    $username=$_POST['sname'];
$id=$_POST['sid'];
$pass=$_POST['spass'];
$hpass= md5($pass);
$cpass=$_POST['cpass'];
if($pass!=$cpass)
{header('location:regnschool.php?wrong');}
else
{
$state=$_POST['state'];
$district=$_POST['district'];
$acc=$_POST['bankaccountno'];
$phone=$_POST['phone'];
$sql="insert into school (Name,School_ID,State,District,Acc_No,Phone,Password) values ('$username','$id','$state','$district','$acc','$phone','$hpass')";
mysqli_query($con,$sql);
header('location:login.php?added');
}
}

?>