<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class VerifyController extends Base{

    public function __construct() {
       if (!(auth())) {
            Redirect::url("Auth", "loginpage");
        }
    }
    
    public function index(){
        //รอรายงานตัว
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
         
            
      Redirect::view("verify/index",array("reg1"=> $reg1,
          "reg2"=> $reg2,
          "reg3"=> $reg3,
          "reg4"=>$reg4,"links" => Base::links()));       
    }
    
    public function employee(){
           Redirect::to("verify/employee");
    }
    
      public function new(){
            Redirect::to("verify/new");
    }
    
    public function create(){
          Redirect::to("verify/create");
    }
    
    public function detail(){
        
              $detail = Base::query("select * from "
                   . "registration "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->one(); 
              
        Redirect::view("verify/detail",array("detail"=> $detail));   
    }
    
    public function delete(){
            Base::query("delete from "
                   . "registration "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->execute(); 
            
                   Base::query("delete from "
                   . "staff "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->execute(); 
            
               Redirect::url("Verify","index");
    }
    
     public function insert(){
      $registration = "insert into registration set "
              . "reg_id='" . request::input("txtreg_id") . "',"
              . "staff_id='',"
              . "ident_card='" . request::input("txtiden_card") . "',"
              . "fname='" . request::input("txtfname") . "',"
              . "lname='" . request::input("txtlname") . "',"
              . "username='" . request::input("txtusername") . "',"
              . "password='" . request::input("txtpassword") . "',"
              . "start_work='" . request::input("txtstartwork") . "',"
              . "start_date='" . request::input("txtstartdate") . "',"
              . "end_date='" . request::input("txtenddate") . "',"
              . "confirm_date='',"
              . "approve='0',"
              . "email1='" . request::input("txtemail1") . "',"
              . "email2='" . request::input("txtemail2") . "',"
              . "p1='0',"
             . "status='1'," //รอรายงานตัว 
              . "confirm='0',"
              . "remember_token='0'";

              Base::query($registration)->execute();
      
            $staff = "insert into staff set "
             . "reg_id='" . request::input("txtreg_id") . "',"        
              . "staff_id='" . request::input("txtreg_id") . "',"
              . "fname='" . request::input("txtfname"). "',"
              . "lname='" . request::input("txtlname") . "',"
              . "position='',"
              . "department='',"
              . "plan='',"
              . "manager='',"
              . "type='',"
              . "level='',"
              . "status='1',"
              . "salary='',"
              . "ip='" . Base::ip(). "'";
         Base::query($staff)->execute();
         
         Redirect::para("Verify", "sendmail_page",array("reg_id"=>request::input("txtreg_id")));
    }
    
    public function sendmail_page(){
        
                     $detail = Base::query("select * from "
                   . "registration "
                   . "where "
                   . "reg_id= '".request::input("reg_id")."'")->one(); 
                     
        Redirect::view("verify/detail",array("detail"=> $detail));   
    }
    
    public function sendmail(){
         
          $detail = Base::query("select * from "
                   . "registration "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->one(); 
                   
        /*  if(request::input("chk_mail")){
           $chkmail = request::input("chk_mail");
           foreach ($chkmail  as $chkmail=>$value) {
             $mail = new PHPMailer(true);
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();            */                                //Send using SMTP
           
           /* $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'stsp2022';
            $mail->Password = 'tusodmqhrekwmrfs';*/
            
          /*  $mail->Host = 'smtp2.psu.ac.th';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'pabhada.j';
            $mail->Password = 'pabhada.10'; 
            $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
            
            $mail->From = 'pabhada.j@psu.ac.th';
            $mail->addAddress($value,"รายงานตัว");     // Add a recipient
            $mail->addReplyTo('mailsender@meeting.stiinfras.com', 'meeting.stiinfras','pabhada.j@psu.ac.th');
            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
          
            $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);

            
            /*$mail->SMTPOptions = array(
             'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );*/
            
           /* $mail->isHTML(true);      
            $htmlContent = "
            <html>
            <body>
            <h2><b>อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์</b></h2> 
            
            <p>ลิ้งค์ และ username + password สำหรับการรายงานตัว
            <p>url : http://meeting.stiinfras.com/verify
            <p>username : ".$detail["username"]."</p>
            <p>password : ".$detail["password"]."</p>
            </body>
            </html>";
                       
            $mail->Subject = 'ยืนยันการรายงานตัว อุทยานวิทยาศาสตร์ ม.สงขลานครินทร์';
            $mail->Body = $htmlContent; 
            
             if(!$mail->Send()) {
           echo 'Message was not sent.';
           echo 'Mailer error: ' . $mail->ErrorInfo;
           }
        //    $mail->send();
               }
          }*/
          
          
            Redirect::para("Verify", "index",array("success"=>"ส่ง Email สำหรับการรายงานตัวสำเร็จ"));
    }
    
        public function notify(){
            
        ini_set('display_errors', 1);
	    ini_set('display_startup_errors', 1);
	    error_reporting(E_ALL);
	    date_default_timezone_set("Asia/Bangkok");

	$sToken = line_token();
	$sMessage = "มีการรายงานตัวใหม่";

	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	curl_close( $chOne );   

    }
    
     public function approve(){
         
           $personal = Base::query("update "
                   . "personal_stsp "
                   . "set staff_id='".request::input("txtstaff_id")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update(); 
               
           $address =Base::query("update "
                   . "address "
                   . "set staff_id='".request::input("txtstaff_id")."'',"
                   . "username = '".request::input("txtusername")."'',"
                   . "password = '".request::input("txtpassword")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update(); 
           
            $family =Base::query("update "
                   . "family "
                   . "set staff_id='".request::input("txtstaff_id")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update(); 
        
           
                     $child  =Base::query("update "
                   . "child "
                   . "set staff_id='".request::input("txtstaff_id")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update(); 

                   $edu = Base::query("update "
                   . "education "
                   . "set staff_id='".request::input("txtstaff_id")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update(); 
                   
                    $staff = Base::query("update "
                   . "staff "
                   . "set staff_id='".request::input("txtstaff_id")."'' "
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update();  
                   
                    $regist = Base::query("update "
                   . "registration "
                   . "set status ='3'," //รออนุมัติจ้าง
                    . "staff_id='".request::input("txtstaff_id")."'," //staffid        
                    . "approve ='1' " //อนุมัติ        
                   . "where "
                   . "reg_id= '".request::input("txtreg_id")."'")->update();  
                    
                    Redirect::url("Verify","index");
                   
     }
 
     
     
       public function login() {
          Redirect::to("verify/login");
      }
            
        public function page1() {
              Redirect::to("verification/page1");
      }
      
      public function verify_code(){
      }
      
          public function profile(){
                   $personal = Base::query("select * from "
                   . "personal_stsp "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->one(); 
               
                     $address1 = Base::query("select * from "
                   . "address "
                   . "where type = '1' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                     
                     $address2 = Base::query("select * from "
                   . "address "
                   . "where type = '2' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                     
                     $dad = Base::query("select * from "
                   . "family "
                   . "where type='1' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                     
                     $mom = Base::query("select * from "
                   . "family "
                   . "where type='2' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                     
                     $spouse = Base::query("select * from "
                   . "family "
                   . "where type='3' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                     
                    $emerg1 = Base::query("select * from "
                   . "family "
                   . "where type='4' and  no='1' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                    
                    $emerg2 = Base::query("select * from "
                   . "family "
                   . "where type='4' and  no='2' and "
                   . "reg_id= '".request::input("id")."'")->one(); 
                    
                    
                     $child = Base::query("select * from "
                   . "child "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->fetchAll(); 
                     
                     
                   $edu = Base::query("select * from "
                   . "education "
                   . "where "
                   . "reg_id= '".request::input("id")."'")->fetchAll(); 
                             
              
               Redirect::view("verify/profile",array("personal"=> $personal,
                   "address1"=>$address1,
                   "address2"=>$address2,
                   "dad"=>$dad,
                   "mom"=>$mom,
                   "spouse"=>$spouse,
                   "emerg1"=>$emerg1,
                   "emerg2"=>$emerg2,
                   "child"=>$child,
                   "edu"=>$edu));   
    }

        public function create_work(){  
        Redirect::view("work/create_new",array("staff_id"=>request::input("staff_id")));    
    }
  
}
