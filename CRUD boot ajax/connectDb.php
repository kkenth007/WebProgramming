<?php
$server = "localhost";
$user = "root";
$password = "mysql";
$dbname = "users";

$conn = mysqli_connect($server, $user, $password, $dbname);
$conn->set_charset("utf8");

if(!$conn){
    die("Connection failed: " . $conn->connect_error);
}
// echo "เชื่อมต่อฐานข้อมูลสำเร็จ";

?>