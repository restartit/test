<?php
 
require_once('../class/baseDB.php');
 
class social_plugin extends baseDB 

 {
   public $mytablename='social_plugin';  
public $Id;
 public $name_of_plugin; 
public function social_plugin($id='',$name_of_plugin='') 
{
 $this->Id=$id ;
 $this->name_of_plugin=$name_of_plugin; 
}
 }
 ?>