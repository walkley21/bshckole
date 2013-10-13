<?php

class Match extends MY_Controller{
    
    
    
    public $parent = '';//*for example group id 5*/
    public $parent_id = '';
    
   
    
    function __construct() {
        
        parent::__construct();
    }
    
    function Rows() {
       // echo  "at rows parent {$this->parent} paren id {$this->parent_id} ";
        
      //  $object = new $this->parent($this->parent_id);
        $object = new Group($this->parent_id);
        
        $title = $object->name;
        
        //echo $object->id;
        $object->setTitle("Grupo ". $title);
        $object->setSubTitle("Lista de alumnos inscritos");
        //echo $object;
        
        $all = $object->student->get()->all;
        
       // echo "<pre>";
        //print_r($all);
        //echo "</pre>";
        
        $data['rows']  = $all;
        $data['object']=$object;
        $data['record']=$object;
        
        
        return  $this->load->view("{$this->controller_name}/rows",$data,true);
        
    }
    
    
   
    
}