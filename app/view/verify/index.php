<?= HEADER; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">รายงานตัว</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>

                <div style="width:100%;margin-top:5px;margin-bottom:50px;">
                    <div class="btns" style="width:100%;text-align:left;">    
                        <a class='btn btn-default' href="./index.php?controller=Verify&action=create"><li class='fa fa-plus'></li> เพิ่มบุคลากรใหม่</a>
                    </div>
                </div>   
                
                    <?php if(isset($_GET["success"])){ ?>
    <div class='reset-box' style='color:blue;'><i class="fa fa-telegram" aria-hidden="true" style='font-size:16pt;'></i> <?=$_GET["success"];?></div><br>
    <?php }else if(isset($_GET["fail"])){ ?>
    <div class='fail'><?=$_GET["fail"];?></div><br>
    <?php } ?> 
                
                <div class="table-responsive">
                    <h4>รอรายงานตัว</h4>
                    <table class="table_main" border="1">
                        <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสรายงานตัว</th>
                            <th style='width:15%;'>ชื่อ</th>
                            <th style='width:15%;'>สกุล</th>
                             <th style='width:20%;'>หมายเลขบัตรประชาชน</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มทำงาน</th>
                            <th style='width:10%;'>วันเริ่มต้น</th>
                            <th style='width:10%;'>วันที่สิ้นสุด</th>
                            <th style='width:10%;'>สถานะ</th>
                            <th style=''></th>
                        </tr>
                        <?php 
                        if($reg1->num_rows > 0){
                        foreach($reg1 as $reg1s){ ?>
                        <tr class="link_to" onclick="window.location='./index.php?controller=Verify&action=detail&id=<?=$reg1s["reg_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><?=$reg1s["reg_id"];?></td>
                            <td style='width:15%;'><?=$reg1s["fname"];?></td>
                            <td style='width:15%;'><?=$reg1s["lname"];?></td>
                             <td style='width:20%;'><?=$reg1s["ident_card"];?></td>
                            <td style="text-align:center;width:10%;"><?=$reg1s["start_work"];?></td>
                            <td style='width:10%;'><?=$reg1s["start_date"];?></td>
                            <td style='width:10%;'><?=$reg1s["end_date"];?></td>
                            <td style='width:10%;'><?=regist_status($reg1s["status"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$reg1s["reg_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="9"><b>ไม่มีข้อมูล</b></td>
                            </tr>
                       <?php  } ?>
                    </table>
                </div>
                
                
                   <div class="table-responsive" style="margin-top:20px;">
                    <h4>รอตรวจสอบ</h4>
                    <table class="table_main" border="1">
                          <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสรายงานตัว</th>
                            <th style='width:15%;'>ชื่อ</th>
                            <th style='width:15%;'>สกุล</th>
                             <th style='width:20%;'>หมายเลขบัตรประชาชน</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มทำงาน</th>
                            <th style='width:10%;'>วันเริ่มต้น</th>
                            <th style='width:10%;'>วันที่สิ้นสุด</th>
                            <th style='width:10%;'>สถานะ</th>
                            <th style=''></th>
                        </tr>
                      <?php 
                        if($reg2->num_rows > 0){
                        foreach($reg2 as $reg2){ ?>
                             <tr class="link_to" onclick="window.location='./index.php?controller=Verify&action=profile&id=<?=$reg2["reg_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><?=$reg2["reg_id"];?></td>
                            <td style='width:15%;'><?=$reg2["fname"];?></td>
                            <td style='width:15%;'><?=$reg2["lname"];?></td>
                             <td style='width:20%;'><?=$reg2["ident_card"];?></td>
                            <td style="text-align:center;width:10%;"><?=$reg2["start_work"];?></td>
                            <td style='width:10%;'><?=$reg2["start_date"];?></td>
                            <td style='width:10%;'><?=$reg2["end_date"];?></td>
                            <td style='width:10%;'><?=regist_status($reg2["status"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$reg2["reg_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="9"><b>ไม่มีข้อมูล</b></td>
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

                <h4>อนุมัติจ้างทดลองงาน</h4>

                <div class="table-responsive">
                    <table class="table_main" border="1">
                           <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสรายงานตัว</th>
                             <th style="text-align:center;width:10%;">รหัสพนักงาน</th>
                            <th style='width:15%;'>ชื่อ</th>
                            <th style='width:15%;'>สกุล</th>
                             <th style='width:10%;'>หมายเลขบัตรประชาชน</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มทำงาน</th>
                            <th style='width:10%;'>วันเริ่มต้น</th>
                            <th style='width:10%;'>วันที่สิ้นสุด</th>
                            <th style='width:10%;'>สถานะ</th>
                            <th style=''></th>
                        </tr>
                       <?php 
                        if($reg3->num_rows > 0){
                        foreach($reg3 as $reg3){ ?>
                             <tr class="link_to" onclick="window.location='./index.php?controller=Work&action=create_new&staff_id=<?=$reg3["staff_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><?=$reg3["reg_id"];?></td>
                            <td style="text-align:center;width:10%;"><b><?=$reg3["staff_id"];?></b></td>
                            <td style='width:15%;'><?=$reg3["fname"];?></td>
                            <td style='width:15%;'><?=$reg3["lname"];?></td>
                             <td style='width:10%;'><?=$reg3["ident_card"];?></td>
                            <td style="text-align:center;width:10%;"><?=$reg3["start_work"];?></td>
                            <td style='width:10%;'><?=$reg3["start_date"];?></td>
                            <td style='width:10%;'><?=$reg3["end_date"];?></td>
                            <td style='width:10%;'><?=regist_status($reg3["status"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$reg3["reg_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="9"><b>ไม่มีข้อมูล</b></td>
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

                <h4>ประวัติ</h4>

                <div class="table-responsive">
                    <table class="table_main" border="1">
                              <tr class="header_blue">
                            <th style="text-align:center;width:10%;">รหัสรายงานตัว</th>
                            <th style='width:15%;'>ชื่อ</th>
                            <th style='width:15%;'>สกุล</th>
                             <th style='width:20%;'>หมายเลขบัตรประชาชน</th>
                            <th style="text-align:center;width:10%;">วันที่เริ่มทำงาน</th>
                            <th style='width:10%;'>วันเริ่มต้น</th>
                            <th style='width:10%;'>วันที่สิ้นสุด</th>
                            <th style='width:10%;'>สถานะ</th>
                            <th style=''></th>
                        </tr>
                       <?php 
                        if($reg4->num_rows > 0){
                        foreach($reg4 as $reg4){ ?>
                             <tr class="link_to" onclick="window.location='./index.php?controller=Verify&action=detail&id=<?=$reg4["reg_id"]; ?>'">
                            <td style="text-align:center;width:10%;"><?=$reg4["reg_id"];?></td>
                            <td style='width:15%;'><?=$reg4["fname"];?></td>
                            <td style='width:15%;'><?=$reg4["lname"];?></td>
                             <td style='width:20%;'><?=$reg4["ident_card"];?></td>
                            <td style="text-align:center;width:10%;"><?=$reg4["start_work"];?></td>
                            <td style='width:10%;'><?=$reg4["start_date"];?></td>
                            <td style='width:10%;'><?=$reg4["end_date"];?></td>
                            <td style='width:10%;'><?=regist_status($reg4["status"]);?></td>
                            <td style=''>
                                <a class="btn btn-default" href="./index.php?controller=Verify&action=delete&id=<?=$reg4["reg_id"]; ?>">
                                    <li class="fa fa-trash" style="color:red;"></li>
                                </a>
                            </td>
                        </tr>
                        <?php }                        
                        }else{  ?>
                            <tr>
                                <td style="text-align:center;" colspan="9"><b>ไม่มีข้อมูล</b></td>
                            </tr>
                       <?php  } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= FOOTER; ?>