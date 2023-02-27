<?php 
session_start();
?>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v6.1.1/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></link>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="main.css" rel="stylesheet">
</head>
<body>
<div class="title">
  <h1>SJU</h1>
  <section class="troll">
    <img src="./images/trolley.png" width="50px" height="50px"></img>
</section>
  <ul class="l">
  <li><a href="signup.php">Signup</a></li>
  <li><a href="login.php"><i class="fas fa-user"></i></a></li>
  </ul>
  <div class="laptop">
    <i id="bar" class="fas fa-outdent"></i>
  </div>
</div>
<section class="banner">
  <h1 class="quote" >Your needs in Just One Place ...<br>Happy Shopping &#128522;</h1>
  <img src="./images/grocery1.jpeg">
</section>
<section class="det">
  <section class="det-sub">
    <img src="./images/freeshipping.png">
    <span>Free Delivery</span>
  </section>
  <section class="det-sub">
    <img src="./images/customersupport.jpeg">
    <span>Customer Support</span>
  </section>
  <section class="det-sub">
    <img src="./images/24.png">
    <span>24/7 Available</span>
  </section>
   <section class="det-sub">
    <img src="./images/onlinepayment.jpeg">
    <span>Online Payment Mode</span>
  </section>
   <section class="det-sub">
    <img src="./images/cod.png">
    <span>Cash On Delivery</span>
  </section>
</section>
<section class="foot">
  <section class="sju">
   <h4>SJU</h4>
   <ul>
      <li><a href="#">About Us</a></li>
      <li><a href="#">In News</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Affiliate</a></li>
      <li><a href="#">Terms and Conditions</a></li>
   </ul>
  </section>
  <section class="help">
   <h4>Help</h4>
   <ul>
    <li><a href="#">FAQs</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">WalletFAQs</a></li>
    <li><a href="#">Wallet T&Cs</a></li>
    <li><a href="#">Vendor Connect</a></li>
   </ul>
  </section>
  <section class="download">
   <h4>Download Our App</h4>
   <div class="sub-download">GET IT ON <span>Google play</span></div>
   <div class="sub-download">Download on the <span>App Store</span></div>
  </section>
  <section class="social">
</section>
</body>
<?php session_destroy(); ?>
</html>