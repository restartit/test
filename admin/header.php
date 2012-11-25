<?php 
$_SESSION['url']="";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurants</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<!-- js -->
 <script src="../inc/js/jquery-1.8.2.min.js"  type="text/javascript"></script>
<script src="../inc/js/jquery-ui-1.8.16.custom.min.js"  type="text/javascript"></script>
<script src="../inc/js/core.js"  type="text/javascript"></script>
<script src="../inc/js/jquery.validate.js"  type="text/javascript"></script>

  
    <script>
     $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
<?php
 require_once('../class/include.php');
  db_connect();
?>
</head>

<body>

<div id="wrapper">

<a class="top_menu" href="prelike_admin.php">פרה לייק</a>
<a class="top_menu" href="postLikeTop.php">אחרי לייק -באנר עליון</a>
<a class="top_menu" href="postLikeBot.php">אחרי לייק -באנר תחתון</a>
<a class="top_menu" href="after_like_admin_top.php">אחרי השתתפות-באנר עליון</a>
<a class="top_menu" href="after_like_admin_main.php">אחרי השתתפות-אזור תוכן עיקרי</a>
<a class="top_menu" href="after_like_admin_bot.php">אחרי השתתפות-באנר תחתון</a>
<a class="top_menu" href="comments_admin.php">פעילות "ספרו לי" </a>
<a class="top_menu" href="trivia_admin.php">פעילות "טריוויה"</a>
<a class="top_menu" href="details_admin.php">מסך מילוי פרטים</a>
<a class="top_menu" href="finish_admin.php">מסך סיום</a>

 
 