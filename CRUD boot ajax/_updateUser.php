<?php
include('connectDB.php');
$user_id = $_POST['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 
$sqlComplete = "UPDATE user 
SET fname='$fname',lname='$lname',email='$email',phone='$phone'
WHERE id ='$user_id'";
echo $$sqlComplete;
$result = $conn->query($sqlComplete) or die($conn->error);
$conn->close();
header("Location:TestDB.php");

?>