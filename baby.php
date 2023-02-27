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
    <a href="javascript:voname(0)" class="dropbtn">Categories</a>
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
<form method="post">
<section class="head">
 <h1>Baby Care</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/ceregrow.jpeg" alt="Ceregrow" width="130px" height="140px">
    </section>
    <h2>Ceregrow</h2>
    <h3>Price : <input type="text" name="Ceregrowprice" value="303" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 300g</h3>
    Qty: <input type="num" name="Ceregrowquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Ceregrow" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/pampers.jpeg" alt="Pampers" width="130px" height="140px">
    </section>
    <h2>Pampers</h2>
    <h3>Price : <input name="Pampersprice" type="text" value="105" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 5pcs</h3>
    Qty: <input type="num" name="Pampersquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Pampers" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babyshampoo.jpeg" alt="Baby Shampoo" width="130px" height="140px">
    </section>
    <h2>Baby Shampoo</h2>
    <h3>Price : <input name="BabyShampooprice" type="text" value="93" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100ml</h3>
    Qty: <input type="num" name="BabyShampooquantity" style="width:30px" ></input><br><br>
   <input type="submit" name="BabyShampoo" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babywash.jpeg" alt="Baby Wash" width="130px" height="140px">
    </section>
    <h2>Baby Wash</h2>
    <h3>Price : <input name="BabyWashprice" type="text" value="90" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 100ml</h3>
    Qty: <input type="num" name="BabyWashquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BabyWash" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babyskinpowder.jpeg" alt="Baby Powder" width="130px" height="140px">
    </section>
    <h2>Baby Powder</h2>
    <h3>Price : <input name="BabyPowderprice" type="text" value="170" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 400g</h3>
    Qty: <input type="num" name="BabyPowderquantity" style="width:30px" ></input><br><br>
   <input type="submit" name="BabyPowder" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/cerelac.jpeg" alt="Cerelac" width="130px" height="140px">
    </section>
    <h2>Cerelac</h2>
    <h3>Price : <input name="Cerelacprice" type="text" value="289" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 300g</h3>
    Qty: <input type="num" name="Cerelacquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Cerelac" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babysoap.png" alt="Baby Soap" width="130px" height="140px">
    </section>
    <h2>Baby Soap</h2>
    <h3>Price : <input name="BabySoapprice" type="text" value="55" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 75g</h3>
    Qty: <input type="num" name="BabySoapquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BabySoap" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/kidstoothpaste.jpeg" alt="Kids Toothpaste" width="130px" height="140px">
    </section>
    <h2>Kids Toothpaste</h2>
    <h3>Price : <input name="KidsToothpasteprice" type="text" value="118" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 80g</h3>
    Qty: <input type="num" name="KidsToothpastequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="KidsToothpaste" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/mothersplus.jpeg" alt="Mother's Plus" width="130px" height="140px">
    </section>
    <h2>Mother's Plus</h2>
    <h3>Price : <input name="MotherPlusprice" type="text" value="560" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500g</h3>
    Qty: <input type="num" name="MotherPlusquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="MotherPlus" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/mamy.jpeg" alt="Mamy Poco" width="130px" height="140px">
    </section>
     <h2>Mamy Poco</h2>
    <h3>Price : <input name="Mamyprice" type="text" value="375" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 16pcs</h3>
    Qty: <input type="num" name="Mamyquantity" style="width:30px" ></input><br><br>
   <input type="submit" name="Mamy" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babycream.jpeg" alt="Baby Cream" width="130px" height="140px">
    </section>
    <h2>Baby Cream</h2>
    <h3>Price : <input name="BabyCreamprice" type="text" value="196" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200ml</h3>
    Qty: <input type="num" name="BabyCreamquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BabyCream" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/lactogen.jpeg" alt="Lactogen" width="130px" height="140px">
    </section>
    <h2>Lactogen</h2>
    <h3>Price : <input name="Lactogenprice" type="text" value="365" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 400g</h3>
    Qty: <input type="num" name="Lactogenquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Lactogen" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/feedbottle.jpeg" alt="Bottle" width="130px" height="140px">
    </section>
    <h2>Feeding Bottle</h2>
    <h3>Price : <input name="FeedingBottleprice" type="text" value="145" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250ml</h3>
    Qty: <input type="num" name="FeedingBottlequantity" style="width:30px" ></input><br><br>
   <input type="submit" name="FeedingBottle" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/napkin.jpeg" alt="Napkin" width="130px" height="140px">
    </section>
    <h2>Napkin</h2>
    <h3>Price : <input name="Napkinprice" type="text" value="140" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 6pcs</h3>
    Qty: <input type="num" name="Napkinquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Napkin" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babycarecollection.jpeg" alt="Care Collection" width="130px" height="140px">
    </section>
    <h2>Care Collection</h2>
    <h3>Price : <input name="CareCollectionprice" type="text" value="2000" style="width:50px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs </h3>
    Qty: <input type="num" name="CareCollectionquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="CareCollection" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/zookers.jpeg" alt="Zookers" width="130px" height="140px">
    </section>
    <h2>Zookers</h2>
    <h3>Price : <input name="Zookersprice" type="text" value="160" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs for 150g</h3>
    Qty: <input type="num" name="Zookersquantity" style="width:30px" ></input><br><br>
   <input type="submit" name="Zookers" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/babymassageoil.jpeg" alt="Baby Massage oil" width="130px" height="140px">
    </section>
    <h2>Baby Massage oil</h2>
    <h3>Price : <input name="BabyMassageoilprice" type="text" value="310" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 500ml</h3>
    Qty: <input type="num" name="BabyMassageoilquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BabyMassageoil" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/baby care/huggies.jpeg" alt="Huggies" width="130px" height="140px">
    </section>
    <h2>Huggies</h2>
    <h3>Price : <input name="Huggiesprice" type="text" value="561" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 42pcs</h3>
    Qty: <input type="num" name="Huggiesquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Huggies" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>