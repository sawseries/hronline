<?= HEADER; ?>
<style>
 * {
margin: 0;
padding: 0;
}

.tree ul {
padding-top: 20px;
position: relative;
}

.tree li {
float: left;
text-align: center;
list-style-type: none;
position: relative;
padding: 20px 5px 0 5px;
}

.tree li::before,
.tree li::after {
content: '';
position: absolute;
top: 0;
right: 50%;
border-top: 1px solid #ccc;
width: 50%;
height: 20px;
}

.tree li::after {
right: auto;
left: 50%;
border-left: 1px solid #ccc;
}

.tree li:only-child::after,
.tree li:only-child::before {
display: none;
}

.tree li:only-child {
padding-top: 0;
}

.tree li:first-child::before,
.tree li:last-child::after {
border: 0 none;
}

.tree li:last-child::before {
border-right: 1px solid #ccc;
border-radius: 0 5px 0 0;
}

.tree li:first-child::after {
border-radius: 5px 0 0 0;
}

.tree ul::before {
content:'xccc';
position: absolute;
top: 0;
left: 50%;
border-left:1px solid #ccc;
width:auto;
height: 20px;
}


.tree li a {
border: 1px solid #ccc;
border-radius: 25px 25px 25px 25px;
padding: 5px 10px;
text-decoration: none;
color: #666;
font-family: arial, verdana, tahoma;
font-size: 11px;
display: inline-block;
}

    /** {
margin: 0;
padding: 0;
}

.tree ul {
padding-top: 20px;
position: relative;
}

.tree li {
float: left;
text-align: center;
list-style-type: none;
position: relative;
padding: 20px 5px 0 5px;
}

.tree li::before,
.tree li::after {
content: '';
position: absolute;
top: 0;
right: 50%;
border-top: 1px solid #ccc;
width: 50%;
height: 20px;
}

.tree li::after {
right: auto;
left: 50%;
border-left: 1px solid #ccc;
}

.tree li:only-child::after,
.tree li:only-child::before {
display: none;
}

.tree li:only-child {
padding-top: 0;
}

.tree li:first-child::before,
.tree li:last-child::after {
border: 0 none;
}

.tree li:last-child::before {
border-right: 1px solid #ccc;
border-radius: 0 5px 0 0;
}

.tree li:first-child::after {
border-radius: 5px 0 0 0;
}

.tree ul ul::before {
content: '';
position: absolute;
top: 0;
left: 50%;
border-left: 1px solid #ccc;
width: 0;
height: 20px;
}

.tree li a {
border: 1px solid #ccc;
border-radius: 25px 25px 25px 25px;
padding: 5px 10px;
text-decoration: none;
color: #666;
font-family: arial, verdana, tahoma;
font-size: 11px;
display: inline-block;
}
      }*/





</style>

<div class="row" >
    <div class="col-lg-12">
        <div class="panel panel-default effect1" style="min-height:1000px;">
            <div class="panel-body">
                <div class="table-responsive" style="margin-bottom:20px;">
                    <b>โครงสร้าง</b><br><br>

          <div>
   <ul class="tree">
     <li>
       <a href="#">คณะกรรมการอำนวยการ</a>
        <ul>
            <li><a href="#">ผู้อำนวยการ</a>
            <ul>   
                <li><a href="#">รองผู้อำนวยการ</a>
                    <ul>        
                        <li><a href="#">ผู้ช่วยผู้อำนวยการ</a>
                            <ul>
                                <li><a href="#">ผู้จัดการอาวุโส 
                                        <br><font style='font-size: 9px;'>จริยา คำแหง</font></a>
                                        <ul>   
                                            <li><a href="#">ฝ่ายการตลาดและสื่อสารองค์กร</a></li>
                                        </ul>
                                </li>   
                                 <li><a href="#">ผู้จัดการอาวุโส
                                     <br><font style='font-size: 9px;'>สมปอง เพ็ชรโรจน์</font></a>
                                     </a>
                                 
                                 <ul>   
                                            <li><a href="#">ฝ่ายโครงสร้างพื้นฐาน</a></li>
                                              <li><a href="#">ฝ่ายยุทธศาสตร์และแผน</a></li>
                                  </ul>
                                 
                                 </li>   
                                 
                            </ul>   
                        </li>
                    </ul> 
                </li>
            </ul>
              
                </li>
             
        </ul>
      
     </li>
   </ul>
 </div> 
                </div>                
            </div>
        </div>
    </div>
</div>



<?= FOOTER; ?>