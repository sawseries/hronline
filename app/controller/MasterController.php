<?php

namespace verify\controller;
use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class MasterController extends Base{   
    public function __construct() {       
         if (!(auth())) {
            Redirect::url("Auth", "loginpage");
        }
    }    
     public function index(){           
            $reg1 = Base::query("select * from staff " 
                   . "inner join registration "
                   . "where "
                   . "staff.reg_id = registration.reg_id "
                   . "and staff.status='1'  "  //รายงานตัว
                   . "and registration.status='1'  "  //รายงานตัว 
                   . "and registration.confirm='0'  "    //ยังไม่ยืนยัน
                   . "and registration.approve='0'")->fetchAll();  //ยังไม่ตรวจสอบ
           
           //รอตรวจสอบ
            $reg2 = Base::query("select * from staff "
                   . "inner join registration "
                   . "where "
                      . "staff.reg_id = registration.reg_id "
                    . "and registration.status='2'  "  //รายงานตัว   
                   . "and staff.status='1'  "   //รายงานตัว
                   . "and registration.confirm='1'  "    //ยืนยันแล้ว        
                   . "and registration.approve='0'")->fetchAll(); //รอตรวจสอบ
            
                //รออนุมัติจ้าง
            $reg3 = Base::query("select * from staff "
                   . "inner join registration "
                   . "where "
                   . "staff.reg_id = registration.reg_id "
                   . "and registration.status='3'  "  //รออนุมัติจ้าง
                   . "and staff.status='1'  "   //รายงานตัว
                   . "and registration.confirm='1'  "    //ยืนยันแล้ว        
                   . "and registration.approve='1'")->fetchAll(); //รอตรวจสอบ 
            
                  $reg4 = Base::query("select * from staff "
                   . "inner join registration "
                   . "where "
                   . "staff.reg_id = registration.reg_id")
                          ->limit(10)
                          ->fetchAll(); //รอตรวจสอบ 
                     
      Redirect::view("master/master",array("reg1"=> $reg1,
          "reg2"=> $reg2,
          "reg3"=> $reg3,
          "reg4"=>$reg4,"links" => Base::links()));             
       }         
 }
