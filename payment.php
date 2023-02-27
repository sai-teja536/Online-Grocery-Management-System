<?php
session_start();
?>
<html>
<head>
  <link href="payment.css" rel="stylesheet">
</head>
<body>
<div class="title">
  <h1 style="color:white">SJU</h1>
  <section class="troll">
    <img src="./images/trolley.png" width="50px" height="50px"></img>
</section>
  <ul>
  <li><a href="cart.php">Cart</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Categories</a>
    <div class="dropdown-content">
      <a href="products.php">Vegetables</a>
      <a href="beverages.php">Beverages</a>
      <a href="dairy.php">Dairy</a>
      <a href="fruits.php">Fruits</a>
      <a href="household.php">Household</a>
      <a href="hygiene.php">Hygiene</a>
      <a href="snacks.php">Snacks</a>
    </div>
  </li>
  <li><a href="main.php">Log Out</a></li>
  </ul>
</div>
<h1 style="text-align:center">Payment</h1>
<div class="back">
<form method="post" class="formdesign">
            <label for="address">Address : </label><input type="text" name="address" style="height:150px;"/><br><br>
            <label for="em">Email : </label><input type="email" name="em"/><br><br>
            <label for="mobile">Phone Number : </label><input type="text" name="mobile"/><br><br>
            <label for="address">Payment mode : </label><input type="radio" value="online" name="pay" style="width:20px;height:20px;"/> Online </label><input type="radio" value="offline" name="pay" style="width:20px;height:20px;"/>Cash On Delivery<br><br>
            <label>Card Details:</label><br><br>
            <label for="cardnumber">Card Number : </label><input type="text" name="cardnumber" /><br><br>
            <label for="cardholder">Card Holder Name : </label><input type="text" name="cardholder" /><br><br>
            <label for="expiry">Expiry Date : </label><input type="text" name="expiry" /><br><br>
            <label for="cvv">CVV : </label><input type="text" name="cvv" style="width:50px"/><br><br>
            <input type="submit" name="sub">
        </form>
</body>
<?php
        if(isset($_POST['sub'])) 
        {
          $name=$_SESSION['username'];
          $products=$_SESSION['product'];
          $bill=$_SESSION['sum'];
          $phone=$_POST['mobile'];
          $email=$_POST['em'];
          $address=$_POST['address'];
          $mode=$_POST['pay'];
          $cardnumber=$_POST['cardnumber'];
          $cardholder=$_POST['cardholder'];
          $expiry=$_POST['expiry'];
          $cvv=$_POST['cvv'];
          $date=date("Y-m-d");
          $time=date("h:i:s A");
          $servername="localhost";
          $username="root";
          $password="";
          $dbname="grocery";
          $conn=new mysqli($servername,$username,$password,$dbname);
          if($conn->connect_error)
          {
                die("Connection failed : ".$conn->connect_error);
          }
          $sql="INSERT INTO ship(Name,Products,Bill,Address,Email,Number,Mode,Cardnumber,Holdername,Expiry,Cvv,Date,Time) VALUES ('".$name."','".$products."','".$bill."','".$address."','".$email."','".$phone."','".$mode."','".$cardnumber."','".$cardholder."','".$expiry."','".$cvv."','".$date."','".$time."')";
          if($conn->query($sql)===TRUE)
          {
?>
           <script type="text/JavaScript">
              alert("Your Products are ready for Shipping");
          </script>
<?php
          header("Location:http://localhost/practice%20programs/invoice.php");
        }
      }
?>
</html>