<head>
<style>
label{
    font-weight:bold;
    width:60px;
}
</style>
</head>
<!-- The Modal -->
 <div class="modal fade" id="addModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">เพิ่มสมาชิก</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <form method="post" id="insert-form" >
                        <label for="name">ชื่อ</label>
                        <input type="hidden" id="id" name="id" />
                        <input type="text" class="form-control" id="name" name="name" required/>
                        <label for="email">อีเมลล์</label>
                        <input type="email" class="form-control" id="email" name="email" required/>
                        <label for="tel">โทรศัพท์</label>
                        <input type="text" class="form-control" id="tel" name="tel" required/>
                        <label for="web">เว็บไซต์</label>
                        <input type="url" class="form-control" id="web" name="web" required/><br/>
                        <input type="submit" id="insert" class="btn btn-success  btn-block" value="ADD "/>
                    </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>


