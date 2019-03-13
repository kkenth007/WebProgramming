<?php
header ('Content-type: text/html; charset=UTF-8');
require('connect.php');

    $sqlSelect = "SELECT * FROM detail";
    $result = $conn->query($sqlSelect);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD BOOTSTRAP AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="./asset/alert/alert.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>

            <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./asset/css/main.css">
</head>

<body>
    <div class="container">
        <h2 style="text-align:center;padding-top:20px;"><span style="color:#17a2b8">CRUD</span> <span
                style="color:#28a745">BOOTSTRAP</span> <span style="color:#dc3545">AJAX</span></h2><br />
        <table class="table table-bordered">
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal">Add User</button><br /><br />
            <thead>
                <th>ชื่อ</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php while(($row = $result->fetch_assoc()) !== null){ ?>
                <tr>
                    <td width="70%"><?php echo $row["name"]; ?></td>
                    <td width="10%">
                        <button class="btn btn-info btn-sm view_data" data-toggle="modal" data-target="#myModal"id="<?php echo $row['id']; ?>">View</button>
                    </td>
                    <td width="10%">
                    <button class="btn btn-success btn-sm edit_data" data-toggle="modal" data-target="#myModal"id="<?php echo $row['id']; ?>">Edit</button>
                    </td>
                    <td width="10%">
                    <button class="btn btn-danger btn-sm delete_data confirm" data-toggle="modal" data-target="#myModal"id="<?php echo $row['id']; ?>">Delete</button>
                    </td>

                </tr>
                <?php }?>
            </tbody>
        </table>
       
    </div>
    <div id="log"></div>
    <?php require('viewModal.php'); ?>
    <?php require('editModal.php'); ?>
    <?php require('insertModal.php'); ?>

    <script>
    //View Modal 
        $(document).ready(function(){
            $('.view_data').click(function(){
                // $('#dataModal').modal('show');
                var uid=$(this).attr("id");
                $.ajax({
                    url:"select.php",
                    method:"post",
                    data:{id:uid},
                    success:function(data){
                        $('#detail').html(data);
                        $('#dataModal').modal('show');
                    }
                });
            });
        });

        //Edit Modal
        $(document).ready(function(){
            $('.edit_data').click(function(){
            var uid=$(this).attr("id");
            $.ajax({
                    url:"fetch.php",
                    method:"post",
                    data:{id:uid},
                    dataType:"json",
                    success:function(data){
                        // $('#detail_edit').html(data);
                        // $('#data_edit_Modal').modal('show');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#email').val(data.email);
                        $('#tel').val(data.tel);
                        $('#web').val(data.web);
                        $('#insert').val("Update");
                        $('#addModal').modal('show');
                    }
                });
            });
        });

         // Adduser

            $('#insert-form').on('submit',function(e){
                e.preventDefault();
                $.ajax({
                    url:"insert.php",
                    type:"post",
                    data:$('input').serialize(), /*แก้จากเดิม data:$('#insert-form'').serialize(), 
                    //The .serialize() method creates a text string in standard URL-encoded notation. 
                    // It can act on a jQuery object that has selected individual form controls, such as <input>, 
                    // <textarea>, and <select>: $( "input, textarea, select" ).serialize();
                    // https://api.jquery.com/serialize/*/
                    beforeSend:function(){
                        $('#insert').val("Insert...");
                    },
                    success:function(data){
                        $('#insert-form')[0].reset();
                        $('#addModal').modal('hide');
                        location.reload();
                    }

                });
            });

        //กำหนดสไตล์ alertify
        alertify.defaults.transition = "slide";
		alertify.defaults.theme.ok = "btn btn-success btn-sm";
		alertify.defaults.theme.cancel = "btn btn-danger btn-sm";
		alertify.defaults.theme.input = "form-control";
 
            //Delete Modal 
            $(document).ready(function(){
            $('.delete_data').click(function(){
                var uid=$(this).attr("id");
                var status;
                // var status = confirm("Are you Delete ?");
                // alertify.confirm('Confirm Message');
                // var check = alertify.confirm('Confirm Message', function(){ alertify.success('Ok') }, function(){ alertify.error('Cancel')});
            //    console.log(check);
            alertify.confirm("ต้องการลบรายการที่เลือกหรือไม่ ?",function(e){
                if(e) {
                    console.log("OK");
                    $.ajax({
                    url:"delete.php",
                    method:"post",
                    data:{id:uid},
                    success:function(data){
                        location.reload();
                        status=null;
                    }
                });
                } else {
                    console.log("CANCEL");
                }
            });

            });
        });

    </script>
</body>

</html>