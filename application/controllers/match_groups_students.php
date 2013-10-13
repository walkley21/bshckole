<?php

require_once 'match.php';


class match_groups_students extends Match
{
    
    
    function __construct() {
      
        
       
        
         parent::__construct();
         $this->controller_name = __CLASS__;
      
         
//         echo "<pre>";
//         print_r(get_object_vars($this));
//         echo "</pre>";
         
    }
    
     function show($param)
    {
        
         
         
         $params= $this->uri->uri_to_assoc(3);
         
          //print_r($params);
         
         $this->setParams($params);
         $this->index();
        
    }
    
    
    
    function setParams($params)
    {
        foreach($params as $property => $param)
        {
            $this->$property=$param; 
        }
    }
    
    ///show_ajax/parent/group/parent_id/5/child/student
    function show_ajax()
    {
    
         $params= $this->uri->uri_to_assoc(3);
         //print_r($params);
         
         $parent    = $params['parent'];
         $parent_id =$params['parent_id'];
         
         $p = new $parent($parent_id);
         $child= $params['child'];
         
         $rows = $p->$child->get()->all;
         $data['rows']=$rows;
         
         $this->load->view("match_groups_students/rows_only",$data);
         
        
        
    }
    
}