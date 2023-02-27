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
      <a href="hygiene.php">Hygiene</a>
      <a href="snacks.php">Snacks</a>
    </div>
  </li>
  <li><a href="main.php">Log Out</a></li>
  </ul>
</div>
<form method="post">
<section class="head">
 <h1>Vegetables</h1>
 <section class="sub-head">
   <section class="sub-head-one">
    <section class="image">
     <img src="https://media.istockphoto.com/photos/three-tomatoes-picture-id91476821?b=1&k=20&m=91476821&s=170667a&w=0&h=4Gr_K3tfGJwUVUMeSOZhYKSyeOXeKz9y-7yZmPgIxaY=" alt="tomato" width="130px" height="140px">
    </section>
    <h2>Tomato</h2>
    <h3>Price : <input name="Tomatoprice" type="text" value="40" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Tomatoquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Tomato" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="https://media.istockphoto.com/photos/whole-with-slice-cucumber-isolated-on-white-background-picture-id967491012?k=20&m=967491012&s=612x612&w=0&h=1QfXbFG2oD3glzetlAaOfqgyaH7s8nA3st8KP7JVruo=" alt="cucumber" width="130px" height="140px">
    </section>
    <h2>Cucumber</h2>
    <h3>Price : <input name="Cucumberprice" type="text" value="30" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Cucumberquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Cucumber" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="https://t3.ftcdn.net/jpg/01/51/21/90/360_F_151219098_uZdemuk8HnmkEcCpueNxHexY71p34bSp.jpg" alt="potato" width="130px" height="140px">
    </section>
    <h2>Potato</h2>
    <h3>Price : <input name="Potatoprice" type="text" value="30" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Potatoquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Potato" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="https://media.istockphoto.com/photos/red-onion-slice-picture-id175448479?b=1&k=20&m=175448479&s=170667a&w=0&h=kcjadYpPSifmgaESFhA7EKVMdLmL-pXPhrwSvJM0o2U=" alt="onion" width="130px" height="140px">
    </section>
    <h2>Onion</h2>
    <h3>Price : <input name="Onionprice" type="text" value="50" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Onionquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Onion" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXzQyO45t56P0FBZh4Z0a7F20yzWnPwdXwbQ&usqp=CAU" alt="peas" width="130px" height="140px">
    </section>
    <h2>Peas</h2>
    <h3>Price : <input name="Peasprice" type="text" value="120" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Peasquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Peas" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="https://media.istockphoto.com/photos/carrot-picture-id619252960?k=20&m=619252960&s=612x612&w=0&h=PXRfg965zzejvBGkCK1-NyIJ4bfIgjfy9j0lsL_BqMw=" alt="carrot" width="130px" height="140px">
    </section>
    <h2>Carrot</h2>
    <h3>Price : <input name="Carrotprice" type="text" value="50" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Carrotquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Carrot" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/lady.jpeg" alt="ladies finger" width="130px" height="140px">
    </section>
    <h2>Ladies Finger</h2>
    <h3>Price : <input name="LadiesFingerprice" type="text" value="34" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="LadiesFingerquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="LadiesFinger" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/bottleguard.jpeg" alt="Bottle Guard" width="130px" height="140px">
    </section>
    <h2>Bottle Guard</h2>
    <h3>Price : <input name="BottleGuardprice" type="text" value="46" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per pc</h3>
    Qty: <input type="num" name="BottleGuardquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BottleGuard" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/chilli.jpeg" alt="Chilli" width="130px" height="140px">
    </section>
    <h2>Chilli</h2>
    <h3>Price : <input name="Chilliprice" type="text" value="38" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 250g</h3>
    Qty: <input type="num" name="Chilliquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Chilli" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/beetroot.jpeg" alt="BeetRoot" width="130px" height="140px">
    </section>
    <h2>BeetRoot</h2>
    <h3>Price : <input name="BeetRootprice" type="text" value="56" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="BeetRootquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="BeetRoot" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/brinjal.jpeg" alt="Brinjal" width="130px" height="140px">
    </section>
    <h2>Brinjal</h2>
    <h3>Price : <input name="Brinjalprice" type="text" value="73" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Brinjalquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Brinjal" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/ginger.jpeg" alt="Ginger" width="130px" height="140px">
    </section>
    <h2>Ginger</h2>
    <h3>Price : <input name="Gingerprice" type="text" value="104" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Gingerquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Ginger" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/spinach.jpeg" alt="Spinach" width="130px" height="140px">
    </section>
    <h2>Spinach</h2>
    <h3>Price : <input name="Spinachprice" type="text" value="97" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Spinachquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Spinach" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/cauliflower.jpeg" alt="Cauli Flower" width="130px" height="140px">
    </section>
    <h2>Cauli Flower</h2>
    <h3>Price : <input name="CauliFlowerprice" type="text" value="25" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1pc</h3>
    Qty: <input type="num" name="CauliFlowerquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="CauliFlower" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/capsicum.jpeg" alt="Capsicum" width="130px" height="140px">
    </section>
    <h2>Capsicum</h2>
    <h3>Price : <input name="Capsicumprice" type="text" value="141" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per kg</h3>
    Qty: <input type="num" name="Capsicumquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Capsicum" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/mushroom.jpeg" alt="Mush Room" width="130px" height="140px">
    </section>
    <h2>Mush Room</h2>
    <h3>Price : <input name="MushRoomprice" type="text" value="64" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1pack</h3>
    Qty: <input type="num" name="MushRoomquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="MushRoom" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/cabbage.jpeg" alt="Cabbage" width="130px" height="140px">
    </section>
    <h2>Cabbage</h2>
    <h3>Price : <input name="Cabbageprice" type="text" value="32.28" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 1pc</h3>
    Qty: <input type="num" name="Cabbagequantity" style="width:30px" ></input><br><br>
    <input type="submit" name="Cabbage" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
   <section class="sub-head-one">
    <section class="image">
     <img src="./images/vegetables/drumstick.jpeg" alt="Drum Stick" width="130px" height="140px">
    </section>
    <h2>Drum Stick</h2>
    <h3>Price : <input name="DrumStickprice" type="text" value="67" style="width:35px;background-color:white;color:rgba(0,0,0,1);border:0px solid white;font-size:18px;" readonly>Rs per 200g</h3>
    Qty: <input type="num" name="DrumStickquantity" style="width:30px" ></input><br><br>
    <input type="submit" name="DrumStick" value="Buy" style="height:30px;width:100px;background-color:#4CC417;color:white;border:0px solid #4CC417;border-radius:5px;" />
   </section>
  </section>
</section>
</form>
<?php
  include 't2.php';
?>
</body>
</html>