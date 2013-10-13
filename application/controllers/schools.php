<?php

class schools extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'School',
                        'rowsTitle'=>"Escuelas");
        
        
    
        parent::__construct($config);
    }
    
    
    function  getControllerName()
    {
        return __CLASS__;
    }


//    function save($id)
//    {
//        print_r($_POST);
//        die();
//        
//    }
   
    
  
    
    
    
}