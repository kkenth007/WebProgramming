<?php
header('Content-Type: text/html; charset=utf-8');
include('connectDb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
        border:1px solid black;
        border-collapse:collapse;

    }
    td,th,tr{
        border:1px solid black;
        padding:15px;
    }
    </style>
</head>
<body>
    <form action="user.php" method="post">
    name <input type="text" name="fname"><br>
    fname <input type="text" name="lname"><br>
    email <input type="text" name="email"><br>
    phone <input type="text" name="phone"><br>
    <input type="submit" name="submit">
    </form>
    <hr>
    <table>
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อีเมลล์</th>
            <th>โทรศัพท์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>

        <?php
        $sqlSelect = "SELECT * FROM user";
        $count=1;
        $result = $conn->query($sqlSelect) or die($conn->error);
        while($row = $result->fetch_assoc()){    
            echo "<tr>
            <td>$count</td>
            <td>{$row["fname"]}</td>
            <td>{$row["lname"]}</td>
            <td>{$row["email"]}</td>
            <td>{$row["phone"]}</td>
            <td><a href='updateUser.php?user_id={$row['id']}';>แก้ไขข้อมูล</a></td>
            <td><a href='deleteUser.php?user_id={$row['id']}';>ลบข้อมูล</a></td>
            </tr>";
            $count++;
        }
    
        ?>
    </table>

</body>
</html>