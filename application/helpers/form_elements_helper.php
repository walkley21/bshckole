<?php



function selectStatus($current,$labels=NULL)
{
    $status = array("active",'inactive');
    
    $innerlabels = array("active"=>'Activo','inactive'=>'Inactivo');
    if (!empty($labels))
    $innerlabels = $labels;    
    
    $label ='';
    foreach($status as $s)
    {
        $selected_attr =''; 
        if ($s==$current)
        $selected_attr = 'selected = "selected" ';    
        
        $label.='<option value="'.$s.'"  '.$selected_attr.'  >'.$innerlabels[$s].'</option>';
    }
    return $label;
}