<?php
 
require_once('../class/baseDB.php');
 
class details_page extends baseDB 

 {
   public $mytablename='details_page';   
public $Id;
 public $background_pic_url; 
 
public function details_page($id='',$background_pic_url='')
{
 $this->Id=$id ;
 $this->background_pic_url=$background_pic_url; 

}
 }
 ?>