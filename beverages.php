<?php
 session_start();
?>
<html>
<head>
  <link href="xyz.css" rel="stylesheet">
</head>
<body>
<div class="title">
<h1 style='color:white'>SJU</h1>
  <section class="troll">
    <img src="./images/trolley.png" width="50px" height="50px"></img>
</section>
  <ul>
  <li><a href="invoice.php">Invoice</a></li>
  <li><a href="cart.php">Cart</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Categories</a>
    <div class="dropdown-content">
      <a href="baby.php">Baby Care</a>
      <a href="products.php">Vegetables</a>
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
<form method="post">
<section class="head">
 <h1>Beverages</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/beverages/thumsup.jpeg" alt="Thums Up" width="130px" height="140px">
    </section>
    <h2>Thums Up</h2>
    <h3>Price : <input name="ThumsUpprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="ThumsUpquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="ThumsUp" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/beverages/sprite.jpeg" alt="Sprite" width="130px" height="140px">
    </section>
    <h2>Sprite</h2>
    <h3>Price : <input name="Spriteprice" type="text" value="36" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Spritequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Sprite" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/beverages/coketin.jpeg" alt="Coketin" width="130px" height="140px">
    </section>
    <h2>Coketin</h2>
    <h3>Price : <input name="Coketinprice" type="text" value="38" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 300ml</h3>
    Qty: <input type="num" name="Coketinquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Coketin" value="Buy" style="margin-top:-10px;height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/coke.jpeg" alt="Coke" width="130px" height="140px">
    </section>
    <h2>Coke</h2>
    <h3>Price : <input name="Cokeprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Cokequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Coke" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/slice.jpeg" alt="Slice" width="130px" height="140px">
    </section>
    <h2>Slice</h2>
    <h3>Price : <input name="Sliceprice" type="text" value="60" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1.2l</h3>
    Qty: <input type="num" name="Slicequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Slice" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/pepsitin.jpeg" alt="Pepsi tin" width="130px" height="140px">
    </section>
    <h2>Pepsi tin</h2>
    <h3>Price : <input name="Pepsitinprice" type="text" value="31" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="Pepsitinquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Pepsitin" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/limca.jpeg" alt="Limca" width="130px" height="140px">
    </section>
    <h2>Limca</h2>
    <h3>Price : <input name="Limcaprice" type="text" value="36" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Limcaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Limca" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/horlicks.jpeg" alt="Horlicks" width="130px" height="140px">
    </section>
    <h2>Horlicks</h2>
    <h3>Price : <input name="Horlicksprice" type="text" value="421" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1kg</h3>
    Qty: <input type="num" name="Horlicksquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Horlicks" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/tang.jpeg" alt="Tang" width="130px" height="140px">
    </section>
    <h2>Tang</h2>
    <h3>Price : <input name="Tangprice" type="text" value="192" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750g</h3>
    Qty: <input type="num" name="Tangquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Tang" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/maaza.jpeg" alt="Maaza" width="130px" height="140px">
    </section>
     <h2>Maaza</h2>
    <h3>Price : <input name="Maazaprice" type="text" value="375" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 16pcs</h3>
    Qty: <input type="num" name="Maazaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Maaza" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/bournvita.jpeg" alt="Bournvita" width="130px" height="140px">
    </section>
    <h2>Bournvita</h2>
    <h3>Price : <input name="Bournvitaprice" type="text" value="284" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750g</h3>
    Qty: <input type="num" name="Bournvitaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Bournvita" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/dew.jpeg" alt="Dew" width="130px" height="140px">
    </section>
    <h2>Dew</h2>
    <h3>Price : <input name="Dewprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="Dewquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Dew" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/soda.jpeg" alt="Soda" width="130px" height="140px">
    </section>
    <h2>Soda</h2>
    <h3>Price : <input name="Sodaprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Sodaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Soda" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/bnatural.jpeg" alt="B Natural" width="130px" height="140px">
    </section>
    <h2>B Natural</h2>
    <h3>Price : <input name="BNaturalprice" type="text" value="140" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 6pcs</h3>
    Qty: <input type="num" name="BNaturalquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BNatural" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/7up.jpeg" alt="7up" width="130px" height="140px">
    </section>
    <h2>7up</h2>
    <h3>Price : <input name="7upprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="7upquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="7up" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/glucond.jpeg" alt="Glucon D" width="130px" height="140px">
    </section>
    <h2>Glucon D</h2>
    <h3>Price : <input name="GluconDprice" type="text" value="160" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 150g</h3>
    Qty: <input type="num" name="GluconDquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="GluconD" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/sharbat.jpeg" alt="Sharbat" width="130px" height="140px">
    </section>
    <h2>Sharbat</h2>
    <h3>Price : <input name="Sharbatprice" type="text" value="152" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Sharbatquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Sharbat" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/beverages/water.jpeg" alt="Water" width="130px" height="140px">
    </section>
    <h2>Water</h2>
    <h3>Price : <input name="Waterprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="Waterquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Water" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>