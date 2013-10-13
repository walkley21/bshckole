<?php

class subjects extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'Subject',
                        'rowsTitle'=>"Materias");
        
        
    
        parent::__construct($config);
    }
  
    
   
    
  
    
    
    
}