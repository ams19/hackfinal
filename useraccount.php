<?php
session_start();
if(!$_SESSION['username'])
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
  USER PROFILE
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
    <h1 style="text-align: center;color:black">
      <?php echo $_SESSION['username'];?>
    </h1>

      <?php
      
      $username=$_SESSION['username'];
      ?>
      <br>

<div class="row" >
      <div class ="col-sm-5"></div>
      <div class="col-sm-1">
        <form action="lout.php">
       <input type="submit" class="btn btn-success form-control"value="Log Out">
     </form>
   </div>
   <div class="col-sm-1">
       <form action="schools.php">
       <input type="submit" class="btn btn-primary form-control"value="Donate">
     </form>
      </div>
    </div>
    
  </div>

<div class="container-fluid">
  <br><br>
  <h1 style="text-align:center;color:white;font-weight: bolder">Previous Contributions </h1>
  <br>
</div>
<div class="row">
  <div class="col-sm-1"></div>
  <div class= "table-responsive">
    <div class="col-sm-11">
    <table class=" table table-striped table-hover table-bordered jumbotron">
      <tr>
     
      <th>NAME</th>
      <th>SCHOOL ID</th>
      <th>MONEY</th>
      <th>BOOKS</th>
      <th>SPORTS</th>
    </tr>
      <?php
      include 'connection.php';
      $sql="select * from donate where name='$username' order by id DESC";
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
<div class="col-sm-1"></div>
</div>
</body>
