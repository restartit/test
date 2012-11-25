<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="fb:admins" content="100003243152289"/>
<meta property="fb:app_id" content="525242367503747"/>
<title></title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<!-- js -->
<script src="../inc/js/jquery-1.8.2.min.js"  type="text/javascript"></script>
<script src="../inc/js/jquery-ui-1.8.16.custom.min.js"  type="text/javascript"></script>
<script src="../inc/js/core.js"  type="text/javascript"></script>
<script src="../inc/js/jquery.validate.js"  type="text/javascript"></script>
<?php
 require_once('../class/include.php');
  db_connect();
?>

<script>

	$(document).ready(function(e) {
		$('.preview_site_url').click(function() {
		   $('.preview_details').show();
	  });
	  
	  $('.back_to_after_like').click(function() {
	      $('.preview_details').hide();
	  });
	
	});

</script>

</head>

<body>

 <div id="fb-root"></div>
		  <script src="https://connect.facebook.net/en_US/all.js"></script>		
           <script type="text/javascript">
				var initParams = {};
				initParams.appId = <?php echo FACEBOOK_APP_ID;?>;
				initParams.cookie = true;
				initParams.status = true;
				initParams.xfbml = true;
				initParams.oauth = true;
		
				FB.init(initParams);
				
		        window.fbAsyncInit = function() {
		         FB.Canvas.setAutoGrow();

	                	};
						
			</script> 

<div id="wrapper">
 
 