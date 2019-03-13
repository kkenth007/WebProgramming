<?php
//เขียน สไตล์ Object oriented style
require('connect.php');
$id= $_POST['id'];
$query ="SELECT * FROM detail where id = $id";
$result = $conn->query( $query );
$row = $result->fetch_array(MYSQLI_ASSOC);
echo json_encode($row);
$conn->close();

?>