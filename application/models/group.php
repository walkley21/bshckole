<?php
require_once("ParentModel.php");
class group extends ParentModel
{
    
    public $has_many = array('student');
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'groups',
                    'form_title'=>'Editar Grupo'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}