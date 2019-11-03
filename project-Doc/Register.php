<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')

{ 
 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inContact = $_POST["contact"];
 $inAddress = $_POST["address"];
 $inGender = $_POST["gender"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inDisease = $_POST["disease"];
 $inMeetingtime = $_POST["meetingtime"];
 
 $stmt = $db->prepare("INSERT INTO clients(FULLNAME, Contact, Address, Gender, Disease, Meetingtime) VALUES(?,?,?,?,?,?)"); //Fetching all the records with input credentials
 $stmt->bind_param("ssssss", $inFullname, $inContact, $inAddress, $inGender, $inDisease, $inMeetingtime); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: RegSuccess.php"); // user will be taken to the success page
 }
 else
 {
 echo "Already Registered with same DATA. Please try again"; 
 ?>
 <a href="RegisterForm.php">Try Again</a>
 <?php 
 }
}
?>
</body> 
</html>
