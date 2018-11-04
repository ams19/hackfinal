
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
.icon-container
 {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 50px;
}
input[type=text] 
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
#mail
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
#amount
{
  font-weight: bold;
  font-size: 20px;
}
</style>
<body>
  <div class="row">
            <div class="col-sm-3"></div>
          <div class="col-sm-5">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <form method = "post" action="<?php echo "money.php?id=".$_GET['id']?>">
            <label for="cmail">Registered Email Id</label>
            <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/\" id ="mail" type="email" name="email" placeholder="email-id" required>
        <h6 style="text-align:right ;font-size:15px"><a href="regnuser.php">New User?</a></h6>
   
              <label for="cname">Name on Card</label>
            <input  pattern="[A-Za-z]{1,50}" type="text" id="cname" name="cardname" placeholder="Name" required>
            <label for="ccnum">Credit card number</label>
            <input  maxlength="16" minlength ="16" type="text" pattern="[0-9]{1,16}" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="number" min="1" max="12" id="expmonth" name="expmonth" placeholder="01" required>
            <label for="expyear">Exp Year</label>
            <input min="2018" max="2050" type="number" id="expyear" name="expyear" placeholder="2018" required>
            <label for="donatedamount">Amount To Be Donated (in Rupees)</label>
            <p id="amount">&#8377;</p>
            <input type="text" id="donatedamount" name="donatedamount" placeholder="1000" required> 
           <label for="cvv">CVV</label>
           <input maxlength="3" minlength ="3" type="password" id="cvv" pattern="[0-9]{1,3}"  name="cvv" placeholder="3 digit code" required>
           <input type="submit" value="Continue to checkout" class="btn">
         </form>
         </div>
      </div>
</body>
</html>