
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
  ENDOWING HEARTS
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  background-image: url('images/back.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
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

.menu
{
  height:auto;
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

?>
<br><br>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-1"></div>
  <div  class="col-sm-4" style= "background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);text-align: center; ">
    <h3 style="font-family: 'Abril Fatface', cursive; color:#E5E8E8 ; text-align: center;">Login For User</h3>
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
  <div class="col-sm-2"></div>
  <div  class="col-sm-4" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);text-align: center;">
    <h3 style="font-family: 'Abril Fatface', cursive; color :#E5E8E8 ;text-align:center; ">Login for Schools</h3>
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
  <div class="col-sm-1"></div>
</div>
<br><br>
<div class="row">
<div class="col-sm-1"></div>
 <div  style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);height:460px;overflow-y: scroll;text-align:center; " class="col-sm-10">
      <h3 style="font-family: 'Abril Fatface',cursive;font-size:40px;color:#E5E8E8">Updates</h3>
      <hr style="background-color:grey">
    <ol class="list-group" style="font-size:20px;color:#E5E8E8;margin-left:2%">
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
      $nam=str_replace(' ','+',$row2['Name']);

      ?>

      <li id="updates" style="text-align: left"> 
        
        <h3 style="color:#E5E8E8;"><?php echo $row['post'];?></h3>
         <h4 style="font-weight: bold;font-style: italic;color:#E5E8E8">School Name : <a style="font-size:30px,color:#E5E8E8;"href="<?php echo "schoolsite.php?schoolname=".$nam;?>"><?php echo $row2['Name']?></a></h4> 
        </li>
    <br>
      <?php
    }
    ?>
</ol>
</div>
</div>
<br><br>
<div class="row">
  <div class="col-sm-1"></div>
    <div class="about col-sm-10" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.3);" >
  <div style="padding:20px;">
      <h2 style="margin:10px;font-weight:bold;color:#5DADE2" id="about us">ABOUT US</h2> 
  <p>

              <h4 style="color:#E5E8E8  ">Started in November 2018, endowinghearts.com, a fundraising platform for government schools in India aims to connect all such schools on a common front and thus providing ease for volunteers willing to donate.

              EndowingHearts is going to change the way endowments for government schools have worked.
              <br>

              <br>Why EndowingHearts ?
              <br>
              <br>

              <ul>

                           <li>

                                        Receipts for Donations

                           </li>

 

                           <li>

                                        Weekly Updates

                           </li>

 

                           <li>

                                        Transparency and Trust

                           </li>

              </ul>

    </h4>

    </p>
    <div>
  
</div>

  </div>
  </div>
</div>
  <br><br>
  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-10"style="color:#E5E8E8  ;font-weight: bold;font-size:20px;"><p>Contact:endowinghearts@gmail.com</p>
  <p >HelpLine:8195982962, 8445850961, 7042216969</p></div>
</div>
</div>
</div>
</body>
    
