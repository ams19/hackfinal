<html>
<head>
  <title>Updates</title>
  </head>
  <style>
  <style>
body
{}
 .bg-image {
  position: fixed;
  left: 0;
  right: 0;
  z-index: 1;

  display: block;
  background-image: url('images/hd2.jpg');
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

</style>
</html>
<body>
  <div class="bg-image"></div>
  <div class="con">
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
 <div  style="background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);height:350px;overflow-y: scroll;text-align:center">
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
      $nam=str_replace(' ','+',$row2['Name']);

      ?>

      <li id="updates" style="text-align: left"> 
        
        <?php echo $row['post'];?>
         <h5 style="font-weight: bold;font-style: italic;">School Name : <a href="<?php echo "schoolsite.php?schoolname=".$nam;?>"><?php echo $row2['Name']?></a></h5> 
        </li>
    <br>
      <?php
    }
    ?>
</ol>
  </div>
</div>
</div>
</div>
</div>
</body>