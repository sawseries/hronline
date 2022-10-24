<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class PersonalController extends Base{
    public function index(){
       Redirect::to("personal/index");
    }    

}
