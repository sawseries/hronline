<?php
namespace verify\base;

use verify\base\view;

class redirect extends Base{

    private $data = array();
    private $render = FALSE;

    public function __construct($controller,$action) {
        
    }

    public function url($controller,$action) {
        $location = "?controller=".$controller."&action=".$action."";
        header("Location: ".$location."");
    }

    public function para($controller,$action,Array $para) {
        $location = "./?controller=".$controller."&action=".$action."";
        $i=0;
        foreach($para as $x=>$x_value)
        {$location.="&".$x."=".$x_value;}
        header("Location: ".$location."");
    }
    
     public function search(Array $para) {

        $location = "";
        $i=0;
        foreach($para as $x=>$x_value)
        {
            if($i==0){
               $location.="?/".$x."=".$x_value;  
            }else{
            $location.="&".$x."=".$x_value;
            } 
           $i++;
        }
        
        header("Location: ".$location."");
    }
    
    
    public static function view($action,Array $para) {
            $view = new View($action);            
            foreach($para as $x=>$x_value)
            {$view->assign($x,$x_value);}
    }
    
    public static function to($action) {

            $view = new View($action);            
    }
    
    public static function back() {

           header('Location: ' . $_SERVER['HTTP_REFERER']);          
    }
}
