<script>

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

  function showlist()
  {
    var d=document.getElementById("distname").value;
     xml= new XMLHttpRequest;
    xml.onreadystatechange=function(){
        if(this.readyState==4&&this.status==200)
            {
                document.getElementById("schoolname").innerHTML=this.responseText;
            }
    }
       xml.open("GET","schoolname.php?d="+d,true);
    xml.send();
    }
  
</script>
<html>
<head>
  
<title>
  FIRST PAGE
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
body
{
 
}
#schoolname
{
  font-size: 20px;
  font-style: italic;
  font-weight:bold;
}
.heading
{
  background-image: url("images/b7.jpg");
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
  font-size: 125%
}
.menu-item:hover
{
background-color: white;
color:black;
}
.bg-image {
  /* The image used */
  background-image: url("images/hd1.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 80px;
  text-align: center;
}
</style>
<body>
<div class="bg-image"></div>
<div class="bg-text">
 <div class="container-fluid">
  <div class="row" >

    <div class="col-sm-1"></div>
    <div class="col-sm-4">
    <div style="text-align:left;font-size:20px;">State</div>
    <select class="form-control"  onchange="showdist(this.value)" name="state" id="statename" style="position:relative;display:inline-block">
      <option>Select state</option>
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
    <button class=" btn btn-primary" onclick="showlist()">School List</button>
    <br>
   
  </div>
  <div class="col-sm-1"></div>
   <div class="col-sm-5" id="schoolname">

    </div>
</div>
</div>
</div>
</body>
</html>
    