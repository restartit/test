<?php
 
require_once('../class/baseDB.php');
 
class finish_screen extends baseDB 

 {
   public $mytablename='finish_screen';   
public $Id;
 public $background_pic_url; 
 public $finish_phrase_text; 
 public $link_a_url; 
 public $link_b_url; 
 
public function finish_screen($id='',$background_pic_url='',$finish_phrase_text='',$link_a_url='',$link_b_url='')
{
 $this->Id=$id ;
 $this->background_pic_url=$background_pic_url; 
 $this->finish_phrase_text=$finish_phrase_text; 
 $this->link_a_url=$link_a_url; 
 $this->link_b_url=$link_b_url; 
  
}
 }
 ?>