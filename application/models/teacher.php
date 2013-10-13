<?php
require_once 'ParentModel.php';

class Teacher extends ParentModel
{
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'teachers',
                    'form_title'=>'Editar Docente'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}