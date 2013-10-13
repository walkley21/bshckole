<?php
require_once 'ParentModel.php';
class school extends ParentModel
{
    public $has_many = array('group','student');
    
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'schools',
                    'form_title'=>'Editar Escuela'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}