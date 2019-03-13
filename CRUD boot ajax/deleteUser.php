<?php 
require('connectDB.php');
$id= $_GET['user_id'];

    $sqlDelete = "DELETE FROM user where id=$id";
    $result = $conn->query($sqlDelete);
    $conn->query($sql);
    $conn->close();
    header("Location:TestDB.php");
    exit();

?>