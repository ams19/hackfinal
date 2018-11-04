<?php
session_start();
include 'connection.php';
$sid=$_POST['sid'];
$_SESSION['sid']=$sid;
$pass=$_POST['spass'];
$sql="select * from school where School_ID='$sid' ";
$res=mysqli_query($con,$sql);
$n=mysqli_num_rows($res);
if($n==0)
	{session_destroy();
		header('location:login.php?notregistered');}
else
{
$row=mysqli_fetch_assoc($res);
$hpass=md5($pass);


if ($hpass==$row['Password']) 
{
    header('location:schoolaccount.php');
}
else
{
	session_destroy();
  header('location:login.php?wrongpass');
}
}
?>