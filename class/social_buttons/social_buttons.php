<?php
 
require_once('../class/baseDB.php');
 
class social_buttons extends baseDB 

 {
   public $mytablename='social_buttons';   
public $Id;
 public $is_shown;  
 public $link_url; 
 
 public function post_to_wall($id='',$is_shown='',$link_url='')
{
 $this->Id=$id ;
 $this->title=$is_shown; 
 $this->link_url=$link_url; 
 }
 }
 ?>