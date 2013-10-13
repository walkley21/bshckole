<?php

class dashboard extends MY_Controller{
    
    
    function __construct() {
        
        $config = array("controller_name"=>__CLASS__,
                        "model_name"=>'',
                        'rowsTitle'=>"Tablero");
        
        
    
        parent::__construct($config);
    }
    
    
    function Content() {
        
        return  "tablero";
        
    }
  
}
   