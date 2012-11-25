<?php
 
require_once('../class/baseDB.php');
 
class post_to_wall extends baseDB 

 {
   public $mytablename='post_to_wall';   
public $Id;
 public $title; 
 public $grey_phrase; 
 public $blue_phrase; 
 public $image; 
 public $url; 
public function post_to_wall($id='',$title='',$grey_phrase='',$blue_phrase='',$image='',$url='')
{
 $this->Id=$id ;
 $this->title=$title; 
 $this->grey_phrase=$grey_phrase; 
 $this->blue_phrase=$blue_phrase; 
 $this->image=$image; 
 $this->url=$url; 
}
 }
 ?>