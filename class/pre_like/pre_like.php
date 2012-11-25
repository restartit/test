<?php
 
require_once('../class/baseDB.php');
 
class pre_like extends baseDB 

 {
   public $mytablename='pre_like';  
public $Id; 
 public $background_pic_url; 
 
public function pre_like($id='',$background_pic_url='')
{
 $this->Id=$id ;
 $this->background_pic_url=$background_pic_url; 

}
 }
 ?>