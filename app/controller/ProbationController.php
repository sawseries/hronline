<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class ProbationController extends Base
{    
    public function index(){
         $probation = Base::query("select * from "
                   . "probation "
                   . "where "
                   . "status= '1'")->fetchAll(); 
         Redirect::view("probation/index",array("probation"=>$probation));    
    }    
    public function create(){
          Redirect::to("probation/create");
    }
    public function probation(){
          Redirect::to("probation/index");
    }
     public function evaluation(){
          Redirect::to("probation/evaluation");
    }
    
    
}
