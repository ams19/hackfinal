<script>
<?php

 if(isset($_GET['uwrong']))
{
    ?>
    alert("Password doesn't match");
    <?php
     
}
 if(isset($_GET['invalid']))
{
    ?>
    alert("There are error(s) in your form:email is invalid");
    <?php
     
}
?>
</script>
<html>
<head>
  
<title>
 NEW USER
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.bg-image {
  /* The image used */
  background-image: url("images/hd3.jpg");

  /* Add the blur effect */
  filter: blur(10px);
  -webkit-filter: blur(7px);

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bg-text {
 
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 4;
  width: 80%;
  padding: 80px;
  text-align: center;
}
</style>
  <body>
    <div class="bg-image"></div>
  <div class="bg-text">
<div class="container-fluid" style="margin-top:10px;">
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-5"style="text-align: center; ">
    <h3>Register Yourself!!</h3>
        <br>
    <form method="post" action="signupuser.php">
<div class="form-group" >
    <input class="form-control" type="text" name="name" placeholder="Username" required>
    <br>
    <input class="form-control" type="text" name="email" placeholder="email-id" required>
    
    <br>
    <input class="form-control" type="password" name="pass" placeholder="password" required>
    <br>
    <input class="form-control" type="password" name="confirmpass" placeholder="confirm password" required>
    <br>
    <button class="form-control btn btn-primary" type="submit" ;">Sign Up</button>
    <br>
    <br>
    <button class="form-control btn btn-success" type="submit" onclick ="window.location.href = 'login.php';">Go To HomePage</button>
  </div>
  </form>
      
  </div>
  
  
  <div class ="col-sm- 1"></div>
</div>
</div>
</div>
</body>
</html>
