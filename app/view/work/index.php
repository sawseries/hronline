<?= HEADER; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">อนุมัติจ้าง</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>
                <div style="width:100%;margin-top:5px;margin-bottom:80px;">
                    <div class="btns" style="width:100%;text-align:left;">    
                        <a class='btn btn-default' href="{{url('/work/create/new')}}"><li class='fa fa-plus'></li>อนุมัติจ้างทดลองงาน</a>
                        <a class='btn btn-default' href="{{url('/work/create/emp')}}"><li class='fa fa-plus'></li> อนุมัติจ้างประจำ</a>
                    </div>
                </div>   
 


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">

                <h4>อนุมัติจ้างทดลองงาน</h4>

                <div class="table-responsive">
                    <table class="table_main" border="1">
                           <tr class="header_blue">
                             <th style="text-align:center;width:10%;">รหัสพนักงาน</th>
                            <th style='width:10%;text-align:center;'>ชื่อ</th>
                            <th style='width:10%;text-align:center;'>สกุล</th>
                               <th style='width:10%;text-align:center;'>ตำแหน่ง</th>
                                <th style='width:10%;text-align:center;'>หน่วยงาน</th>
                                <th style='width:10%;text-align:center;'>หน่วยงานย่อย</th>
                             <th style='width:5%;text-align:center;'>วันที่อนุมัติ</th>
                             <th style='width:5%;text-align:center;'>เลขที่บันทึก<br>ข้อความ</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มปฏิบัติงาน</th>
                            <th style='width:15%;'>สถานะ</th>
                            <th style='width:5%;''></th>
                        </tr>
                       <?php 
                        if($work3->num_rows > 0){
                        foreach($work3 as $work3){ ?>
                             <tr class="link_to" onclick="window.location='./index.php?controller=Work&action=create_new&staff_id=<?=$work3["staff_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><b><?=$work3["staff_id"];?></b></td>
                            <td style='width:10%;'><?=$work3["fname"];?></td>
                            <td style='width:10%;'><?=$work3["lname"];?></td>
                            <td style='width:10%;'><?=$work3["position"];?></td>
                               <td style='width:10%;'><?=$work3["department"];?></td>
                               <td style='width:10%;'><?=$work3["plan"];?></td>
                            <td style="text-align:center;width:10%;"><?=$work3["approve_date"];?></td>
                              <td style='width:10%;'><?=$work3["doccode"];?></td>
                            <td style='width:10%;'><?=$work3["start_work"];?></td>
                            <td style='width:10%;'><?=work($work3["type"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$work3["staff_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="11"><b>ไม่มีข้อมูล</b></td>
                            </tr>
                       <?php  } ?>
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

                <h4>อนุมัติจ้างประจำ</h4>

                <div class="table-responsive">
                    <table class="table_main" border="1">
                           <tr class="header_blue">
                             <th style="text-align:center;width:10%;">รหัสพนักงาน</th>
                            <th style='width:10%;text-align:center;'>ชื่อ</th>
                            <th style='width:10%;text-align:center;'>สกุล</th>
                               <th style='width:10%;text-align:center;'>ตำแหน่ง</th>
                                <th style='width:10%;text-align:center;'>หน่วยงาน</th>
                                <th style='width:10%;text-align:center;'>หน่วยงานย่อย</th>
                             <th style='width:5%;text-align:center;'>วันที่อนุมัติ</th>
                             <th style='width:5%;text-align:center;'>เลขที่บันทึก<br>ข้อความ</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มปฏิบัติงาน</th>
                            <th style='width:15%;'>สถานะ</th>
                            <th style='width:5%;''></th>
                        </tr>
                       <?php 
                        if($work4->num_rows > 0){
                        foreach($work4 as $work4){ ?>
                             <tr class="link_to" onclick="window.location='./index.php?controller=Work&action=create_new&staff_id=<?=$work4["staff_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><b><?=$work4["staff_id"];?></b></td>
                            <td style='width:10%;'><?=$work4["fname"];?></td>
                            <td style='width:10%;'><?=$work4["lname"];?></td>
                            <td style='width:10%;'><?=$work4["position"];?></td>
                               <td style='width:10%;'><?=$work4["department"];?></td>
                               <td style='width:10%;'><?=$work4["plan"];?></td>
                            <td style="text-align:center;width:10%;"><?=$work4["approve_date"];?></td>
                              <td style='width:10%;'><?=$work4["doccode"];?></td>
                            <td style='width:10%;'><?=$work4["start_work"];?></td>
                            <td style='width:10%;'><?=work($work4["type"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$work4["staff_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="11"><b>ไม่มีข้อมูล</b></td>
                            </tr>
                       <?php  } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?=FOOTER;?>