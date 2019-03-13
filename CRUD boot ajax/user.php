<?php
header('Content-Type: text/html; charset=utf-8');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
include('connectDb.php');
$sql = "INSERT INTO user(fname,lname,email,phone)
VALUES('$fname ','$lname','$email','$phone')";

// mysql_query($sql);
$conn->query($sql);
$conn->close();
header("Location:TestDB.php");
exit();

?>