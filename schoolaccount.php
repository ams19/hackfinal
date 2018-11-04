<?php
      include 'connection.php';
session_start();
if(!$_SESSION['sid'])
header('location:login.php');
?>

<html>
<style>

.bg-image {
  position: fixed;
  left: 0;
  right: 0;
  z-index: 1;

  display: block;
  background-image: url('images/hd5.jpg');
  width: 100%;
  height: 100%;

  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);

}
.bg-text {
 
  position: absolute;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-left: 0px;
  margin-right: 0px;
}
.tab
{
  background-color:#D0D3D4;
  
  z-index: 9999;
  
 
}
</style>
<head>
  
<title>
  NEW SCHOOL
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="bg-image"></div>
  <div class="bg-text">
  <div>
    <h1 style="text-align: center;color:black;font-weight: bold;font-size: 70px">
      WELCOME
    </h1>
    <h2 style="text-align: center;color:black">
      <?php
      $id=$_SESSION['sid'];
      $sql="select Name from school where School_ID='$id' ";
      $res=mysqli_query($con,$sql);
      $row=mysqli_fetch_assoc($res);

      echo $row['Name'];
      ?></h2>
<br>
<div class="row" >
      <div class ="col-sm-5"></div>
      <div class="col-sm-2">
        <form action="lout.php">
       <input type="submit" class="btn btn-success form-control"value="Log Out">
     </form>
   </div>
    </h2>
  </div>

<div class="container-fluid" style="margin-top:10px;">
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-4">
    <form method="post" action="enterpost.php" >
<div style="text-align:center">
  <h1 sstyle="text-align:center;color:black">Enter Post</h1>
</div>
<textarea  rows="10" width="100%" class="form-control" name="post">

</textarea> 
<br> 
<input type="submit" class="btn btn-primary form-control"value="Update" onclick="func()">
</form>
  </div>

  <div class ="col-sm-2"></div>
  <div class="col-sm-4">
    <h1 style="text-align:center;color:black">Earlier Posts</h1>
    <div class="jumbotron">
      <ol>
     <?php
      $sql="select * from post where id='$id' order by snum DESC ";
      $res=mysqli_query($con,$sql);

      while($row=mysqli_fetch_assoc($res))
      {
        ?>
        <div> <h4><li><?php echo $row['post']?></li></h4></div>
        <?php
      }
      ?>
    </ol>
    </div>
  </div>
</div>
</div>
<br>
<br>
<div class="container-fluid">
  <h1 style="text-align:center;color:white">Received Donations</h1>
  <br>
  <div class ="table-responsive">
    <table class=" table table-striped table-hover table-bordered jumbotron">
      <tr>
      <th>NAME</th>
      <th>SCHOOL ID</th>
      <th>MONEY</th>
      <th>BOOKS</th>
      <th>SPORTS</th>
    </tr>
      <?php
       $sql="select * from donate where school='$id' order by id DESC";
       $res=mysqli_query($con,$sql);
       while($row=mysqli_fetch_assoc($res))
       {
        ?>
        <tr>
        
         <td><?php echo $row['name']?></td>
         <td><?php echo $row['school']?></td>
         <td><?php echo $row['money']?></td>
         <td><?php echo $row['book']?></td>
         <td><?php echo $row['sports']?></td>
       </tr>
       <?php
       }


      ?>

    </table>
  </div>
</div>
</div>
</body>
