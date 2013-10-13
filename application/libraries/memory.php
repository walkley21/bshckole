<?php

class Memory{
    
    
    public  $field;
    
    function __construct($field=null) {
        
        $this->field=$field;
        @session_start();
        
    }
    
    
    function  get($key)
    {
       return  isset($_SESSION[$this->field][$key])?$_SESSION[$this->field][$key]:null;
        
    }
    
    function set($key,$value)
    {
        $_SESSION[$this->field][$key]=$value;
    }
}
