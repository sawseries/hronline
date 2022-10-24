<?= HEADER; ?>
<script>
    $(document).ready(function() {
        $("#frm_contact").validate();
    });
</script>
<form method="post" action="./index.php?controller=Work&action=insert" id="frm_contact">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">ทดลองงาน</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>
            </div>
        </div>
    </div>
</div>

    
        <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="panel panel-primary box effect1">
            <div class="header_title">
               ค้นหาเลขที่อนุมัติจ้างทดลองงาน
            </div>
            <div class="panel-body ">
                <div class="row form-row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <label>เลขที่บันทึกข้อความ</label>
                        <input type="text" class="form-control" id="txttext_number" name="txttext_number" placeholder="เลขที่บันทึกข้อความ" required>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <label>ลงวันที่</label>
                        <input type="date" class="form-control" id="txttext_date" name="txttext_date" placeholder="ลงวันที่" required>
                    </div>
                       <div class="col-md-3 col-lg-3 col-sm-12">
                           <div style="width:100%;padding:1em;">
                               <a class="btn btn-info">ค้นหา</a>
                           </div>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>วันที่อนุมัติ</label>
                        <input type="date" class="form-control"  id="txtapprove_date" name="txtapprove_date" placeholder="วันที่อนุมัติ" required>
                    </div>  
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>อนุมัติจ้าง</label>
                        <select class="form-control" id="txtwork_type" name="txtwork_type">
                            <option value="1">ทดลองงาน</option>
                            <option value="2">ประจำ</option>
                        </select>
                    </div>  
                   <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>วันที่เริ่มปฏิบัติงาน</label>
                        <input type="date" class="form-control"  id="txtstart_work" name="txtstart_work" placeholder="วันที่เริ่มปฏิบัติงาน" required>
                    </div>  
                </div>
     
            </div>
            <div class="panel-footer">
                อนุมัติจ้าง
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary box effect1">
            <div class="header_title">
                ข้อมูลบุคลากร
            </div>
            <div class="panel-body ">
         
                 <div class="row form-row">
                         <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>รหัสบุคลากร</label>
                        <input type="text" class="form-control" id="txtstaff_id" name="txtstaff_id" value="" placeholder="รหัสบุคลากร" required>
                      
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" id="txtfname" name="txtfname" value="" placeholder="ชื่อ" required>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>สกุล</label>
                        <input type="text" class="form-control" id="txtlname" name="txtlname" value="" placeholder="สกุล" required>
                    </div>
                     
                </div>  
          


            
                <div class="row form-row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <label>ตำแหน่ง</label>
                        <input type="text" class="form-control" id="txtposition" name="txtposition" placeholder="ตำแหน่ง" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>หน่วยงาน</label>
                        <input type="text" class="form-control"  id="txtdepartment" name="txtdepartment" placeholder="หน่วยงาน" required>
                    </div>  

                    <div class="col-md-4 mb-4">
                        <label>หน่วยงานย่อย</label>
                        <div style="width:100%;padding:0.5em;">
                            <input type="text" class="form-control"  id="txtplan" name="txtplan" placeholder="หน่วยงานย่อย" required>
                        </div>  
                    </div>  
                </div>
                <div class="row form-row">
                    <div class="col-md-4 mb-4">
                        <label>วุฒิการศึกษา</label>
                        <select id="txtedu" name="txtedu" class="form-control">
                            <option>ป.6</option>
                            <option>ม.ต้น</option>
                            <option>ม.ปลาย</option>
                            <option>ปวช</option>
                            <option>ปวส</option>
                            <option>ป.ตรี</option>
                            <option>ป.โท</option>
                            <option>ป.เอก</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>ประเภทบุคลากร</label>
                        <select id="txtemp_type" name="txtemp_type" class="form-control">
                            <option>ชั่วคราว</option>
                            <option>เงินรายได้</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>ระดับ</label>
                        <select id="txtlevel" name="txtlevel" class="form-control">
                            <option>ปฏิบัติการ</option>
                            <option>ผู้บริหารระดับปฏิบัติการ</option>
                            <option>ผู้บริหารระดับสูง</option>
                        </select>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-md-4 mb-4">
                        <label>ผู้บังคับบัญชาชั้นต้น</label>
                        <input type="text" class="form-control" id="txtmanager" name="txtmanager" placeholder="ผู้บังคับบัญชาชั้นต้น" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>เงินเดือนแรกเข้า</label>
                        <div style="width:100%;padding:0.5em;">
                            <input type="text" class="form-control"  id="txtsalary" name="txtsalary" placeholder="เงินเดือน" required>
                        </div>                                                      
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>ค่าตอบแทน</label>
                        <div style="width:100%;padding:0.5em;">
                            <input type="text" class="form-control"  id="txtcommission" name="txtcommission" placeholder="ค่าตอบแทน" required>
                        </div>                                                      
                    </div>    
                </div>
            </div>
            <div class="panel-footer">
                ข้อมูลบุคลากร
            </div>
        </div>
    </div>
</div>

    

    

    
   
    
    
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary box effect1">
            <div class="header_title">
                ทดลองงาน
            </div>
            <div class="panel-body ">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>ครั้งที่</label>
                        <input type="text" class="form-control" id="txtprobation_time" name="txtprobation_time" placeholder="ครั้งที่" value="1" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>วันที่เริ่มต้นทดลองงาน</label>
                        <input type="date" class="form-control" id="txtstart_probation" name="txtstart_probation" placeholder="วันที่เริ่มต้นทดลองงาน" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>วันที่สิ้นสุดทดลองงาน</label>
                        <input type="date" class="form-control"  id="txtend_probation" name="txtend_probation" placeholder="วันที่สิ้นสุดทดลองงาน" required>
                    </div>  
                    <div class="col-md-3 mb-3">
                        <label>วันที่ประเมิณ</label>
                        <input type="date" class="form-control"  id="txtprobation_eve" name="txtprobation_eve" placeholder="วันที่สิ้นสุดทดลองงาน" required>
                    </div>   
                </div>                            
            </div>
            <div class="panel-footer">
                ทดลองงาน
            </div>
        </div>
    </div>
</div>




</form>
<?=FOOTER;?>