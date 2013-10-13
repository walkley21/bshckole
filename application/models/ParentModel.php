<?php

class ParentModel extends DataMapper{
    
    public $controller_name;
    public $controller;
    public $CI;
    
    public $form_title;
    public $default_order_by=array('created');
    public $admin_dir='';
    public $title;
    public $subtitle;
    public $memory;
            
    
    
    
    function __construct($id = NULL,$config=array()) {
        
       
        foreach($config as $property=>$value)
        {
            $this->$property = $value;
        }
        
       
        $this->memory = new Memory("{$this}");
        
        parent::__construct($id);
        
     
        $this->CI = &get_instance();
        
        $this->admin_dir = $this->config->item("admin_dir"); 
        
    }
    
    
    function setTitle($title)
    {
        $this->title = $title;
    }
    
    function setSubtitle($title)
    {
        
         $this->subtitle = $title;
        
    }
    
    function delete_link()
    {
        
        return base_url("$this->controller/delete/{$this->id}");
        
    }
    function getEditLink()
    {
        
     
        return site_url("{$this->admin_dir}/$this->controller_name/form/{$this->id}");
        
    }
    
     function getNewLink()
    {
        
     
        return site_url("{$this->admin_dir}/$this->controller_name/form/");
        
    }
    
     function edit_link_field($thefield)
    {
         
        
        $a = new Anchor($this->$thefield,  admin_url("/{$this->controller_name}/form/{$this->id}"));
        
       return "$a";
        
        
    }
    function getFormAction()
    {
        return site_url("{$this->controller_name}/save/{$this->id}");
    }
    function saveFromPost($array = null)
    {
        //p($_POST);
        //p($array,"en sabe ");
        if ($array == null)
        $array = $_POST;    
        
        foreach($array as $key =>$val)
        {
            $val1 = $this->CI->input->post($key);
            if (!empty($val1))
            $val = $this->checkDate($val1);
            
            $this->$key = $val;
            
            
            //echo "[$key] [$val]";
        }
        $this->save();
        return $this->id;
       
    }
    
    
    function checkDate($val,$field_name='')
    {
        if (empty($val)) return  ; 
        
        
        if ( 1 === preg_match('~^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}~', $val))
        {
          
            @list($d,$m,$y)=split("/",$val);
        
            $val = "$y-$m-$d";
            //echo $val;
        }
        return $val; 
    }
    
    function selectParent($parent = "")
    {
        $c = new $parent();
        $all = $c->get()->all;
        $array['']='Seleccione';
        foreach ($all as $record) {
            $array[$record->id]=$record->name;
        }
        
       
        $d = new Dropdown("{$parent}_id",$array,'','uniform');
        
        return "$d";
    }
    
    
    function fdate($field,$format="d/m/Y")
    {
        if (empty($this->$field))
            return ;
        
        $date = $this->$field;  // a mysql date 
     
        
        
        $date = strtotime($date);
        return @date($format,$date);
        
                
    }
    
    
    function toDropdown()
    {
        $array = array();
        foreach($this->get()->all  as $item )
        {
            $array[$item->id]=$item->name;
        }
        return $array;
    }
    
    
     function getImage()
    {
        
        $image = $this->image->order_by('created','desc')->get(1)->file_name;
        
        $i = new Img(base_url("uploads/$image"));
      
        return "$i";        
    }
    
    
    
    
    function getImageSrc()
    {
        
        $image = $this->image->order_by('created','desc')->get(1)->file_name;
        
        return base_url("uploads/$image");
      
        
    }
    
    /*TODO add word limiter */
    function getExcerpt()
    {
        
        return $this->description;
        
    }
    function getPermalink($prev ='')
    {
        
        return site_url("{$prev}$this->friendlyurl");
        
    }
    
    /*form Methods*/
    
    function getFormTitle()
    {
        return $this->form_title;
    }
    
    function getChildrenLink($model)
    {
        $children = $this->$model->get();
        return site_url("{$this->controller_name}");
    }
    
    
    function sortbyfield($field='first_name')
    {
      
       
           
       $dir = $this->controller->dir;
     
      //  echo $dir;
        
      // $this->memory->set("$field{$dir}",$dir);
       
       if ($dir=='asc') 
       $dir='desc';
       
       //echo "[[$dir]]";
       return; // site_url("{$this->controller_name}/action/sort/field/$field/dir/{$dir}");
    }
    
    
    function setController($c)
    {
        
       /* echo "controller got is -- {$c} ---";
        
        echo "<pre>";
        $props = get_object_vars($this);
        print_r($props);
        echo "</pre>";*/
        $this->controller = $c;
    }
    
    
    
    function getNumberOf($model)
    {
        
      
        $this->$model->get();
        return $this->$model->result_count();
        
    }
}