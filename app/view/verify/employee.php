<?= HEADER; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2>อนุมัติจ้างประจำ</h2>
                <div class="table-responsive">
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
                        @for($i=0;$i<=5;$i++)
                        <tr>
                            <td style='width:10%;'>1</td>
                            <td style='width:40%;'>1</td>
                            <td style='width:15%;'>1</td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:10%;'></td>
                            <td style='width:5%;'></td>
                        </tr>
                        @endfor

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="panel panel-primary box effect1">
                                <div class="header_title">
                                    สัญญาจ้าง
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body ">

                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label>วันที่ทำสัญญา</label>
                                            <input type="text" class="form-control" id="txtcontract_date" name="txtcontract_date" placeholder="วันที่ทำสัญญา" required>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label>รูปแบบการจ้าง</label>
                                            <input type="text" class="form-control"  id="txtcontract_type" name="txtcontract_type" placeholder="รูปแบบการจ้าง" required>
                                        </div>  
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label>ชื่อบุคลากร</label>
                                            <input type="text" class="form-control" id="txtperson_nm" name="txtperson_nm" placeholder="วันที่เริ่มต้นสัญญา" required>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label>ตำแหน่ง</label>
                                            <input type="text" class="form-control"  id="txtposition" name="txtposition" placeholder="ตำแหน่ง" required>
                                        </div>  
                                    </div>  
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label>หน่วยงาน</label>
                                            <input type="text" class="form-control"  id="txtdepartment" name="txtdepartment" placeholder="หน่วยงาน" required>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label>หน่วยงานย่อย</label>
                                            <input type="text" class="form-control"  id="txtdepartment_sub" name="txtdepartment_sub" placeholder="หน่วยงาน" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-4">
                                            <label>วันที่เริ่มต้นสัญญา</label>
                                            <input type="date" class="form-control" id="txtstart_date" name="txtstart_date" placeholder="วันที่เริ่มต้นสัญญา" required>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label>วันที่สิ้นสุดสัญญา</label>
                                            <input type="date" class="form-control"  id="txtend_date" name="txtend_date" placeholder="วันที่สิ้นสุดสัญญา" required>
                                        </div>  
                                        <div class="col-md-4 mb-4">
                                            <label>อายุสัญญา</label>
                                            <input type="text" class="form-control"  id="txtcontract_year" name="txtcontract_year" placeholder="อายุสัญญา" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label>รูปแบบสัญญาจ้าง</label>
                                            <input type="text" class="form-control" id="txtcontract" name="txtcontract" placeholder="รูปแบบสัญญาจ้าง" required>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label>อัตราค่าจ้าง</label>
                                            <input type="text" class="form-control"  id="txtsalary" name="txtsalary" placeholder="อัตราค่าจ้าง" required>
                                        </div>  
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    สัญญาจ้าง
                                </div>
                            </div>
                        </div>
                    </div>
<?=FOOTER;?>