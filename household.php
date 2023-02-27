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
      <a href="products.php">Vegetables</a>
      <a href="hygiene.php">Hygiene</a>
      <a href="snacks.php">Snacks</a>
    </div>
  </li>
  <li><a href="main.php">Log Out</a></li>
  </ul>
</div>
<form method="post">
<section class="head">
 <h1>Household</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/household/vim.jpeg" alt="Vim" width="130px" height="140px">
    </section>
    <h2>Vim</h2>
    <h3>Price : <input name="Vimprice" type="text" value="10" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 130g</h3>
    Qty: <input type="num" name="Vimquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Vim" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/household/detergentpowder.jpeg" alt="Surf Excel" width="130px" height="140px">
    </section>
    <h2>Surf Excel</h2>
    <h3>Price : <input name="SurfExcelprice" type="text" value="36" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500g</h3>
    Qty: <input type="num" name="SurfExcelquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="SurfExcel" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src=" ./images/household/harpic.jpeg" alt="Harpic" width="130px" height="140px">
    </section>
    <h2>Harpic</h2>
    <h3>Price : <input name="Harpicprice" type="text" value="38" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200ml</h3>
    Qty: <input type="num" name="Harpicquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Harpic" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/hit.jpeg" alt="Hit" width="130px" height="140px">
    </section>
    <h2>Hit</h2>
    <h3>Price : <input name="Hitprice" type="text" value="334" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 700ml</h3>
    Qty: <input type="num" name="Hitquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Hit" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/goodknight.jpeg" alt="Good Knight" width="130px" height="140px">
    </section>
    <h2>Good Knight</h2>
    <h3>Price : <input name="GoodKnightprice" type="text" value="142" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 2pcs</h3>
    Qty: <input type="num" name="GoodKnightquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="GoodKnight" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/floorcleaner.jpeg" alt="Floor Cleaner" width="130px" height="140px">
    </section>
    <h2>Floor Cleaner</h2>
    <h3>Price : <input name="FloorCleanerprice" type="text" value="142" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="FloorCleanerquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="FloorCleaner" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/vimgel.jpeg" alt="Vim Gel" width="130px" height="140px">
    </section>
    <h2>Vim Gel</h2>
    <h3>Price : <input name="VimGelrice" type="text" value="52" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="VimGelquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="VimGel" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/rin.jpeg" alt="Rin" width="130px" height="140px">
    </section>
    <h2>Rin</h2>
    <h3>Price : <input name="Rinprice" type="text" value="10" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1bar</h3>
    Qty: <input type="num" name="Rinquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Rin" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/comfort.jpeg" alt="Comfort" width="130px" height="140px">
    </section>
    <h2>Comfort</h2>
    <h3>Price : <input name="Comfortprice" type="text" value="220" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 860ml</h3>
    Qty: <input type="num" name="Comfortquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/colin.jpeg" alt="Colin" width="130px" height="140px">
    </section>
     <h2>Colin</h2>
    <h3>Price : <input name="Colinprice" type="text" value="122" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 800ml</h3>
    Qty: <input type="num" name="Colinquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Colin" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/agarbatti.jpeg" alt="Agarbatti" width="130px" height="140px">
    </section>
    <h2>Agarbatti</h2>
    <h3>Price : <input name="Agarbattiprice" type="text" value="47" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1box</h3>
    Qty: <input type="num" name="Agarbattiquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Agarbatti" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/camphor.jpeg" alt="Camphor" width="130px" height="140px">
    </section>
    <h2>Camphor</h2>
    <h3>Price : <input name="Camphorprice" type="text" value="280" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100g</h3>
    Qty: <input type="num" name="Camphorquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Camphor" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/dhoop.jpeg" alt="Dhoop" width="130px" height="140px">
    </section>
    <h2>Dhoop</h2>
    <h3>Price : <input name="Dhoopprice" type="text" value="75" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 12pcs</h3>
    Qty: <input type="num" name="Dhoopquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Dhoop" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/wick.jpeg" alt="Wick" width="130px" height="140px">
    </section>
    <h2>Wick</h2>
    <h3>Price : <input name="Wickprice" type="text" value="30" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100pcs</h3>
    Qty: <input type="num" name="Wickquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Wick" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/poojaoil.jpeg" alt="Pooja Oil" width="130px" height="140px">
    </section>
    <h2>Pooja Oil</h2>
    <h3>Price : <input name="PoojaOilprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="PoojaOilquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="PoojaOil" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/kumkuma.jpeg" alt="Kumkuma" width="130px" height="140px">
    </section>
    <h2>Kumkuma</h2>
    <h3>Price : <input name="Kumkumaprice" type="text" value="50" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 40g</h3>
    Qty: <input type="num" name="Kumkumaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Kumkuma" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/garbagebags.jpeg" alt="Garbage Bags" width="130px" height="140px">
    </section>
    <h2>Garbage Bags</h2>
    <h3>Price : <input name="GarbageBagsprice" type="text" value="64" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 30pcs</h3>
    Qty: <input type="num" name="GarbageBagsquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="GarbageBags" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="  ./images/household/steelgrip.jpeg" alt="Steel Grip" width="130px" height="140px">
    </section>
    <h2>Steel Grip</h2>
    <h3>Price : <input name="SteelGripprice" type="text" value="12" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1pc</h3>
    Qty: <input type="num" name="SteelGripquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="SteelGrip" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>