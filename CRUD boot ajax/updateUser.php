<?php
require('connectDB.php');
$user_id = $_GET['user_id'];
$sqlShowUser = "SELECT * FROM user WHERE id = '$user_id'";
$result = $conn->query($sqlShowUser) or die($conn->error);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
<form action="_updateUser.php" method="post">
    name <input type="text" name="fname" value="<?php echo $row["fname"] ?>"><br>
    fname <input type="text" name="lname" value="<?php echo $row["lname"] ?>"><br>
    email <input type="text" name="email" value="<?php echo $row["email"] ?>"><br>
    phone <input type="text" name="phone" value="<?php echo $row["phone"] ?>"><br>
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
    <input type="submit" name="submit">
    </form>
</body>
</html>