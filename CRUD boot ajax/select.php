<head>
<meta charset="UTF-8">
<style>
label{
    font-weight:bold;
    width:60px;
}
</style>
</head>
<?php
require('connect.php');
$id= $_POST['id'];
// echo $id;
    $sqlSelect = "SELECT * FROM detail where id=$id";
    
    $result = $conn->query($sqlSelect);
    ?>
    <div class='table table-striped'>
    <?php while(($row = $result->fetch_assoc()) !== null){ ?>
        <tr><td><label>ชื่อ</label></td>
            <td><?php echo ": ".$row['name'];?></td>
            </tr><br/>
            <tr><td><label>อีเมลล์</label></td>
            <td><?php echo ": ".$row["email"];?></td>
            </tr><br/>
            <tr><td><label>โทรศัพท์</label></td>
            <td><?php echo ": ".$row["tel"];?></td>
            </tr><br/>
            <tr><td><label>เว็บไซต์</label></td>
            <td><?php echo ": ".$row["web"];?></td>
            </tr>
    <?php }?>
    </table>