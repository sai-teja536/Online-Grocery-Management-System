<?php
session_start();
?>
<html>
<head>
  <link href="login.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
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
<h1 style="text-align:center;color:white;font-size:50px">LOGIN</h1>
<div class="back">
<form method="post" class="formdesign"> 
         <label for="user">User Name : </label><input type="text" id="user" name="user"><br><br>
         <label for="password">Password : </label><input type="text" id="password" name="password"><br><br>
         <input type="submit" name="sub" value="Login"><br><br>
         <?php echo "<div id='p' style='color:red'><div>" ?>
</form>
</div>
</body>
    <?php
        if(isset($_POST['sub'])) 
        {
            $name=$_POST['user'];
            $pass=$_POST['password'];
            if($name===""||$pass==="")
            {
    ?>
       <script>
         alert("Fill the details");
        </script>
    <?php
            }
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="grocery";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error)
            {
             die("Connection failed : ".$conn->connect_error);
            }
            $sql="SELECT name,password from sign WHERE name='".$name."'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    $x=$row['name'];
                    $y=$row['password'];
                }
            }
            else
            {
    ?>
    <script>
            $('#p').text("*NO account");
    </script>
    <?php
            }
            if($name!==$x||$pass!==$y)
            {
    ?>       
        <script>
                $('#p').text("*Password is not same");
        </script>
    <?php       
            }
            else if($name===$x&&$pass===$y)
            {
                $_SESSION["username"]=$name;
                header("Location: http://localhost/practice%20programs/products.php");
            }
        }
    ?>
</html>