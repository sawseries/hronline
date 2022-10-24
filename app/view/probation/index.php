<?= HEADER; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">ทดลองงาน</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>
                <div style="width:100%;margin-top:5px;margin-bottom:50px;">
                    <div class="btns" style="width:100%;text-align:left;">    
                        <a class='btn btn-default' href="./index.php?controller=Probation&action=create"><li class='fa fa-plus'></li> เพิ่มเอกสารใหม่</a>
                    </div>
                </div>   
                <div class="table-responsive" style="margin-bottom:20px;">
                    <b>ทดลองงาน</b><br>
                    <table class="table_main" border="1">
                        <tr class="header_blue">
                            <th style="text-align:center;width:10%;">เลขที่อนุมัติ</th>
                            <th style='width:10%;text-align:center;'>รหัสบุคลากร</th>
                            <th style='width:15%;text-align:center;'>ชื่อ</th>
                            <th style="text-align:center;width:15%;">นามสกุล</th>
                            <th style='width:5%;text-align:center;'>ครั้งที่</th>
                            <th style='width:10%;text-align:center;'>วันที่เริ่มต้น</th>
                            <th style='width:10%;text-align:center;'>วันที่สิ้นสุด</th>
                            <th style='width:10%;text-align:center;'>วันที่ประเมิณ</th>
                             <th style='width:10%;text-align:center;'>สถานะ</th>
                            <th style='width:5%;'></th>
                            
                        </tr>
                        <?php foreach($probation as $probation){ ?>
                        <tr>
                             <th style="text-align:center;width:10%;"><?=$probation["work_code"];?></th>
                            <th style='width:10%;text-align:center;'><?=$probation["staff_id"];?></th>
                            <th style='width:15%;text-align:center;'><?=$probation["fname"];?></th>
                            <th style="text-align:center;width:15%;"><?=$probation["lname"];?></th>
                            <th style='width:5%;text-align:center;'><?=$probation["time"];?></th>
                            <th style='width:10%;text-align:center;'><?=$probation["start_date"];?></th>
                            <th style='width:10%;text-align:center;'><?=$probation["end_date"];?></th>
                            <th style='width:10%;text-align:center;'><?=$probation["evalute_date"];?></th>
                             <th style='width:10%;text-align:center;'><?=probation($probation["status"]);?></th>
                            <th style='width:5%;'></th>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                
                

                
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                     <div class="table-responsive" style="margin-bottom:20px;">
                      <b>รออนุมัติจ้างประจำ</b><br><br>
                    <table class="table_main" border="1">
                        <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสเอกสาร</th>
                            <th style='width:40%;'>หัวข้อ</th>
                            <th style='width:15%;'>ประเภท</th>
                            <th style="text-align:center;width:10%;">ค่าเริ่มต้น</th>
                            <th style='width:10%;'>วันที่</th>
                            <th style='width:10%;'>เวลา</th>
                            <th style='width:5%;'></th>
                        </tr>
                        <tr>
                            <td style='width:10%;'>1</td>
                            <td style='width:40%;'>1</td>
                            <td style='width:15%;'>1</td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:5%;'></td>
                        </tr>
                    </table>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                
                 <div class="table-responsive" style="margin-bottom:20px;">
                      <b>ไม่ผ่านทดลองงาน</b><br><br>
                    <table class="table_main" border="1">
                        <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสรายงานตัว</th>
                            <th style='width:40%;'>หัวข้อ</th>
                            <th style='width:15%;'>ประเภท</th>
                            <th style="text-align:center;width:10%;">ค่าเริ่มต้น</th>
                            <th style='width:10%;'>วันที่</th>
                            <th style='width:10%;'>เวลา</th>
                            <th style='width:5%;'></th>
                        </tr>
                        <tr>
                            <td style='width:10%;'>1</td>
                            <td style='width:40%;'>1</td>
                            <td style='width:15%;'>1</td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:5%;'></td>
                        </tr>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?=FOOTER;?>