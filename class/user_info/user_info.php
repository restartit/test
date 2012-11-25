<?php
 
require_once('../class/baseDB.php');
 
class user_info extends baseDB 

 {
 public $mytablename='user_info'; 
 public $Id;
 public $full_name; 
 public $email; 
 public $agree_terms; 
 public $comment_story; 
 public $came_from_platform_url;  
 public $came_from_app_url;  
 public $fb_id; 
 public $radio1; 
 public $radio2;
 public $radio3;
 public $sumAnswer;
 public $trivia_id; 
  
public function user_info($id='',$full_name='',$email='',$agree_terms='',$comment_story='',$came_from_platform_url='',$came_from_app_url='',$fb_id='',$radio1='',$radio2='',$radio3='',$sumAnswer='',$trivia_id='')
{
 $this->Id=$id ;
 $this->full_name=$full_name; 
 $this->email=$email; 
 $this->agree_terms=$agree_terms; 
 $this->comment_story=$comment_story; 
 $this->came_from_platform_url=$came_from_platform_url; 
 $this->came_from_app_url=$came_from_app_url; 
 $this->fb_id=$fb_id; 
 $this->radio1=$radio1;
 $this->radio1=$radio2;
 $this->radio1=$radio3;
 $this->sumAnswer=$sumAnswer;
 $this->trivia_id=$trivia_id;
}
 }
 ?>