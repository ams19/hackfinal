<?php
include 'connection.php';
  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            header('location:regnuser.php?invalid');}
else
{
    $username=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$hpass= md5($pass);
$cpass=$_POST['confirmpass'];
if($pass!=$cpass)
{header('location:regnuser.php?uwrong');}
else
{
$sql="insert into user (Username,Email,Password) values ('$username','$email','$hpass')";
mysqli_query($con,$sql);
header('location:login.php?added');
}    
}


?>