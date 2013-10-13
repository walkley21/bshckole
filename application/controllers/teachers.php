<?php

class teachers extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'Teacher',
                        'rowsTitle'=>"Docentes");
        
        
    
        parent::__construct($config);
    }
  
    
   
    
  
    
    
    
}