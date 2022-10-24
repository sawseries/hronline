<?= HEADER; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#frm_verify").validate();
    });
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title"><a href="./index.php?controller=Verify&action=index"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> รายงานตัว</a></h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary box effect1">
            <div class="header_title">
             เพิ่มข้อมูลรายงานตัวสำเร็จ เลือก E-mail เพื่อ ยืนยันการรายงานตัว
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body ">

                <form id="frm_verify" method="post" action="./index.php?controller=Verify&action=sendmail">
                    <input type="hidden" id="txtreg_id" name="txtreg_id" value="<?=$detail["reg_id"];?>">
                <table class="table" style="width:60%;margin:0 auto;">
                    <tr>
                        <th style="width:30%;">รหัสรายงานตัว</th>
                        <td><?=$detail["reg_id"];?></td>
                    </tr>
                    <tr>
                        <th>หมายเลขบัตรประชาชน</th>
                        <td><?=$detail["ident_card"];?></td>
                    </tr>
                    <tr>
                        <th>ชื่อ</th>
                       <td><?=$detail["fname"];?></td>
                    </tr>
                    <tr>
                        <th>นามสกุล</th>
                     <td><?=$detail["lname"];?></td>
                    </tr>
                    <tr>
                        <th>E-mail1</th>
                        <td><input type="checkbox" id="chk_mail" name="chk_mail[]" value="<?=$detail["email1"];?>" required><?=$detail["email1"];?></td>
                    </tr>
                    <tr>
                        <th>E-mail2</th>
                        <td><input type="checkbox" id="chk_mail" name="chk_mail[]" value="<?=$detail["email2"];?>" required><?=$detail["email2"];?></td>
                    </tr>
                
                    <tr>
                        <th>Username</th>
                        <td><?=$detail["username"];?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?=$detail["password"];?></td>
                    </tr>
                    <tr>
                        <th>วันที่เริ่มต้น</th>
                        <td><?=$detail["start_date"];?></td>
                    </tr>
                    <tr>
                        <th>วันที่สิ้นสุด</th>
                        <td><?=$detail["end_date"];?></td>
                    </tr>
                        <tr>
                        <th>วันที่เริ่มงาน</th>
                        <td><?=$detail["start_date"];?></td>
                    </tr>
                         <tr>
                        <th>สถานะ</th>
                        <td><?=regist_status($detail["status"]);?></td>
                    </tr>
                </table>
                    <?php if($detail["status"]=='1'){ ?>
                      <br>   <center> <input type="submit" class="btn btn-info" value="send mail"></center>  
                    <?php } ?>
                </form>
            </div>
            <div class="panel-footer">
                รายงานตัว
            </div>
        </div>
    </div>
</div>
<?=FOOTER;?>