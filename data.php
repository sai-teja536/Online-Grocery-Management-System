<html>
<head>
<script> function validate()
{
var a=document.forms["myform"]["sname"].value; var
b=document.forms["myform"]["sfname"].value; var
c=document.forms["myform"]["poadd"].value; var
d=document.forms["myform"]["peadd"].value; var
e=document.forms["myform"]["sex"]; var
f=document.forms["myform"]["city"].selectedIndex; var
g=document.forms["myform"]["course"].selectedIndex; var
h=document.forms["myform"]["district"].selectedIndex; var
i=document.forms["myform"]["mobno"].value;
if(!a.match(/^[a-zA-Z ]+$/))
{
alert("Please provide your name!"); return false;
}
if(!b.match(/^[a-zA-Z ]+$/))
{
alert("Father name must be filled alphabets!"); return
false;
}
if(!c.match(/.+$/)){ alert("Please fill the
postal address!"); return false;
}
if(!d.match(/[a-zA-Z0-9. ]+$/))
{
alert("Please fill the permanent address!"); return false;
}
if((e[0].checked==false) && (e[1].checked==false))
{
alert("Please select your gender!"); return false;
}
if(f<=0)
{
alert("Please select your city!"); return false;
}
if(g<=0)
{
alert("Please select your course"); return false;
}
if(h<=0)
{
alert("Please select your district"); return false;
}
if(!i.match(/^[0-9]+$/))
{
alert("Mobile number should contain numbers only"); return
false;
}
if(i.length!=10)
{
alert("Mobile number should contain exactly 10 digits"); return
false;
}
return true;
}
</script> <style> table{
background-color:aqua; width:
35%; height: 70%; margin-top:
2%;
}
input[type="text"]{ width:200;
}
caption{ background-color:aqua; fontsize:21;
}
button{ outline: none;
}
</style>
</head>
<body>
<table align="center" cellspacing="8">
<caption><b>Student Registration Form</b></caption>
<form name="myform" method="post">
<tr><td>Name</td><td><input type="text" name="sname"></td></tr>
<tr><td>Father Name</td><td><input type="text" name="sfname"></td></tr>
<tr><td>Postal<br>Address</td><td><input type="text" name="poadd"></td></tr>
<tr><td>Personal<br>Address</td><td><input type="text" name="peadd"></td></tr>
<tr><td>Sex</td><td>
<input type="radio" value="male" name="sex">Male
<input type="radio" value="female" name="sex">Female
</td></tr>
<tr><td>City</td><td>
<select name="city">
<option selected>-Select-</option><br>
<option>Chennai</option><br>
<option>Vellore</option><br>
<option>Tirupathi</option><br>
<option>Hyderabad</option><br>
<option>Banglore</option><br>
<option>Vijayawada</option><br>
</td></tr>
<tr><td>Course</td><td>
<select name="course">
<option selected>-Select-</option><br>
<option>Webtech</option><br>
<option>DBMS</option><br>
<option>Java</option><br>
<option>Complex</option><br>
<option>AOD</option><br>
<option>Networks</option><br>
</td></tr>
<tr><td>District</td><td>
<select name="district">
<option selected>-Select-</option><br>
<option>Chittoor</option><br>
<option>Kadapa</option><br>
<option>Vellore</option><br>
<option>Banglore</option><br>
<option>Chennai</option><br>
<option>Guntur</option><br>
<option>Katpadi</option><br></td></tr>
<tr><td>MobileNo</td><td><input type="text" name="mobno"></td></tr><br>
<tr><td><input type="submit" value="Reset"></td><td>
<button onclick="validate()" type="submit" name="sform">Submit
Form</button></td></tr>
</form>
</table>
 <?php 
error_reporting(0);
if($_POST){
 $name=$_POST['sname'];
 $address=$_POST['peadd'];
 $gender=$_POST['sex'];
 }
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "data";
 $conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);
 }
 $sql = "INSERT INTO name (username,gender,address) VALUES ('$name','$gender','$address')";
if(mysqli_query($conn, $sql))
{ 
  echo"successfully connected";
 } else{
 $temp= "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }
 ?>
</body>
</html>