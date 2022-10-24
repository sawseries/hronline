<?php
require_once __dir__.'/../vendor/autoload.php';

date_default_timezone_set('Asia/Bangkok');
header('HTTP/1.1 200 OK');
//ob_start();

$controller ="Master";$action = "index";if(isset($_GET['controller'])&&isset($_GET['action'])){$controller = $_GET['controller'];$action = $_GET['action'];}
$headers = file_get_contents("./layouts/header.php");define("HEADER", $headers);$footers = file_get_contents("./layouts/footer.php");
define("FOOTER", $footers);$header_login = file_get_contents("./layouts/header_login.php");define("HEADER_LOGIN", $header_login);
$footer_login = file_get_contents("./layouts/footer_login.php");define("FOOTER_LOGIN", $footer_login);

require_once './app/route.php';
require_once './app/globals/Helpers.php';









