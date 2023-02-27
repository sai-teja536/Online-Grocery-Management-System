<?php
session_start();
?>
<html>
<head>
  <link href="xyz.css" rel="stylesheet">
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
</body>
</html>
<?php
$sum=0;
$prod="";
$keys = array_values($_SESSION);
echo "<div style='margin-left:25%;margin-top:5%'>";
echo "<table style='border:1px solid black;border-collapse:collapse;text-align:center;width:75%;height:50%;'>";
echo "<tr><th style='border:3px solid black;border-collapse:collapse'>Name</th><th style='border:3px solid black;border-collapse:collapse'>Quantity</th><th style='border:3px solid black;border-collapse:collapse'>Cost</th><th style='border:3px solid black;border-collapse:collapse'>Price</th></tr>";
for($i=3;$i<count($_SESSION);$i++)
{
  $ask=json_decode($keys[$i]);
  $arr=(array)$ask;
  $x=$arr['Fruit Name'];
  $a=$x."-quantity";
  $b=$x."-cost";
  $c=$x."-price";
  $sum+=$arr[$c];
  $prod.=$arr[$a]."-".$x."-".$arr[$c].",";
  echo "<tr>";
  echo "<td style='border:3px solid black;border-collapse:collapse'>".$x."</td>";
  echo "<td style='border:3px solid black;border-collapse:collapse'>".$arr[$a]."</td>";
  echo "<td style='border:3px solid black;border-collapse:collapse'>".$arr[$b]."</td>";
  echo "<td style='border:3px solid black;border-collapse:collapse'>".$arr[$c]."</td>";
  echo "</tr>";
}
echo "</table>";
$_SESSION['sum']=$sum;
$_SESSION['product']=$prod;
echo "</div>";
?>
<html>
    <body style="background-color:pink">
        <form method="post">
            <br><br><br>
            <?php echo "<h1 style='text-align:center'>Total Price need to pay is ".$sum."Rs</h1>"; ?>
            <section style="margin-left:5%;">
             <h3>Remove The item</h3> 
             <input type="text" name="item" style="height:30px;border:0px solid black">     <input type="submit" name="sub" value="delete" style="height:25px;background-color:green;color:white;border:0px solid green"><br><br>
             <section style="text-align:center">
             <input type="submit" value="Go to The Payment" name="paid" style="height:30px;border:0px solid black;color:white;background-color:blue;">
             </section>
            </section>
        </form>
    </body>
<?php
  if(isset($_POST['sub']))
  {
    $x=$_POST['item'];
    foreach($_SESSION as $key)
    {
      $arr=json_decode($key,true);
      foreach($arr as $k)
      {
       $h=ucfirst($x);
       if($k===$h)
       {
         unset($_SESSION[$h]);
         header("Refresh:0");
       }
      }
    }
  }
  if(isset($_POST['paid']))
  {
    header("Location:http://localhost/practice%20programs/payment.php");
  }
?>
</html>