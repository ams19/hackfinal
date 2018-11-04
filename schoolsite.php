<html>
<head>
<title>Donate </title>
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
  position: fixed;
  left: 0;
  right: 0;
  z-index: 1;

  display: block;
  background-image: url('images/don.jpg');
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

.heading
{
background-color: #D35400  ;
height:125px;
margin:2px;
padding:5px; 
font-size: 30px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #FEF5E7 ; 
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.flip-card {
  margin-top: 3px;
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.desc
{
  font-size: 20px;
}
#head
{
  padding:.1px;
  font-size: 50px;
}
.school
{
  margin-left:25px;
  color:#E5E8E8;
  font-size:20px;
  font-weight:bold;text-align: center;
}
.schoolright
{
  color:#E5E8E8;
  margin-left:25px;
  font-size:20px;
  font-weight:bold;text-align: center;

}
</style>
<body>
  <div class="bg-image"></div>
  <div class="bg-text">
  <div style="margin-left:20px;color:white ;text-align: center;"><h1><div id="head" style="font-weight:bolder";>Select To Donate</div></h1></div>
<?php
include 'connection.php';
$name=str_replace('+',' ',$_GET['schoolname']);
$name=str_replace('%2C',',',$name);

$sql="select * from school where Name='$name' ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>
<div class="school">
<p>School Name : <?php echo $row['Name']."\n";?></p>
<p>School Id : <?php echo $row['School_ID'];?></p>
<p>State : <?php echo $row['State'];?></p>
</div>
<div class="schoolright">
<p>District : <?php echo $row['District'];?></p>
<p>School's Account : <?php echo $row['Acc_No']."\t";?></p>
<p>School's Phone No: <?php echo $row['Phone'];?></p>

</div>
<?php
?>
<div class="row" style="margin-left:15px;"">    
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); ">
      <h2 style="color:#E5E8E8">Give your share to show you care!</h2> 
      <p style="font-size:20px;">(Cash Donation)</p>
      <a href="<?php echo "pay2.php?id=".$row['School_ID']?>"  style="font-size: 30px;color: blue">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate2.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);">
      <h2 style="color:#E5E8E8">Feel the joy of giving a book to someone who needs it.</h2> 
      <p style="font-size:20px;">(Books Donation)</p>
      <a href="<?php echo "books.php?id=".$row['School_ID']?>" style="font-size: 30px;color: blue">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card" >
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate3.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" class="flip-card" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);">
      <h2 style="color:#E5E8E8">A healthy mind resides in a healthy body; play sports!</h2>
       <p style="font-size:20px;">(Sports Equipment Donation)</p> 
      <a href="<?php echo "sports.php?id=".$row['School_ID']?>"  style="font-size: 30px;color: blue">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card" >
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" class="flip-card" style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);">
      <h2 style="color:#E5E8E8">A healthy food for a wealthy mood.</h2> 
       <p style="font-size:20px;">(Mid Day Meal Cash Donation)</p>
      <a href="<?php echo "meal.php?id=".$row['School_ID']?>" style="font-size: 30px;color: blue">Donate</a>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>