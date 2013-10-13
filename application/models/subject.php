<?php
require_once("ParentModel.php");

class Subject extends ParentModel
{
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'subjects',
                    'form_title'=>'Editar Materia'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}