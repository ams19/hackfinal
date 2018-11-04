<?php
session_start();
include 'connection.php';
$username=$_POST['email'];
$_SESSION['username']=$username;
$pass=$_POST['pass'];
$sql="select * from user where Username='$username' ";
$res=mysqli_query($con,$sql);
$n=mysqli_num_rows($res);
if($n==0)
	{  session_destroy();
		header('location:login.php?notregistered');}
else
{
$row=mysqli_fetch_assoc($res);
$hpass=md5($pass);

if ($hpass==$row['Password']) 
{
    header('location:useraccount.php');
}
else
{     session_destroy();
	  header('location:login.php?wrongpass');
}
}
?>