<?php

use verify\controller\MasterController as Master;
use verify\controller\UserController as User;
use verify\controller\AuthController as Auth;
use verify\controller\LoginController as Login;
use verify\controller\PersonalController as Personal;
use verify\controller\ProbationController as Probation;
use verify\controller\RegistController as Regist;
use verify\controller\VerifyController as Verify;
use verify\controller\WorkController as Work;
use verify\controller\StructureController as Structure;
use verify\globals\Helpers as Helpers;

$route;
switch ($controller) {
    case 'Master' : $route = new Master();
        break;
    case 'User' : $route = new User();
        break;
    case 'Auth' : $route = new Auth();
        break;
    case 'Login' : $route = new Login();
        break;
    case 'Personal' : $route = new Personal();
        break;
    case 'Probation' : $route = new Probation();
        break;
    case 'Regist' : $route = new Regist();
        break;
    case 'Verify' : $route = new Verify();
        break;
    case 'Work' : $route = new Work();
        break;
      case 'Structure' : $route = new Structure();
        break;
}

$route->$action();

