<?php
require('connect.php');
$id= $_POST['id'];

    $sqlDelete = "DELETE FROM detail where id=$id";
    $result = $conn->query($sqlDelete);
?>