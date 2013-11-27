<?php

class students extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'student',
                        'parent'=>'school',
                        'parent_id'=>'1',
                        'rowsTitle'=>"Alumnos");
        
        
    
        parent::__construct($config);
    }
    
    
    function  getControllerName()
    {
        return __CLASS__;
    }


//    function save($id=null)
//    {
//        print_r($_POST);
//        die();
//        
//    }
//   
    
  
    
    
    
}