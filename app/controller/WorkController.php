<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class WorkController extends Base{
    
   
    public function index(){     
            $work3 = Base::query("select staff.staff_id,staff.fname,staff.lname,work.type,staff.position,staff.department,staff.plan,work.approve_date,work.start_work,work.doccode  "
                    . "from work "
                    . "inner join staff  "
                    . "on work.type='1' and staff.staff_id=work.staff_id")->fetchAll(); //ทดลองงาน 
            $link_work3 =  Base::links();
            
               $work4 = Base::query("select staff.staff_id,staff.fname,staff.lname,work.type,staff.position,staff.department,staff.plan,work.approve_date,work.start_work,work.doccode  "
                    . "from work "
                    . "inner join staff  "
                    . "on work.type='2' and staff.staff_id=work.staff_id")->fetchAll(); //ทดลองงาน 
            $link_work4 =  Base::links();

          Redirect::view("work/index",array("work3"=> $work3,"link_reg3" => $link_work3,"work4"=> $work4,"link_reg4" => $link_work4));       
    }
    
    public function create_new(){
 
        $staff_id="";
       $staff="";
        if(isset($_GET["staff_id"])){
          
            $staff=Base::query("select * from staff where staff_id='".request::input("staff_id")."'")->one();
            
        }
       // echo $staff["staff_id"];
          Redirect::view("work/create_new",array("staff"=>$staff));    
        
    }
    
     public function edit_new(){
          $child = Base::query("select * from "
                   . "child "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->fetchAll();   
        Redirect::view("work/edit_new",array("staff_id"=>""));    
    }
    
    public function create_emp(){
          Redirect::to("work/create_emp");
    }
    
    public function  insert() {
        
        $work = "insert into work set "
                . "staff_id='".request::input("txtstaff_id")."',"
                . "doccode='".request::input("txttext_number")."',"
               . "doc_date='".request::input("txttext_date")."',"
               . "doc_file='',"
               . "approve_date='".request::input("txtapprove_date")."',"
               . "start_work='".request::input("txtstart_work")."',"
               . "position='".request::input("txtposition")."',"
               . "department='".request::input("txtdepartment")."',"  
               . "plan='".request::input("txtplan")."',"
               . "emp_type='".request::input("txtemp_type")."',"
               . "type='".request::input("txtwork_type")."',"
               . "manager='".request::input("txtmanager")."',"
               . "salary='".request::input("txtsalary")."',"
              . "ip='".Base::ip()."'";   
       // echo  $work;
                Base::query($work)->execute();
        
                $contract = "insert into contract set "
                ."staff_id='".request::input("txtstaff_id")."',"
                ."date='".request::input("txtcontract_date")."',"
               ."contract_place='".request::input("txtworkplace")."',"
               ."start_date='".request::input("txtstart_contract")."',"
               ."end_date='".request::input("txtend_contract")."',"
               ."time='".request::input("txttime_contract")."',"
               ."fname='".request::input("txtfname")."',"
               ."lname='".request::input("txtlname")."',"  
               ."position='".request::input("txtposition")."',"
               ."department='".request::input("txtdepartment")."',"
               ."plan='".request::input("txtplan")."',"
               ."salary='".request::input("txtsalary")."',"
               ."level='".request::input("txtlevel")."',"
                ."contract_type='".request::input("txtcontract")."',"          
              . "ip='".Base::ip()."'";   
               Base::query($contract)->execute();
               
                $bank = "insert into bank set "
                ."staff_id='".request::input("txtstaff_id")."',"
                ."bank='".request::input("txtbank")."',"
                ."bank_account='".request::input("txtbank_account")."',"         
                ."start_salary='".request::input("txtsalary")."',"
                ."salary='".request::input("txtsalary")."',"
                ."commission='".request::input("txtcommission")."',"
                ."sso='".request::input("txtsso_number")."',"
                ."sso_percent='".request::input("txtsso_percent")."',"
                ."pvd_percent='".request::input("txtpvd_percent")."',"
                ."ip='".request::input("id")."'";
                
                Base::query($bank)->execute();
                
                $probation = "insert into probation set "
                ."staff_id='".request::input("txtstaff_id")."',"
               ."work_code='".request::input("txttext_number")."',"         
                ."fname='".request::input("txtfname")."',"
                ."lname='".request::input("txtlname")."',"  
                ."start_date='".request::input("txtstart_probation")."',"
                ."end_date='".request::input("txtend_probation")."',"
                ."time='".request::input("txtprobation_time")."',"
                ."evalute_date='".request::input("txtprobation_eve")."',"
                ."evalute_text='',"
                ."status='1',"
                ."aprover='',"         
                ."ip='".request::input("id")."'";
                
                Base::query($probation)->execute();
        
        $register="update registration set status='4' where staff_id='".request::input("txtstaff_id")."'"; //ทดลองงาน
         Base::query($register)->update();
         
        $staf="update staff set status='2',"
                 ."position='".request::input("txtposition")."',"
                 ."department='".request::input("txtdepartment")."',"
                 ."plan='".request::input("txtplan")."',"
                 ."manager='".request::input("txtmanager")."',"
                 ."type='".request::input("txtemp_type")."',"
                 ."level='".request::input("txtlevel")."',"
                 ."edu='".request::input("txtedu")."',"
                 ."salary='".request::input("txtsalary")."',"
                 ."updated_at='".date('Y-m-d h:i:s')."',"
                . "where staff_id='".request::input("txtstaff_id")."'"; //ทดลองงาน
                Base::query($staf)->update();
              
       Redirect::url("Probation", "index");
        
    }
    
    
}
