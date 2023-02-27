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
      <a href="beverages.php">Beverages</a>
      <a href="dairy.php">Dairy</a>
      <a href="products.php">Vegetables</a>
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
 <h1>Fruits</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/mangoes.jpeg" alt="Mango" width="130px" height="140px">
    </section>
    <h2>Mango</h2>
    <h3>Price : <input name="Mangoprice" type="text" value="91" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Mangoquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Mango" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/grapes.jpeg" alt="Grapes" width="130px" height="140px">
    </section>
    <h2>Grapes</h2>
    <h3>Price : <input name="Grapesprice" type="text" value="90" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500g</h3>
    Qty: <input type="num" name="Grapesquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Grapes" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/coconut.jpeg" alt="Coconut" width="130px" height="140px">
    </section>
    <h2>Coconut</h2>
    <h3>Price : <input name="Coconutprice" type="text" value="172" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs - 4x1pc Multipack</h3>
    Qty: <input type="num" name="Coconutquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Coconut" value="Buy" style="margin-top:-10px;height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/banana.jpeg" alt="Banana" width="130px" height="140px">
    </section>
    <h2>Banana</h2>
    <h3>Price : <input name="Bananaprice" type="text" value="116" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Bananaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Banana" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/watermelon.jpeg" alt="Water Melon" width="130px" height="140px">
    </section>
    <h2>Water Melon</h2>
    <h3>Price : <input name="WaterMelonprice" type="text" value="41" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="WaterMelonquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="WaterMelon" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/pomegranate.jpeg" alt="Pomegranate" width="130px" height="140px">
    </section>
    <h2>Pomegranate</h2>
    <h3>Price : <input name="Pomegranateprice" type="text" value="193" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 880g</h3>
    Qty: <input type="num" name="Pomegranatequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Pomegranate" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/coconut-medium.jpeg" alt="Coconut-medium" width="130px" height="140px">
    </section>
    <h2>Coconut-medium</h2>
    <h3>Price : <input name="Coconut-mediumprice" type="text" value="21" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per pc</h3>
    Qty: <input type="num" name="Coconut-mediumquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Coconut-medium" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/apple.jpeg" alt="Apple" width="130px" height="140px">
    </section>
    <h2>Apple</h2>
    <h3>Price : <input name="Appleprice" type="text" value="254" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 2x4pcs</h3>
    Qty: <input type="num" name="Applequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Apple" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/muskmelon.jpeg" alt="Muskmelon" width="130px" height="140px">
    </section>
    <h2>Muskmelon</h2>
    <h3>Price : <input name="Muskmelonprice" type="text" value="33" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per pc</h3>
    Qty: <input type="num" name="Muskmelonquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Muskmelon" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/orange.jpeg" alt="Orange" width="130px" height="140px">
    </section>
     <h2>Orange</h2>
    <h3>Price : <input name="Orangeprice" type="text" value="102" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 6pcs</h3>
    Qty: <input type="num" name="Orangequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Orange" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/kiwi.jpeg" alt="Kiwi" width="130px" height="140px">
    </section>
    <h2>Kiwi</h2>
    <h3>Price : <input name="Kiwiprice" type="text" value="73" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Kiwiquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Kiwi" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/guava.jpeg" alt="Gauva" width="130px" height="140px">
    </section>
    <h2>Gauva</h2>
    <h3>Price : <input name="Gauvaprice" type="text" value="40" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500g</h3>
    Qty: <input type="num" name="Gauvaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Gauva" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/papaya.jpeg" alt="Papaya" width="130px" height="140px">
    </section>
    <h2>Papaya</h2>
    <h3>Price : <input name="Papayaprice" type="text" value="28" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Papayaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Papaya" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/sapota.jpeg" alt="Sapota" width="130px" height="140px">
    </section>
    <h2>Sapota</h2>
    <h3>Price : <input name="Sapotaprice" type="text" value="40" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500g</h3>
    Qty: <input type="num" name="Sapotaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Sapota" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/dragon.jpeg" alt="Dragon" width="130px" height="140px">
    </section>
    <h2>Dragon</h2>
    <h3>Price : <input name="Dragonprice" type="text" value="100" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per pc</h3>
    Qty: <input type="num" name="Dragonquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Dragon" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/pear.jpeg" alt="pear" width="130px" height="140px">
    </section>
    <h2>pear</h2>
    <h3>Price : <input name="pearprice" type="text" value="84" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 4pcs</h3>
    Qty: <input type="num" name="pearquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="pear" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/pineapple.jpeg" alt="pineapple" width="130px" height="140px">
    </section>
    <h2>pineapple</h2>
    <h3>Price : <input name="pineappleprice" type="text" value="85" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1pc</h3>
    Qty: <input type="num" name="pineapplequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="pineapple" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/fruits/jackfruit.jpeg" alt="jackfruit" width="130px" height="140px">
    </section>
    <h2>jackfruit</h2>
    <h3>Price : <input name="jackfruitprice" type="text" value="55" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250g</h3>
    Qty: <input type="num" name="jackfruitquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="jackfruit" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>