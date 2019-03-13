<?php
require('connect.php');

$name  = $_POST['name'];
$email = $_POST['email'];
$tel   = $_POST['tel'];
$web   = $_POST['web'];

$id = $_POST['id'];

if ($id != '') {
    $sql = "UPDATE detail SET name='$name',email='$email',tel='$tel',web='$web' where id=$id";
} else {
    $sql = "INSERT INTO detail (name,email,tel,web) VALUES ('$name', '$email', '$tel', '$web')";
}
mysql_query('set names utf8');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>