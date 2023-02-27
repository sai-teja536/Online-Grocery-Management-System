<html>
<head>
  <link href="signup.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="title">
  <h1 style="color:white">SJU</h1>
  <section class="troll">
    <img src="./images/trolley.png" width="50px" height="50px"></img>
</section>
  <ul>
  <li><a href="main.php">Home</a></li>
  <li><a href="Signup.php">Signup</a></li>
  <li><a href="login.php"><i class="fas fa-user"></i></a></li>
  </ul>
</div>
<h1 style="text-align:center;color:white;font-size:50px">SIGNUP</h1>
<div class="back">
<form method="post" class="formdesign"> 
         <label for="user">User Name : </label><input type="text" id="user" name="user" /><br><br>
         <label for="mobile">Phone Number : </label><input type="text" id="mobile" name="mobile" /><br><br>
         <label for="Email">Email : </label><input type="email" id="Email" name="Email" /><br><br>
         <label for="password">Password : </label><input type="text" id="password" name="password"><?php echo "<div id='p' style='color:red'></div>" ?><br>
         <label for="repassword">Re-password :  </label><input type="text" id="repassword" name="repassword" /><br><br>
         <input type="submit" name="sub" value="Signup">
 </form>
</div>
</body>
<?php
        if(isset($_POST['sub'])) 
        {
            $name=$_POST['user'];
            $phone=$_POST['mobile'];
            $email=$_POST['Email'];
            $pass=$_POST['password'];
            $repass=$_POST['repassword'];
            if($name===""||$phone===""||$email===""||$pass===""||$repass==="")
            {
    ?>
            <script type="text/JavaScript">
             alert("Fill all the Details");
            </script>
    <?php
            }
            else if(strlen($pass)<6)
            {
    ?>
           <script type="text/JavaScript">
              document.getElementById('p').innerHTML="Your password is weak";
           </script>
    <?php
            }
            else if($pass!==$repass)
            {
    ?>
           <script type="text/JavaScript">
              document.getElementById('p').innerHTML="Your password is not matching with re-password";
           </script>
    <?php
            }
            else{
               $servername="localhost";
               $username="root";
               $password="";
               $dbname="grocery";
               $conn=new mysqli($servername,$username,$password,$dbname);
               if($conn->connect_error)
               {
                die("Connection failed : ".$conn->connect_error);
               }
               $sql="INSERT INTO sign (name,phone,email,password,repassword	) VALUES ('".$name."','".$phone."','".$email."','".$pass."','".$repass."')"; 
               if($conn->query($sql)===TRUE)
               {
    ?>
                <script type="text/JavaScript">
                   alert("Details saved");
               </script>
    <?php
               }
               else{
                echo "Error : ".$conn->error;
               }
            }
        }
    ?>
</html>