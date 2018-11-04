
<?php
session_start();
if(isset($_SESSION['username']))
{
  header('location:useraccount.php');
}
if(isset($_SESSION['sid']))
{
  header('location:schoolaccount.php');
}
?>
<script>
  <?php
if(isset($_GET['added']))
{?>
    alert("Signup Successful");
    <?php
}
if(isset($_GET['notregistered']))
{?>
    alert("You are not Registered");
    <?php
}
if(isset($_GET['wrongpass']))
{?>
    alert("Password is incorrect");
    <?php
}
?>
</script>
<html>
    <head>
  
<title>
  FIRST PAGE
</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<style>
body
{}
 .bg-image {
  position: fixed;
  left: 0;
  right: 0;
  z-index: 1;

  display: block;
  background-image: url('images/main2.jpeg');
  width: 100%;
  height: 100%;

  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
}

.content {
  position: absolute;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-left: 0px;
  margin-right: 0px;
}

}
.heading
{
  
  height: 100px;
  
}

.back
{
  margin-top:10px;
  width:100% ;
  height:400px;
}
.headtext
{
  font-family: 'Permanent Marker', cursive; 
  padding-top: 25px;
  position:relative;
  left:50px;
}
.menu
{
  height:auto;
  background-color:#333;;
  color:white;
  padding:17px;
    font-size: 125%;
  }
    .item
    {
        color:white;
        
    }
    .item:hover
    {
        color: black;
    }

.menu-item:hover
{
background-color: white;
color:black;
}
.posts
{

}

</style>
<body>
<div class= "bg-image"></div>
<div class="content">
    <?php
include 'header.php';
include 'menu.php';
include 'slider.php';
?>

<div class="container-fluid" style="margin-top:10px;">
<div class="row">
  <div class="col-sm-1"></div>
  <div style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);" class="col-sm-3"style="text-align: center; ">
    <h3 style="font-family: 'Abril Fatface', cursive; color:white;">Login For User</h3>
        <br>
    <form method="post" action="userlogin.php">
<div class="form-group" >
    <input class="form-control" type="text" name="email" placeholder="name" required>
    <br>
    <input class="form-control" type="password" name="pass" placeholder="password" required>
    <br>
    <button class="form-control btn btn-primary" type="submit" >Login</button>

  </div>
  </form>
      <h6 style="text-align:right ;font-size:20px"><a href="regnuser.php">New User?</a></h6>
  </div>
  
  <div class="col-sm-4"style="text-align: center;">

      <div class="jumbotron  posts" style="height:300px;overflow-y: scroll">
      <h3 style="font-family: 'Abril Fatface', cursive;">Updates</h3>
      <hr style="background-color:grey">
    <ol class="list-group">
    <?php
    include 'connection.php';
    $sql="select post,id from post order by snum DESC limit 10";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
      $id1=$row['id'];
      $sql2="select Name from school where School_ID ='$id1'";
      $res2=mysqli_query($con,$sql2);
      $row2=mysqli_fetch_assoc($res2);
      ?>

      <li id="updates" style="text-align: left"> 
        
        <?php echo $row['post']?>
         <h5 style="font-weight: bold;font-style: italic;">School Name : <a href="<?php echo "schoolsite.php?schoolname=".$row2['Name'];?>"><?php echo $row2['Name']?></a></h5> 
        </li>
    <br>
      <?php
    }
    ?>
</ol>
  </div>
  </div>
  <div style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);" class="col-sm-3" style="text-align: center;">
    <h3 style="font-family: 'Abril Fatface', cursive; color :white">Login for Schools</h3>
    <br>
    <form method="post" action="schoollogin.php">
<div class="form-group" >
    <input class="form-control" type="text" name="sid" placeholder="school-id" required>
    <br>
    <input class="form-control" type="password" name="spass" placeholder="password" required>
    <br>
    <button class="form-control btn btn-success" type="submit">Login</button>
     <h6 style="text-align:right ;font-size:20px"><a href="regnschool.php">New User?</a></h6>

  </div>
  </form>
  </div>
  <div class ="col-sm- 1"></div>
</div>
</div>
 <div id="error"> <? echo $error.$successMessage; ?></div>
    <div class="about"><h1 style="font-size:30px;margin:30px;font-weight:bold" id="about us">ABOUT US</h1> </div>
  </div>

</body>
    
