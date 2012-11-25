<?php 
  
  require_once('../class/User/Class.UserDB.php');
  require_once('../inc/database.php');
  
  db_connect();

?>
<?php require_once('../class/pre_like/pre_like.php'); ?>
<?php require_once('../class/post_like/post_like.php'); ?>
<?php require_once('../class/main_screen/main_screen.php'); ?>
<?php require_once('../class/social_plugin/social_plugin.php'); ?>
<?php require_once('../class/details_page/details_page.php'); ?>
<?php require_once('../class/finish_screen/finish_screen.php'); ?>
<?php require_once('../class/user_info/user_info.php'); ?>
<?php require_once('../class/trivia/trivia.php'); ?>
<?php require_once('../class/social_buttons/social_buttons.php'); ?>
<?php require_once('../class/post_to_wall/post_to_wall.php'); ?>
<?php require_once('../class/facebook-php/facebook.php'); ?>
<?php 
  
	          define('FACEBOOK_APP_ID', '525242367503747');  

              define('FACEBOOK_SECRET', '807ecc345c686588b37001ae80b19c15');
 
	  ?>