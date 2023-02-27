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
      <a href="products.php">Vegetables</a>
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
 <h1>Dairy</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/butter.jpeg" alt="Butter" width="130px" height="140px">
    </section>
    <h2>Butter</h2>
    <h3>Price : <input name="Butterprice" type="text" value="52" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100g</h3>
    Qty: <input type="num" name="Butterquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Butter" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/milk.jpeg" alt="Milk" width="130px" height="140px">
    </section>
    <h2>Milk</h2>
    <h3>Price : <input name="Milkprice"type="text" value="68" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="Milkquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Milk" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/curd.jpeg" alt="Curd" width="130px" height="140px">
    </section>
    <h2>Curd</h2>
    <h3>Price : <input name="Curdprice" type="text" value="23" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs 200g</h3>
    Qty: <input type="num" name="Curdquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Curd" value="Buy" style="margin-top:-10pxheight:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/buttermilk.jpeg" alt="Buttermilk" width="130px" height="140px">
    </section>
    <h2>Buttermilk</h2>
    <h3>Price : <input name="Buttermilkprice" type="text" value="50" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="Buttermilkquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Buttermilk" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/paneer.jpeg" alt="Paneer" width="130px" height="140px">
    </section>
    <h2>Paneer</h2>
    <h3>Price : <input name="Paneerprice" type="text" value="75" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="Paneerquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Paneer" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/cheese.jpeg" alt="Cheese" width="130px" height="140px">
    </section>
    <h2>Cheese</h2>
    <h3>Price : <input name="Cheeseprice" type="text" value="75" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100g</h3>
    Qty: <input type="num" name="Cheesequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Cheese" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/bread.jpeg" alt="Bread" width="130px" height="140px">
    </section>
    <h2>Bread</h2>
    <h3>Price : <input name="Breadprice" type="text" value="115" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per pc</h3>
    Qty: <input type="num" name="Breadquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Bread" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/rusk.jpeg" alt="Rusk" width="130px" height="140px">
    </section>
    <h2>Rusk</h2>
    <h3>Price : <input name="Ruskprice" type="text" value="33" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="Ruskquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Rusk" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/lassi.jpeg" alt="Lassi" width="130px" height="140px">
    </section>
    <h2>Lassi</h2>
    <h3>Price : <input name="Lassiprice" type="text" value="15" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200ml</h3>
    Qty: <input type="num" name="Lassiquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Lassi" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/kool.jpeg" alt="Kool" width="130px" height="140px">
    </section>
     <h2>Kool</h2>
    <h3>Price : <input name="Koolprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 180ml</h3>
    Qty: <input type="num" name="Koolquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Kool" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/milkshake.jpeg" alt="Milkshake" width="130px" height="140px">
    </section>
    <h2>Milkshake</h2>
    <h3>Price : <input name="Milkshakeprice" type="text" value="32" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 180ml</h3>
    Qty: <input type="num" name="Milkshakequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Milkshake" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/soyadrink.jpeg" alt="Soyadrink" width="130px" height="140px">
    </section>
    <h2>Soyadrink</h2>
    <h3>Price : <input name="Soyadrinkprice" type="text" value="133.4" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1l</h3>
    Qty: <input type="num" name="Soyadrinkquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Soyadrink" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/fruitbiscuit.jpeg" alt="Biscuits" width="130px" height="140px">
    </section>
    <h2>Biscuits</h2>
    <h3>Price : <input name="Biscuitsprice" type="text" value="145" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="Biscuitsquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Biscuits" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/cakeroll.jpeg" alt="Swiss Roll" width="130px" height="140px">
    </section>
    <h2>Swiss Roll</h2>
    <h3>Price : <input name="SwissRollprice" type="text" value="10" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 28g</h3>
    Qty: <input type="num" name="SwissRollquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="SwissRoll" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/milkmaid.jpeg" alt="Milk maid" width="130px" height="140px">
    </section>
    <h2>Milk maid</h2>
    <h3>Price : <input name="Milkmaidprice" type="text" value="132" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 400g</h3>
    Qty: <input type="num" name="Milkmaidquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Milkmaid" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/cupcake.jpeg" alt="Cup cake" width="130px" height="140px">
    </section>
    <h2>Cup cake</h2>
    <h3>Price : <input name="Cupcakeprice" type="text" value="150" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 200g</h3>
    Qty: <input type="num" name="Cupcakequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Cupcake" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/coffee.jpeg" alt="Coffee" width="130px" height="140px">
    </section>
    <h2>Coffee</h2>
    <h3>Price : <input name="Coffeeprice" type="text" value="322" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250g</h3>
    Qty: <input type="num" name="Coffeequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Coffee" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/dairy/tea.jpeg" alt="Tea" width="130px" height="140px">
    </section>
    <h2>Tea</h2>
    <h3>Price : <input name="Teaprice" type="text" value="20" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 40g</h3>
    Qty: <input type="num" name="Teaquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Tea" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>