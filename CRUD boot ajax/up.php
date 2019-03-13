<?php
require ('connect.php');
$id= $_POST['id'];

$name= $_POST['name'];
$email =$_POST['email'];
$tel= $_POST['tel'];
$web= $_POST['web'];

$sql = "UPDATE detail SET name='$name',email='$email',tel='$tel',web='$web' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>