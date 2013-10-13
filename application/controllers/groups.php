<?php

class groups extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'Group',
                        'rowsTitle'=>"Grupos");
        
        
    
        parent::__construct($config);
    }
  
    
   
    
  
    
    
    
}