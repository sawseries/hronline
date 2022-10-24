<?= HEADER; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default effect1">
            <div class="panel-body">
                <h2 class="blog-post-title">ประวัติบุคลากร</h2>
                <p class="blog-post-meta" style="color:#999;">อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</p>

                <div style="width:100%;margin-top:5px;margin-bottom:50px;">
                    <div class="btns" style="width:100%;text-align:left;">    
                        <a class='btn btn-default' href="{{url('/verify/create')}}"><li class='fa fa-plus'></li> ประวัติบุคลากร</a>
                    </div>
                </div>   


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