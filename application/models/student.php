<?php
require_once 'ParentModel.php';
class student extends ParentModel
{
    public $has_many = array('group');
    public $has_one = array('school');
    
    function __construct($id = null) {
        
        
        $config = array(
                    'controller_name'=>'students',
                    'form_title'=>'Editar Alumno'
        );
        
        
      // echo "- at sutden--".$id; 
        parent::__construct($id,$config);
        
      //  echo "id is*** $id";
        
        
    }
    
    
    
    
}