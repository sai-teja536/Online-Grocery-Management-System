<?php
session_start();
?>
<html>
<head>
  <link href="invoice.css" rel="stylesheet">
</head>
<body>
<div class="title">
  <h1 style="color:white">SJU</h1>
  <section class="troll">
    <img src="./images/trolley.png" width="50px" height="50px"></img>
</section>
  <ul>
  <li><a href="invoice.php">Invoice</a></li>
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
<?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="grocery";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error)
            {
             die("Connection failed : ".$conn->connect_error);
            }
            $sql="SELECT Name,Products,Bill,Address,Number from ship WHERE name='".$_SESSION['username']."'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $name=$row['Name'];
                    $prod=$row['Products'];
                    $bill=$row['Bill'];
                    $add=$row['Address'];
                    $num=$row['Number'];
                }
            }

?>
<h1 style="text-align:center">Invoice</h1>
<div style="height:500px;width:350px;background-color:white;margin:auto;padding-left:50px;padding-top:20px;">
    <h1 style="text-decoration:underline">Receipt</h1><br>
    <h3>Customer Name: <?php echo $name ?></h3><br>
    <h3>Phone : <?php echo $num ?></h3><br>
    <h3>Products Ordered : </h3><?php echo $prod ?></h3><br>
    <h3>Address : <?php echo $add ?></h3><br>
    <h2>Amount : <?php echo $bill."Rs" ?></h2></p>
</div>
</body>
</html>