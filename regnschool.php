<script>
<?php
if(isset($_GET['wrong']))
{
    ?>
    alert("Your password doesn't match ");
    <?php
     
    
}

  if(isset($_GET['sinvalid']))
{
    ?>
    alert("There are error(s) in your form:school id is invalid");
    <?php
     
    
}
?>

function showdist(str)
    { 
        var s=str;
         xml= new XMLHttpRequest;
    xml.onreadystatechange=function(){
        if(this.readyState==4&&this.status==200)
            {
                document.getElementById("list").innerHTML=this.responseText;
            }
    }
       xml.open("GET","districtopt.php?q="+s,true);
    xml.send();
    }
</script>
<html>
<head>
<title>
  NEW SCHOOL
</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h3 style="color:#A04000">Register Your School!!</h3>
        <br>
    <form method="post" action="signupschool.php">
      <div class="form-group" >
    <input class="form-control" type="text" name="sname" placeholder="school-name" required>
    <br>
    <input class="form-control" type="text" name="sid" placeholder="school-id" required>
    <br>
    <div style="text-align:left;font-size:20px;">State</div>
    <select class="form-control"  onchange="showdist(this.value)" name="state">
        <?php
        include 'connection.php';
        $sql="select distinct State from state_dist";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
            ?>
        <option value="<?php echo $row['State']; ?>"><?php echo $row['State']; ?></option>
        <?php
        }
            
        
        ?>
    </select>
    
    <br>
    <div style="text-align:left;font-size:20px">District</div>
    
    <div id="list">
        <select class="form-control" name="district">
        
        </select>
    </div>
    
    
    <br>
     <input class="form-control" type="text" name="bankaccountno" placeholder="Bank Account Number" required>
    <br>
    <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
    <br>
    <input class="form-control" type="password" name="spass" placeholder="Password" required>
    <br>
    <input class="form-control" type="password" name="cpass" placeholder="Confirm Password" required>
    <br>
    <button class="form-control btn btn-primary" type="submit">Sign Up</button>
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
