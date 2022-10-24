<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class AuthController extends Base {

    public function index() {
        if (auth() == true) {
            Redirect::url("Master", "index");
        } else {
            Redirect::url("Auth", "loginpage");
        }
    }

    public function login() {
        $term = Base::query("select *,count(*) as cnt FROM users where username='" . request::input("username") . "' and password='" . md5(request::input("password")) . "'")->one();
        if ($term["cnt"] > 0) {
            $_SESSION["Auth"] = true;
            $_SESSION["fullname"] = $term["firstname"] . " " . $term["lastname"];
            $_SESSION["status"] = $term["status"];
            $_SESSION["user"] = $term["username"];
            $_SESSION["user_id"] = $term["id"];
           // echo $_SESSION["fullname"];
            Redirect::url("Master", "index");
        }else{
            Redirect::view("auth/login", array("fail" => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง"));
        }
    }

    public function logout() {
        if (isset($_SESSION)) {
            session_destroy();
        }
        Redirect::url("Auth", "loginpage");
    }

    public function reset() {
        Redirect::to("login/reset");
    }

    public function resetpassword() {
        $update = Base::query("update user set password = '" . request::input("password") . "',updated_at='" . date('Y-m-d H:i:s') . "' where email='" .request::input("email") . "'")->update();
        if ($update) {
            Redirect::para("Auth", "loginpage", array("success" => "Reset Password Success"));
        }
    }

    public function loginpage() {
        Redirect::to("auth/login");
    }

    public function register() {
        $sql = "insert into registration set reg_id='" . request::input("txtreg_id") . "',"
                . "ident_card='" . request::input("txtiden_card") . "',"
                . "fname='" . request::input("txtfname") . "',"
                . "lname='" . request::input("txtlname") . "',"
                . "username='" . request::input("txtusername") . "',"
                . "password='" . md5(request::input("txtpassword")) . "',"
                . "start_work='" . request::input("txtstartwork") . "',"
                . "start_date='" . request::input("txtstartdate") . "',"
                . "end_date='" . request::input("txtenddate") . "',"
                . "confirm_date='',"
                . "p1='0',"
                . "confirm='0',"
                . "approve='0',"
                . "email='" . request::input("txtemail") . "',"
                . "remember_token='0'";

        Base::query($sql)->insert();
        Redirect::view("login/login", array("success" => "สมัครสมาชิกสำเร็จ กรุณารอตรวจสอบสิทธิ์ และยืนยันผล การลงทะเบียนของท่านทาง Email"));
    }

    public function registerpage() {
        Redirect::to("login/register");
    }

}
