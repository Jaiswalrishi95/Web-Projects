<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="appt.css"/>
<!-- Javascript validation for user inputs -->
<script>
function validate()
{ 
var fullname = document.register.fullname.value;
var contact = document.register.contact.value;
var address = document.register.address.value; 
var gender = document.register.gender.value;
if (fullname==null || fullname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (contact==null || contact=="")
{ 
alert("Contact can't be blank"); 
return false; 
}
else if (address==null || address=="")
{ 
alert("Address can't be blank"); 
return false; 
}
else if (gender==null || gender=="")
{ 
alert("Gender can't be blank"); 
return false;
}
else if (disease==null || disease=="")
{ 
alert("Disease can't be blank"); 
return false;
}
else if (meetingtime==null || meetingtime=="")
{ 
alert("Meetingtime can't be blank"); 
return false;
}
} 
</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center" class="container">
	<img src="apptl.jfif">
	<h3>Make An Appointment Here<h3>
 <br>
<form name="register" method="post" action="Register.php" onsubmit="return validate();" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="contact" name="contact" /></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" /></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" /><?php
	if(isset($gender)&&$gender='female')
	echo "checked";?>
	Female
<input type="radio" name="gender" /><?php
	if(isset($gender)&&$gender='male')
	echo "checked";?>
	Male</td>
</tr>
<tr>
<td>Disease</td>
<td><select type="selection" name="disease" />
<option>Disease</option>
	<option>Dental disease</option>
	<option>Eye related disease</option>
	<option>Ear related disease</option>
	<option>Brain related disease</option>
	<option>Bone related disease</option>
	<option>Heart disease</option>
	<option>Stomach disease</option>
	<option>Other </option>
	</select></br></td>
</tr>
<tr>
<td>Meeting Time</td>
<td><select type="section" name="meetingtime">
	<ol>
	<option>Time To Meet</option>
	<option name="time" placeholder="time to meet" >9.00 am to 10.00 am</option>
	<option name="time" placeholder="time to meet" >10.00 am to 11.00 am</option>
	<option name="time" placeholder="time to meet" >11.00 am to 12.00 pm</option>
	<option name="time" placeholder="time to meet" >12.00 pm to 1.00 pm</option>
	<option name="time" placeholder="time to meet" >2.00 pm to 3.00 pm</option>
	<option name="time" placeholder="time to meet" >3.00 pm to 4.00 pm</option>
	<option name="time" placeholder="time to meet" >4.00 pm to 5.00 pm</option>
	<option name="time" placeholder="time to meet" >5.00 pm to 6.00 pm</option>
	<option name="time" placeholder="time to meet" >6.00 pm to 7.00 pm</option>
	<option name="time" placeholder="time to meet" >7.00 pm to 8.00 pm</option>
	</ol>
	</select>
	</br></td>
</tr>
<tr>
<td><input type="submit" value="Register"></input></td>
<td><input type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>