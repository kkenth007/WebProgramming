<?php
header ('Content-type: text/html; charset=UTF-8');
$server = "localhost";
$user = "root";
$password = "mysql";
$dbname = "tbl_crud_ajax";

$conn = new mysqli($server, $user, $password, $dbname);
$conn->set_charset("utf8");

if(!$conn){
    die("Connection failed: " . $conn->connect_error);
}
// echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
// object oriented style => $result = $con->query( $query );
// procedural style      => $result = mysqli_query( $con, $query );
?>