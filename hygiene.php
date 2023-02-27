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
      <a href="fruits.php">Fruits</a>
      <a href="household.php">Household</a>
      <a href="products.php">Vegetables</a>
      <a href="snacks.php">Snacks</a>
    </div>
  </li>
  <li><a href="main.php">Log Out</a></li>
  </ul>
</div>
<form method="post">
<section class="head">
 <h1>Hygiene</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/hygiene/toothpaste.jpeg" alt="Toothpaste" width="130px" height="140px">
    </section>
    <h2>Toothpaste</h2>
    <h3>Price : <input name="Toothpasteprice" type="text" value="60" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100g</h3>
    Qty: <input type="num" name="Toothpastequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Toothpaste" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/hygiene/dettolliquid.jpeg" alt="Dettol Liquid" width="130px" height="140px">
    </section>
    <h2>Dettol Liquid</h2>
    <h3>Price : <input name="DettolLiquidprice" type="text" value="291" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="DettolLiquidquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="DettolLiquid" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/hygiene/soap.jpeg" alt="Soap" width="130px" height="140px">
    </section>
    <h2>Soap</h2>
    <h3>Price : <input name="Soapprice" type="text" value="230" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 3pcs</h3>
    Qty: <input type="num" name="Soapquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Soap" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/facewash.jpeg" alt="Facewash" width="130px" height="140px">
    </section>
    <h2>Facewash</h2>
    <h3>Price : <input name="Facewashprice" type="text" value="71" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 50ml</h3>
    Qty: <input type="num" name="Facewashquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Facewash" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/himalayafacewash.jpeg" alt="Facewash" width="130px" height="140px">
    </section>
    <h2>Facewash</h2>
    <h3>Price : <input name="HFacewashprice" type="text" value="117" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 150ml</h3>
    Qty: <input type="num" name="HFacewashquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="HFacewash" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/handwash.jpeg" alt="Handwash" width="130px" height="140px">
    </section>
    <h2>Handwash</h2>
    <h3>Price : <input name="Handwashprice" type="text" value="102" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 750ml</h3>
    Qty: <input type="num" name="Handwashquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Handwash" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/shampoo.jpeg" alt="Shampoo" width="130px" height="140px">
    </section>
    <h2>Shampoo</h2>
    <h3>Price : <input name="Shampooprice" type="text" value="650" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="Shampooquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Shampoo" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/coconutoil.jpeg" alt="Coconut Oil" width="130px" height="140px">
    </section>
    <h2>Coconut Oil</h2>
    <h3>Price : <input name="CoconutOilprice" type="text" value="421" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1kg</h3>
    Qty: <input type="num" name="CoconutOilquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="CoconutOil" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/engage.jpeg" alt="Engage" width="130px" height="140px">
    </section>
    <h2>Engage</h2>
    <h3>Price : <input name="Engageprice" type="text" value="156" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 150ml</h3>
    Qty: <input type="num" name="Engagequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Engage" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/wildstonespray.jpeg" alt="Perfume" width="130px" height="140px">
    </section>
     <h2>Perfume</h2>
    <h3>Price : <input name="Perfumeprice" type="text" value="180" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 150ml</h3>
    Qty: <input type="num" name="Perfumequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Perfume" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/gillette.jpeg" alt="Gillette" width="130px" height="140px">
    </section>
    <h2>Gillette</h2>
    <h3>Price : <input name="Gilletteprice" type="text" value="247" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 2pcs</h3>
    Qty: <input type="num" name="Gillettequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Gillette" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/haircolor.jpeg" alt="Hair Color" width="130px" height="140px">
    </section>
    <h2>Hair Color</h2>
    <h3>Price : <input name="HairColorprice" type="text" value="467" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 72ml</h3>
    Qty: <input type="num" name="HairColorquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="HairColor" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/sanitary.jpeg" alt="Sanitary Pads" width="130px" height="140px">
    </section>
    <h2>Sanitary Pads</h2>
    <h3>Price : <input name="SanitaryPadsprice" type="text" value="400" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 50pcs</h3>
    Qty: <input type="num" name="SanitaryPadsquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="SanitaryPads" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/disinfectantspray.jpeg" alt="Disinfectantspray" width="130px" height="140px">
    </section>
    <h2>Disinfectant spray</h2>
    <h3>Price : <input name="Disinfectantsprayprice" type="text" value="150" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs </h3>
    Qty: <input type="num" name="Disinfectantsprayquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Disinfectantspray" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/mouthwash.jpeg" alt="Mouthwash" width="130px" height="140px">
    </section>
    <h2>Mouthwash</h2>
    <h3>Price : <input name="Mouthwashprice" type="text" value="60" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 80ml</h3>
    Qty: <input type="num" name="Mouthwashquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Mouthwash" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/bodylotion.jpeg" alt="Body lotion" width="130px" height="140px">
    </section>
    <h2>Body lotion</h2>
    <h3>Price : <input name="Bodylotionprice" type="text" value="230" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 400ml</h3>
    Qty: <input type="num" name="Bodylotionquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Bodylotion" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/rollon.jpeg" alt="Underarm rollon" width="130px" height="140px">
    </section>
    <h2>Underarm rollon</h2>
    <h3>Price : <input name="Underarmrollonprice" type="text" value="108" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 50ml</h3>
    Qty: <input type="num" name="Underarmrollonquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Underarmrollon" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/hygiene/skinliquid.jpeg" alt="Skin Liquid" width="130px" height="140px">
    </section>
    <h2>Skin Liquid</h2>
    <h3>Price : <input name="SkinLiquidprice" type="text" value="40" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100ml</h3>
    Qty: <input type="num" name="SkinLiquidquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="SkinLiquid" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>