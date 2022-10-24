<?= HEADER; ?>
<script>
    $(document).ready(function() {
        $("#frm_verify").validate();
    });
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">รายงานตัว</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary box effect1">
            <div class="header_title">
                รายงานตัว
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body ">

                <form id="frm_verify" method="post" action="./index.php?controller=Verify&action=insert">
                <table class="table" style="width:60%;margin:0 auto;">
                    <tr>
                        <td>รหัสรายงานตัว</td>
                        <td><input type="text" class="form-control"  placeholder="รหัสรายงานตัว" id="txtreg_id" name="txtreg_id" required ></td>
                    </tr>
                    <tr>
                        <td>หมายเลขบัตรประชาชน</td>
                        <td><input type="text" class="form-control"  placeholder="หมายเลขบัตรประชาชน" id="txtiden_card" name="txtiden_card" required ></td>
                    </tr>
                    <tr>
                        <td>ชื่อ</td>
                        <td><input type="text" class="form-control"  placeholder="ชื่อ" id="txtfname" name="txtfname" required></td>
                    </tr>
                    <tr>
                        <td>นามสกุล</td>
                        <td><input type="text" class="form-control"   placeholder="นามสกุล"  id="txtlname" name="txtlname" required></td>
                    </tr>
                    <tr>
                        <td>E-mail1</td>
                        <td><input type="text" class="form-control"   placeholder="Email1"  id="txtemail1" name="txtemail1" required></td>
                    </tr>
                    <tr>
                        <td>E-mail2</td>
                        <td><input type="text" class="form-control"   placeholder="Email2"  id="txtemail2" name="txtemail2" required></td>
                    </tr>
                  
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"  placeholder="Username" id="txtusername" name="txtusername" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"  placeholder="Password" id="txtpassword" name="txtpassword" required></td>
                    </tr>
                    <tr>
                        <td>วันที่เริ่มต้น</td>
                        <td><input type="date" class="form-control"   placeholder="วันที่เริ่มต้น" id="txtstartdate" name="txtstartdate" required></td>
                    </tr>
                    <tr>
                        <td>วันที่สิ้นสุด</td>
                        <td><input type="date" class="form-control"  placeholder="วันที่สิ้นสุด" id="txtenddate" name="txtenddate" ></td>
                    </tr>
                      <tr>
                        <td>วันที่เริ่มงาน</td>
                        <td><input type="date"  class="form-control" placeholder="วันที่เริ่มปฏิบัติงาน" id="txtstartwork" name="txtstartwork" required></td>
                    </tr>
                </table>
                <center> <input type="submit" class="btn btn-info" value="รายงานตัว"></center>
                </form>
            </div>
            <div class="panel-footer">
                รายงานตัว
            </div>
        </div>
    </div>
</div>
<?=FOOTER;?>