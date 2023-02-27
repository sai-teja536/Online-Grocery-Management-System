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
      <a href="fruits.php">Fruits</a>
    </div>
  </li>
  <li><a href="main.php">Log Out</a></li>
  </ul>
</div>
<form method="post">
<section class="head">
 <h1>Snacks</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/snacks/maggie.jpeg" alt="Maggie" width="130px" height="140px">
    </section>
    <h2>Maggie</h2>
    <h3>Price : <input name="Maggieprice" type="text" value="13" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 70g</h3>
    Qty: <input type="num" name="Maggiequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Maggie" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/snacks/ketchup.jpeg" alt="Ketchup" width="130px" height="140px">
    </section>
    <h2>Ketchup</h2>
    <h3>Price : <input name="Ketchupprice" type="text" value="92" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 900g</h3>
    Qty: <input type="num" name="Ketchupquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Ketchup" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/snacks/bourban.jpeg" alt="Bourban" width="130px" height="140px">
    </section>
    <h2>Bourban</h2>
    <h3>Price : <input name="Bourbanprice" type="text" value="10" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 50g</h3>
    Qty: <input type="num" name="Bourbanquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Bourban" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/oats.jpeg" alt="Oats" width="130px" height="140px">
    </section>
    <h2>Oats</h2>
    <h3>Price : <input name="Oatsprice" type="text" value="171" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1kg</h3>
    Qty: <input type="num" name="Oatsquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Oats" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/bhujia.jpeg" alt="Bhujia" width="130px" height="140px">
    </section>
    <h2>Bhujia</h2>
    <h3>Price : <input name="Bhujiaprice" type="text" value="57" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="Bhujiaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Bhujia" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/cornflakes.jpeg" alt="Corn Flakes" width="130px" height="140px">
    </section>
    <h2>Corn Flakes</h2>
    <h3>Price : <input name="CornFlakesprice" type="text" value="275" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 875g</h3>
    Qty: <input type="num" name="CornFlakesquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="CornFlakes" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/marie.jpeg" alt="Marie" width="130px" height="140px">
    </section>
    <h2>Marie</h2>
    <h3>Price : <input name="Marieprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250g</h3>
    Qty: <input type="num" name="Mariequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Marie" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/oreo.jpeg" alt="Oreo" width="130px" height="140px">
    </section>
    <h2>Oreo</h2>
    <h3>Price : <input name="Orieprice" type="text" value="30" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 120g</h3>
    Qty: <input type="num" name="Oriequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Orie" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/yipee.jpeg" alt="Yippee" width="130px" height="140px">
    </section>
    <h2>Yippee</h2>
    <h3>Price : <input name="Yippeeprice" type="text" value="12" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 67.5g</h3>
    Qty: <input type="num" name="Yippeequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Yippee" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/lays.jpeg" alt="Lays" width="130px" height="140px">
    </section>
     <h2>Lays</h2>
    <h3>Price : <input name="Laysprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 52g</h3>
    Qty: <input type="num" name="Laysquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Lays" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/jam.jpeg" alt="Jam" width="130px" height="140px">
    </section>
    <h2>Jam</h2>
    <h3>Price : <input name="Jamprice" type="text" value="67" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="Jamquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Jam" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/honey.jpeg" alt="Honey" width="130px" height="140px">
    </section>
    <h2>Honey</h2>
    <h3>Price : <input name="Honeyprice" type="text" value="110" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 225g</h3>
    Qty: <input type="num" name="Honeyquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Honey" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/chocos.jpeg" alt="Chocos" width="130px" height="140px">
    </section>
    <h2>Chocos</h2>
    <h3>Price : <input name="Chocosprice" type="text" value="80" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 126g</h3>
    Qty: <input type="num" name="Chocosquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Chocos" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/darkfantasy.jpeg" alt="Dark Fantasy" width="130px" height="140px">
    </section>
    <h2>Dark Fantasy</h2>
    <h3>Price : <input name="DarkFantasyprice" type="text" value="128" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 300g</h3>
    Qty: <input type="num" name="DarkFantasyquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="DarkFantasy" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/dairymilk.jpeg" alt="Dairy Milk" width="130px" height="140px">
    </section>
    <h2>Dairy Milk</h2>
    <h3>Price : <input name="DairyMilkprice" type="text" value="136" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 126g</h3>
    Qty: <input type="num" name="DairyMilkquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="DairyMilk" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/kurkure.jpeg" alt="Kurkure" width="130px" height="140px">
    </section>
    <h2>Kurkure</h2>
    <h3>Price : <input name="Kurkureprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 85g</h3>
    Qty: <input type="num" name="Kurkurequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Kurkure" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/pasta.jpeg" alt="Pasta" width="130px" height="140px">
    </section>
    <h2>Pasta</h2>
    <h3>Price : <input name="Pastaprice" type="text" value="25" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 70g</h3>
    Qty: <input type="num" name="Pastaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Pasta" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/snacks/gems.jpeg" alt="Gems" width="130px" height="140px">
    </section>
    <h2>Gems</h2>
    <h3>Price : <input name="Gemsprice" type="text" value="10" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 17.4g</h3>
    Qty: <input type="num" name="Gemsquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Gems" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>