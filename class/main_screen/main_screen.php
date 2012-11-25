<?php
 require_once('../class/baseDB.php');
 
class main_screen extends baseDB 

 {
  public $mytablename='main_screen';   
  public $Id;
  public $background_pic_url_top; 
  public $background_pic_url_main;
  public $background_pic_url_bot;
  public $countdown_date_time; 
  public $video_url; 
  public $terms_url; 
  public $buy_tickets_url;
  public $link_a_url; 
  public $link_b_url;
  public $movie_site_url; 

public function main_screen($id='',$background_pic_url_top='',$background_pic_url_main='',$background_pic_url_bot='',$countdown_date_time='',$video_url='',$terms_url='',$buy_tickets_url='',$link_a_url='',$link_b_url='',$movie_site_url='')
{
 $this->Id=$id ;
 $this->background_pic_url_top=$background_pic_url_top;
 $this->background_pic_url_main=$background_pic_url_main;
 $this->background_pic_url_bot=$background_pic_url_bot;
 $this->countdown_date_time=$countdown_date_time; 
 $this->video_url=$video_url; 
 $this->terms_url=$terms_url; 
 $this->buy_tickets_url=$buy_tickets_url;
 $this->link_a_url=$link_a_url; 
 $this->link_b_url=$link_b_url; 
 $this->movie_site_url=$movie_site_url;
 
}

 }
 ?>