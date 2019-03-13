<head>
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
    $sqlSelect = "SELECT * FROM detail where id=$id";
    $result = $conn->query($sqlSelect);
    ?>
    <div class='table table-striped'>
    <form action="up.php" method="post">
    <?php while(($row = $result->fetch_assoc()) !== null){ ?>
        <tr><td><label>ชื่อ</label></td>
            <td><input type="text" class="form-control" value="<?php echo $row['name'];?>"></td>
            </tr><br/>
            <tr><td><label>อีเมลล์</label></td>
            <td><input type="text"  class="form-control" value="<?php echo $row["email"];?>"></td>
            </tr><br/>
            <tr><td><label>โทรศัพท์</label></td>
            <td><input type="text"  class="form-control" value="<?php echo $row["tel"];?>"></td>
            </tr><br/>
            <tr><td><label>เว็บไซต์</label></td>
            <td><input type="text"  class="form-control" value="<?php echo $row["web"];?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $id; ?>" ></td>
            </tr>
            <!-- <button type="submit" id="Update" class="btn btn-primary btn-sm" data-dismiss="modal">Update</button> -->
    <?php }?>
    <br>
  
    </form>
    </table>
    