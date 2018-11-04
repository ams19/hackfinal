<?php
include 'connection.php';
session_start();
$id=$_SESSION['sid'];
$post=$_POST['post'];
$sql="insert into post(id,post)values('$id','$post')";
$res=mysqli_query($con,$sql);
header('location:schoolaccount.php');

?>