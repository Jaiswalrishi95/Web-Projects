<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="aman";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$register_query = "INSERT INTO `form`(`fname`, `mname`, `lname`, `address`, `gender`, `phone`, `email`, `username`, `password`) VALUES ('$fname','$mname','$lname','$address','$gender','$phone','$email','$user','$pass')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="css/style1.css">
</head>
 
<body>
<div class="navigation">
<nav>
<ul>
<li><a href="home.html"><i class="fas fa-home"></i> Home </a></li>
<li><a href="home.html">
    <i class="fas fa-caret-right fa-lg"></i> Career In IAF</a>
<ul>
<li><a href="overview.html">Overview-Career</a></li>
<li><a href="branch.html">Find your futer-as per Branches</a></li>

<li><a href="term.html">General Term and Condition</a></li>
</ul>
</li>
    
<li><a href="#"><i class="fas fa-caret-right fa-lg"></i> Life in IAF</a>
<ul>
<li><a href="adventure.html">Adventure</a></li>
<li><a href="growth.html">Growth</a></li>

</ul></li>
<li><a href="#"><i class="fas fa-caret-right fa-lg"></i> Selection</a>
<ul>
<li><a href="selction.html">selection process</a></li>
<li><a href="medical.html">medical standard</a></li>
<li><a href="gauid.html">guidelines for candidates</a></li>
</ul>
</li>
<li><a href="#"><i class="fas fa-caret-right fa-lg"></i> Training</a>
<ul>

<li><a href="fly.html">flying training establishment</a></li>
<li><a href="overvi.html">overview training</a></li>
</ul></li>
<li><a href="#"><i class="fas fa-caret-right fa-lg"></i> About</a>
<ul>
<li><a href="history.html">history of the iaf</a></li>
<li><a href="#">motto of the iaf</a></li>
<li><a href="#">legends of the iaf</a></li>
</ul></li>
</ul>
<a class="btn" href="form.php">Register</a>
</nav>
</div>
    </div>
  <br><br><br><br><br><br><br><br>
 
   <div class="para1">   
  <img src="form.jpg" class="ove" >
      <br>
  
     <h3 class="he"> Registeration form of Indian Air Force</h3>


<form action="" method="post" action="form.php">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="fname" placeholder="enter your first name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="mname" placeholder="enter your middle name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="lname" placeholder="enter your last name"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" placeholder="enter your address"></td>
</tr>
<tr>
<td>Gender</td> 
<td><input type="radio" name="gender" value="Male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="others">others</td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="tel" name="phone" placeholder="enter your phone no"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>email:</td>
<td><input type="email" name="email" placeholder="example@example.com"></td>
 
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>password:</td>
<td><input type="password" name="password" value="admin"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>