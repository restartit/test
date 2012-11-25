<?php
 
require_once('../class/baseDB.php');
 
class post_like extends baseDB 

 {
   public $mytablename='post_like';   
public $Id;
 public $background_pic_url; 
 public $countdown_date_time; 
 public $video_url; 
  
public function post_like($id='',$background_pic_url='',$countdown_date_time='',$video_url='')
{
 $this->Id=$id ;
 $this->background_pic_url=$background_pic_url; 
 $this->countdown_date_time=$countdown_date_time; 
 $this->video_url=$video_url; 
 }
 }
 ?>