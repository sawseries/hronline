<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HR ONLINE - อุทยานวิทยาศาสตร์</title>
        <link href="./assets/assets/css/bootstrap.min.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/metisMenu.min.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/dataTables/dataTables.bootstrap.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/dataTables/dataTables.responsive.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/startmin.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/master.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">   

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

        <style>

            .effect1{
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
                border:1px solid #999999;
            }

            body{
                /*background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);*/
                font-family: 'Kanit', sans-serif;
            }

            .background-1{
                background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
            }

            .sidebar-nav{
                background-color:white;
            }

            .header_blue{
                background-color:#2B547E;
                color:white;
            }

            .table_main{
                box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
                margin:auto;
                width:100%;
                padding:1em;
            }

            .table_main th{
                height:40px;
            }

            .table_main td{
                padding:0.5em;
                width:100%;
                border:1px solid #D0D0D0;
                table-layout: fixed;
                font-family: 'Kanit', sans-serif;

            }

            .table_main tr:hover{
                background-color:#eef1f5;
            }

            .btns{
                border-top:15px solid #0d8bf2;
                text-align:right;
                padding-top:5px;
            }

            .btns a{
                color:#1482D0;
                font-size:12pt;
                background-color:#D0D0D0;
            }

            .navbar{
                background-color:#fff;
                border:1px solid #999;
            }

            .sidebar-nav .nav .sidebar_title{
                color:#4682B4;
                background-color:#F4F0FF;
            }
            
            .link_to{
                cursor:pointer;
            }
            .link_to:hover{
                   color:#1482D0;
            }
            
                    label span {
                font-size: 1rem;
            }

            label.error {
                color: red;
                font-size: 1rem;
                display: block;
                margin-top: 5px;
            }

            input.error {
                border: 1px dashed red;
                font-weight: 300;
                color: red;
            }


            .form-row{
                padding:0.3em;
            }


            .fadeInOne{
                animation: fadeInAnimation ease 3s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
            }

            @keyframes fadeInAnimation {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            
            .table_master{
                table-layout: fixed;color:#2c5a8e;
                background-color:#eee;
            }
            
            .table_master th{
           
                background-color:#cadbeb;
                text-align:center;
                border:1px solid #DDD;
            }
            
            .table_master td{
               border:1px solid #EEE;
               height:40px;
               border:1px solid #DDD;
            }

            #login {
                margin: 50px auto;
                width: 500px;
                text-align: center;
                height:550px;
                padding:30px;
                background-color:white;
               box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
                -webkit-border-radius: 10px 10px 10px 10px;
                border-radius:2px;
                border:1px solid #C0C0C0;
            }


            #formContent {
                -webkit-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
                background: #fff;
                width: 90%;
                max-width: 500px;
                position: relative;
                padding: 0px;
                box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
                text-align: center;
            }
            
            .header_master th{
                padding:0;
                background-color:#F5F5F5;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar effect1" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">HR-ONLINE</a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color:black;"></span>
                <span class="icon-bar" style="background-color:black;"></span>
                <span class="icon-bar" style="background-color:black;"></span>
            </button>
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> หน้าแรก</a></li>
            </ul>
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><b class="caret"><?= $_SESSION["fullname"]; ?></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="./index.php?controller=Auth&action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav> 

        <div style="min-height:1200px;">
        <div id="wrapper">
            <div class="sidebar effect1"  role="navigation" style="top:15px;">
                <div class="sidebar-nav">
                    <ul class="nav">
                        <li>
                            <a href="./index.php?controller=Master&action=index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="./index.php?controller=Personal&action=index" class="menu"><i class="fa fa-bar-chart-o fa-fw"></i> ทะเบียนประวัติ <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="./index.php?controller=Verify&action=index">รายงานตัว</a>
                                </li>
                                <li>
                                    <a href="./index.php?controller=Personal&action=index">ประวัติบุคลากร</a>
                                </li>
                            </ul>
                            <a href="./index.php?controller=Work&action=index" class="menu">
                                <i class="fa fa-bar-chart-o fa-fw"></i>อนุมัติจ้าง<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="./index.php?controller=Work&action=create_new">ทดลองงาน</a>
                                </li>
                                <li>
                                    <a href="./index.php?controller=Work&action=create_emp">ประจำปี</a>
                                </li>
                            </ul>                 
                            <a href="./index.php?controller=Probation&action=index" class="menu"><i class="fa fa-bar-chart-o fa-fw"></i>ทดลองงาน <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="./index.php?controller=Probation&action=create">ทดลองงาน</a>
                                </li>
                                <li>
                                    <a href="./index.php?controller=Probation&action=evaluation">ประเมิณผลการทดลองงาน</a>
                                </li>
                            </ul>          
                            <a href="#" class="menu"><i class="fa fa-bar-chart-o fa-fw"></i>อื่นๆ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="morris.html">สัญญาจ้าง</a>
                                </li>
                                <li>
                                    <a href="morris.html">การปรับตำแหน่ง/เงินเดือน</a>
                                </li>
                                <li>
                                    <a href="morris.html">ความผิด/บทลงโทษ</a>
                                </li>
                                <li>
                                    <a href="morris.html">การลาออก</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu"><i class="fa fa-wrench fa-fw"></i> เงินเดือน<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">บัญชีเงินเดือน</a>
                                </li>
                                <li>
                                    <a href="buttons.html">เงินเดือน</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="./index.php?controller=Structure&action=index" class="menu"><i class="fa fa-dashboard fa-fw"></i> โครงสร้าง<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="./index.php?controller=Structure&action=index">แผนผัง</a>
                                </li>
                                <li>
                                    <a href="panels-wells.html">ปีงบประมาณ</a>
                                </li>                                
                                <li>
                                    <a href="#">หน่วยงาน <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">หน่วยงานย่อย</a>
                                        </li>
                                    </ul>                                      
                                </li>
                                <li>
                                    <a href="buttons.html">ประเภทพนักงาน</a>
                                </li>
                                <li>
                                    <a href="buttons.html">ตำแหน่งงาน</a>
                                </li>
                                <li>
                                    <a href="buttons.html">ผู้บริหาร</a>
                                </li>
                            </ul>                       
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="page-wrapper" style='padding:0em;'>
            <div class="container-fluid" >