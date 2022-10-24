<?php

use verify\base\Base as Base;
$db = new Base();

function auth() {
    if (isset($_SESSION["Auth"]) == true) {
        return true;
    } else {
        return false;
    }
}

function userid() {
    return $_SESSION["user_id"];
}

function user_status() {
   return $_SESSION["status"];
}

function fullname() {
   echo "sss  assss";
   // return $_SESSION["fullname"];
}

function staff_status($status){
    switch($status){
        
       case '1' : return "รายงานตัว"; 
       case '2' : return "ทดลองงาน";
       case '3' : return "ประจำ"; 
       case '4' : return "ลาออก";
           
    }
}


function maried($id){
     switch ($id) {
        case 1:
            return "โสด";
        case 2:
            return "สมรส";
         case 3:
            return "หม้าย";
          case 4:
            return "หย่าร้าง";
          case 5:
            return "แยกกันอยู่";
           case 6:
            return "ไม่ระบุ";    
    }
}

function regist_status($status){
    switch($status){
        
       case '1' : return "<span style='color:blue;'><b>รอรายงานตัว</b></span>"; 
       case '2' : return "<span style='color:orange;'><b>รอตรวจสอบ</b></span>";
       case '3' : return "<span style='color:yellow;'><b>รออนุมัติจ้าง</b></span>"; 
       case '4' : return "<span style='color:green;'><b>ทดลองงาน</b></span>";
           
    }
}

function contract_type($status){
    switch($status){
        
       case '1' : return "<span style='color:blue;'><b>สัญญาจ้างทดลองงาน</b></span>"; 
       case '2' : return "<span style='color:orange;'><b>สัญญาจ้างงานประจำ</b></span>";
       case '3' : return "<span style='color:green;'><b>สัญญาจ้างงานชั่วคราว</b></span>"; 
           
    }
}

function sex($sex){
     switch($sex){
       case '1' : return "ชาย";
       case '2' : return "หญิง"; 
     }
}

function alive($id){
     switch($id){
       case '1' : return "มีชีวิต";
       case '0' : return "ไม่มีชีวิต"; 
     }
}

function education($id) {
    switch ($id) {
        case 1:
            return "ป.6";
        case 2:
            return "ม.ต้น";
        case 3:
            return "ม.ปลาย";
        case 4:
            return "ปวช";
        case 5:
            return "ปวส";
        case 6:
            return "ป.ตรี";
         case 7:
            return "ป.โท";
          case 8:
            return "ป.เอก";    
    }
}

function work($id){
     switch($id){
       case '1' : return "<font style='color:blue;'>อนุมัติจ้างทดลองงาน</font>";
       case '2' : return "<font style='color:green;'>อนุมัติจ้างประจำ</font>"; 
     }
}


 function military($id){
         switch ($id) {
        case 1:
            return "ได้รับการยกเว้น";
        case 2:
            return "ปลดเป็นทหารกองหนุน";
         case 3:
            return "ยังไม่ได้เกณฑ์"; 
         }
    }

function probation($status){
       switch ($status) {
        case 1:
            return "<span style='color:blue;'><b>ทดลองงาน</b></span>";
        case 2:
            return "<span style='color:green;'><b>ผ่าน</b></span>";
         case 3:
            return "<span style='color:green;'><b>ไม่ผ่าน</b></span>"; 
         }
    
}