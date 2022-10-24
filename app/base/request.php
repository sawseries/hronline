<?php
namespace verify\base;

class request extends Base{
   
    public function __construct() {
       return new request();
    }
    
    public function input($method) {
      return $_REQUEST[$method];
    }
}
