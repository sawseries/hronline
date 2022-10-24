<?php

namespace verify\base;

class route{
    private $_listUri = array();
    private $_listCall = array();
    
    
    public function add($uri, $function)
    {
        $this->_listUri[] = $uri;
        $this->_listCall[] = $function;
    }
    public function submit($controllers,$action)
    {
       foreach ($this->_listUri as $listKey => $listUri) {
            $controller = $this->_listUri[$listKey]."Controller";
            $action = $this->_listCall[$listKey];
            $controllers = new $controller();
            $controllers->$action();
        }
    }  
}
?>