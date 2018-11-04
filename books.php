<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Pay </title>
</head>
<style>
input[type=text] 
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] 
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password] 
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=number] 
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label 
{
  margin-bottom: 10px;
  display: block;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
</style>
<body>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-5">
      <h3 style ="font-weight: bold;">Fill The Following Details</h3>
      <br><br>
      <form method = "post" action="<?php echo "bookdon.php?id=".$_GET['id']?>">
      <label for="cmail">Registered Email Id</label>
            <input  pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/\" id ="mail" type="email" name="email" placeholder="email-id" required>
        <h6 style="text-align:right ;font-size:15px"><a href="regnuser.php">New User?</a></h6>

    <label for="cname">Name</label>
            <input type="text" id="cname" name="username" placeholder="Username" required>
      <label for="cname">Permanent Address</label>
            <input type="text" id="padd" name="paddress" placeholder="Permanent Address" required>
      <label for="cname">Number Of Books </label>
            <input type="number" min="1" max="1000"  id="num" name="numbooks" placeholder="eg :3" required> 
            <label for="cname">Description</label>
            <textarea rows="7" style="width:100%" id="descript" textarea="200px" name="description" placeholder="Brief description about the books.Also include your phone number " required></textarea>
           <input type="submit" value="Proceed" class="btn">
           </form>
         </div>
      </div>
</body>
</html>     