<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HR ONLINE - อุทยานวิทยาศาสตร์</title>
        <link href="./assets/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/assets/css/metisMenu.min.css" rel="stylesheet">
        <link href="./assets/assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="./assets/assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="./assets/assets/css/startmin.css" rel="stylesheet">
        <link href="./assets/assets/css/master.css?key=<?php echo time(); ?>" rel="stylesheet">
        <link href="./assets/css/input.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

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
            
            
                input[type=password]:focus {
                outline: none;
                border:0;
                border-bottom: 2px solid #1E90FF;
                background-color:#FFF;
                margin: 0px;
                width:85%;
            }
           
                   input[type=text]:focus {
                outline: none;
                border:0;
                border-bottom: 2px solid #1E90FF;
                background-color:#FFF;
                margin: 0px;
                width: 85%;
            }
    
            
            .wrapper{
                margin-top:50px;
            }
            #formContent{
                margin:0 auto;height:550px;padding-top:50px;border:1px solid #999;
            }
            
             input[type=text],input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 10px 30px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  
        .fadeInDown {
                   animation: fadeInAnimation ease 2s;
                    animation-iteration-count: 1;
                    animation-fill-mode: forwards;
                    
            }

            @-webkit-keyframes fadeInDown {
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                }
            }

            @keyframes fadeInDown {
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                }
            }
            

body {
  font: 14px/2 "Open sans", sans-serif;
  letter-spacing: 0.05em;
}

.btn {
  display: inline-block;
  padding: 13px 20px;
  color: #fff;
  text-decoration: none;
  position: relative;
  background: transparent;
  border: 1px solid #e1e1e1;
  font: 12px/1.2 "Oswald", sans-serif;
  letter-spacing: 0.4em;
  text-align: center;
  text-indent: 2px;
  text-transform: uppercase;
  transition: color 0.1s linear 0.05s;
}
.btn::before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 1px;
  background: #e1e1e1;
  z-index: 1;
  opacity: 0;
  transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0.2s;
}
.btn::after {
  transition: border 0.1s linear 0.05s;
}
.btn .btn-inner {
  position: relative;
  z-index: 2;
}
.btn:hover {
  color: #373737;
  transition: color 0.1s linear 0s;
}
.btn:hover::before {
  top: 0;
  height: 100%;
  opacity: 1;
  transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0s;
}
.btn:hover::after {
  border-color: #373737;
  transition: border 0.1s linear 0s;
}


body {
  font: 14px/2 "Open sans", sans-serif;
  letter-spacing: 0.05em;
}

.btn {
  display: inline-block;
  padding: 13px 20px;
  color: #fff;
  text-decoration: none;
  position: relative;
  background: transparent;
  border: 1px solid #e1e1e1;
  font: 12px/1.2 "Oswald", sans-serif;
  letter-spacing: 0.4em;
  text-align: center;
  text-indent: 2px;
  text-transform: uppercase;
  transition: color 0.1s linear 0.05s;
}


        </style>
    </head>
    <body style='padding:0em;'>
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
        </nav> 
