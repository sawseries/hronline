<?= HEADER; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#frm_approve").validate();
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
            อนุมัติการรายงานตัว บุคลากร อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body ">

            <div class="panel effect-1">
                
                <div class="panel-body ">
                       <div class="row form-row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                             <form method="post" id='frm_approve' action="./index.php?controller=Verify&action=approve">
                                  <input type="hidden" class="form-control" id="txtreg_id" name="txtreg_id"  value="<?=$personal["reg_id"];?>">
                                  <table class="table" border="0" style="width:100%;">
                                <tr>
                                    <th style="width:40%;">รหัสบุคลากร</th>
                                    <td><input type="text" class="form-control"  id="txtstaff_id" name="txtstaff_id" placeholder="รหัสบุคลากร" required></td>
                                </tr>
                                <tr>
                                    <th>username@psupassport</th>
                                    <td><input type="text" class="form-control"  id="txtusername" name="txtusername" placeholder="username@psu-passport" required></td>
                                </tr>
                                  <tr>
                                    <th>password@psupassport</th>
                                    <td><input type="text" class="form-control"  id="txtpassword" name="txtpassword" placeholder="password@psu-passport" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align:center;"><input type="submit" value="อนุมัติ" class="btn btn-info"></td>
                                </tr>
                            </table>

                            </form>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="header_title">
                   <i class="fa fa-angle-double-right" aria-hidden="true"></i> ข้อมูลทั่วไป
                    <input type="hidden"  id="txtreg_id" name="txtreg_id" value="{{$reg_id}}">
                        <div style="float:right;padding-right:2em;font-size:12pt;">
                        <a href="{{url("/verify/page1_edit/".$reg_id."")}}" style=""> แก้ไข <i class="fa fa-pencil" aria-hidden="true"></i></a>
                 </div>
                </div>
                <div class="panel-body ">
                    <div class="row form-row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <label>รหัสบัตรประชาชน</label>
                            <?=$personal['id_card'];?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>คำนำหน้าชื่อ</label>
                            <?=$personal['prenm_th'];?>
                        </div>  
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>ชื่อ</label>
                           <?=$personal['firstnm_th'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>ชื่อกลาง</label>
                             <?=$personal['middlenm_th'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>นามสกุล</label>
                            <?=$personal['lastnm_th'];?>                  
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>prename</label>
                            <?=$personal['prenm_en'];?>    
                        </div>  
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>firstname</label>
                           <?=$personal['firstnm_en'];?> 
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>middlename</label>
                            <?=$personal['middlenm_en'];?> 
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>lastname</label>
                            <?=$personal['lastnm_en'];?>
                        </div>

                    </div>
                    <div class="form-row">

                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>ชื่อเล่น</label>
                            <?=$personal['nickname'];?>

                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>วันเกิด</label>
                           <?=$personal['birth_date'];?> 

                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="validationTooltip03">ภูมิลำเนา</label>
                             <?=$personal['hometown'];?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin:2em;">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>เบอร์โทร</label>
                             <?=$personal['phone'];?>
                        </div>  
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>เบอร์มือถือ</label>
                             <?=$personal['mobile'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>Email1</label>
                             <?=$personal['email1'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">  
                            <label>Email2</label>
                             <?=$personal['email2'];?>
                        </div>
                    </div>   

                    <div class="row form-row">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>เพศ</label>
                             <?=sex($personal['sex']);?>
                        </div>  
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>เชื้อชาติ</label>
                             <?=$personal['nation'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <label>สัญชาติ</label>
                             <?=$personal['nation'];?>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12">  
                            <label>ศาสนา</label>
                             <?=$personal['religion'];?>
                        </div>
                    </div>
                        <div class="row form-row">

                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>สถานภาพ</label>
                                 <?=maried($personal['marred']);?>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>หมู่โลหิต</label>
                                <?=$personal['blood'];?>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label>สถานะทางการทหาร</label>
                                <?=military($personal['military']);?>
                            </div>
                        </div>
   
            </div>


                <div class="header_title" style="opacity:0.5em;">
                   <i class="fa fa-angle-double-right" aria-hidden="true"></i>  การศึกษา
                    <div style="float:right;padding-right:2em;font-size:12pt;">
                        <a href="#" style=""> แก้ไข <i class="fa fa-pencil" aria-hidden="true"></i></a>
                         </div>
                </div>
                <div class="panel-body ">
                    <table class="table" border="1" id="tbl_edu" style="table-layout: fixed;">
                        <tr style="background-color:#D3CCE3;">
                            <th style="width:10%;">ระดับ</th>
                            <th style="width:15%;">สถาบันการศึกษา</th>
                            <th style="width:10%;">คณะ</th>
                            <th style="width:10%;">สาขา/วิชาเอก</th>
                            <th style="width:10%;">วุฒิย่อ</th>
                            <th style="width:10%;">เกรดเฉลี่ย</th>
                            <th style="width:7.5%;">เริ่มต้น</th>
                            <th style="width:7.5%;">สิ้นสุด</th>
                            <th style="width:10%;">ประเทศ</th>
                            <th style="padding:0em;width:5%;">เกียรตินิยม<br>ลำดับที่</th>
                        </tr>
                        <?php foreach($edu as $edu){  ?>
                        <tr>
                            <td><input type="hidden" id="txtno" name="txtno[]" value="<?=$edu["no"];?>">
                                <?=education($edu["level"]);?></td>
                            <td><?=$edu["school"];?></td>
                            <td><?=$edu["faculty"];?></td>
                            <td><?=$edu["magor"];?></td>
                            <td><?=$edu["bref"];?></td>
                            <td><?=$edu["gpa"];?></td>
                            <td><?=$edu["start"];?></td>
                            <td><?=$edu["end"];?></td>
                            <td><?=$edu["country"];?></td>
                            <td><?=$edu["degree"];?></td>
                        </tr>
                       <?php } ?>
                    </table>
                </div>


                <div class="header_title">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> ครอบครัว
                     <div style="float:right;padding-right:2em;font-size:12pt;">
                        <a href="{{url("/verify/page1_edit/".$reg_id."")}}" style=""><i class="fa fa-pencil" aria-hidden="true"></i> แก้ไข</a>
                         </div>
                </div>
                <div class="panel-body ">
                    <div class="panel-body ">
                              <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                             <i class="fa fa-angle-double-right" aria-hidden="true"></i>   <b>บิดา</b>
                             
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>ชื่อ</label>
                                <?=$dad['fname'];?>
                            </div>
                           <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>นามสกุล</label>
                                <?=$dad['lname'];?>
                            </div>  

                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>การมีชีวิต</label>
                                <?=alive($dad['alive']);?>
                            </div>  
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>อาชีพ</label>
                                <?=$dad['ocupation'];?>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                             <i class="fa fa-angle-double-right" aria-hidden="true"></i>   <b>มารดา</b>
                             
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>ชื่อ</label>
                                <?=$mom['fname'];?>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>นามสกุล</label>
                                <?=$mom['lname'];?>
                            </div>  

                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>การมีชีวิต</label>
                                <?=alive($mom['alive']);?>
                            </div>  
                           <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>อาชีพ</label>
                                <?=$mom['ocupation'];?>
                            </div>  
                        </div>

                            <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                             <i class="fa fa-angle-double-right" aria-hidden="true"></i>   <b>คู่สมรส</b>
                             
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>ชื่อ</label>
                                <?=$spouse['fname'];?>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>นามสกุล</label>
                                <?=$spouse['lname'];?>
                            </div>  

                           <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>การมีชีวิต</label>
                                <?=alive($spouse['alive']);?>
                            </div>  
                            <div class="col-md-3 col-lg-3 col-sm-12">
                                <label>อาชีพ</label>
                                <?=$spouse['ocupation'];?>
                            </div>  
                        </div>
                    
                         <div class="row">
                            <div class="col-lg-12" style="margin-bottom:20px;margin-top:20px;">
                                 <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                             <i class="fa fa-angle-double-right" aria-hidden="true"></i>   <b>บุตร</b>
                             
                            </div>
                        </div>
                                
                               <?php if($child->num_rows >0) { ?>
                           <table class="table" border="1" id="tbl_edu" style="table-layout: fixed;">
                        <tr style="background-color:#D3CCE3;">
                             <th style="width:10%;">ลำดับ</th>
                                <th style="width:10%;">ชื่อ</th>
                                <th style="width:10%;">นามสกุล</th>
                                <th style="width:10%;">เพศ</th>
                                <th style="width:10%;">การมีชีวิต</th>
                                <th style="width:10%;">วันเกิด</th>                                      
                        </tr>
                        <?php foreach($child as $childs) { ?>
                        <tr>
                            <td style="text-align:center;">
                                <?=$childs["no"];?></td>
                            <td><?=$childs["fname"];?></td>
                            <td><?=$childs["lname"];?></td>
                            <td><?=sex($childs["sex"]);?></td>
                            <td><?=$childs["alive"];?></td>
                            <td><?=$childs["birthdate"];?></td>
                        </tr>
                        <?php } ?>
                    </table>
                               <?php }else{ ?>
                                
                                <center><b>ไม่มีบุตร</b></center>
                                
                             <?php } ?>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                              <i class="fa fa-angle-double-right" aria-hidden="true"></i>  <b>ผู้ติดต่อฉุกเฉิน 1</b>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ชื่อ</label>
                                <?=$emerg1['fname'];?>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>นามสกุล</label>
                                <?=$emerg1['lname'];?>
                            </div>  

                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ความเกี่ยวข้อง</label>
                                <?=$emerg1['about'];?>
                            </div>  
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                              <label>อาชีพ</label>
                                <?=$emerg1['ocupation'];?>
                            </div>  
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>เบอร์โทร</label>
                                <?=$emerg1['phone'];?>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ที่อยู่</label>
                                <?=$emerg1['address'];?>
                            </div>
                        </div>
                        
                        
                           <div class="row">
                            <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom:20px;margin-top:20px;">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> <b>ผู้ติดต่อฉุกเฉิน 2</b>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ชื่อ</label>
                               <?=$emerg2['fname'];?>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>นามสกุล</label>
                                <?=$emerg2['lname'];?>
                            </div>  

                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ความเกี่ยวข้อง</label>
                                <?=$emerg2['about'];?>
                            </div>  
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>อาชีพ</label>
                                <?=$emerg2['ocupation'];?>
                            </div>  
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>เบอร์โทร</label>
                                 <?=$emerg2['phone'];?>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label>ที่อยู่</label>
                                 <?=$emerg2['address'];?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="panel-footer">
                รายงานตัว
            </div>
        </div>
    </div>
</div>
<?=FOOTER;?>