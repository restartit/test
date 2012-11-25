<?php
header('Content-Type: text/html; charset=utf-8');
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
header("X-XSS-Protection: 0");

$appid="525242367503747"; // Your appid
$appkey="807ecc345c686588b37001ae80b19c15"; // Your appkey


define('FACEBOOK_APP_ID', $appid);
define('FACEBOOK_SECRET', $appkey);

function parse_signed_request($signed_request, $secret) {
list($encoded_sig, $payload) = explode('.', $signed_request, 2);

// decode the data
$sig = base64_url_decode($encoded_sig);
$data = json_decode(base64_url_decode($payload), true);

if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
error_log('Unknown algorithm. Expected HMAC-SHA256');
return null;
}

// check sig
$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
if ($sig !== $expected_sig) {
error_log('Bad Signed JSON signature!');
return null;
}

return $data;
}

function base64_url_decode($input) {
return base64_decode(strtr($input, '-_', '+/'));
}
if ($_REQUEST['signed_request']) {
	$response = parse_signed_request($_REQUEST['signed_request'],FACEBOOK_SECRET);
    $pageinfo=$response['page'];
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Trivia | Facebook</title>
        <style type="text/css">
        body {        	width: 810px;
        overflow: hidden;
        padding: 0;
        margin: 0;
        }
        #pre_like {
			background: url('../admin/admin_images/prelike.jpg') top center no-repeat;
			width:810px;
			height: 955px;
			border: none;
		}
		#like_button {
			margin-top: 442px;
			margin-right: 377px;
			width: 101px;
			height: 50px;
			float: right;
			border: none;
		}
		#like_button a
		{
		 width:90%;
		 height:90%;
		 display:block;	
		}
		
.fb-like {position: absolute !important;top: 339px;left: 321px;}
.fb-like iframe {height:23px !important;}
</style>
        <script type="text/javascript" src="../inc/js/jquery-1.7.min.js" ></script>
        <link href="../inc/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="../inc/facebox/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
    		jQuery(document).ready(function($) {
        		
        		
	      		$('a[rel*=facebox]').facebox({
	        	loadingImage : '../inc/facebox/loading.gif',
	        	closeImage   : '../inc/facebox/closelabel.png'
	      		})

	      		$('#like_button').mouseover(function() {
	      			 $("#like_button").css("cursor","pointer");
	      		})

      			$('#like_button ').click(function() {
					alert ('TESRT');
						/*jQuery.facebox({ div: '#likebox',
										loadingImage : './inc/facebox/loading.gif',
	        							closeImage   : './inc/facebox/closelabel.png' });*/
	      		})
    		});

  	   </script>
       
     
       
       
    </head>
    <body>
    
    	<div id="fb-root"></div>
	        <script type="text/javascript">
	            window.fbAsyncInit = function() {
	                FB.init({appId: <? echo $appid; ?>, status: true, cookie: true, xfbml: true});
	                FB.Canvas.setAutoGrow();
	                FB.Event.subscribe('edge.create', function(response) {
	                	top.location.href = 'https://www.facebook.com/pages/Ecaliptoos-disney-delta/431497813576275?sk=app_525242367503747';
	                	});

	            };
	            (function() {
	                var e = document.createElement('script');
	                e.type = 'text/javascript';
	                e.src = document.location.protocol +
	                    '//connect.facebook.net/en_US/all.js';
	                e.async = true;
	                document.getElementById('fb-root').appendChild(e);
	            }());
			</script>
			<div class="body">
			<?php
				// Checks if user liked the page
				if ($pageinfo['liked']!=1) {
		 			echo '<div id="pre_like">
		 					<div id="like_button">
						  		<a href="#likebox" rel="facebox"></a>
							</div>
						  </div>';
				}
				else {
					echo '<script>location.replace("postLike.php");</script>' ?>
			<?php 	}
			?>
            <div class="fb-like" data-href="https://www.facebook.com/pages/Ecaliptoos-disney-delta/431497813576275" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
			</div><!-- end of class body -->
     	<!--	<div id="likebox" style="display:none;">
				<fb:like-box href="https://www.facebook.com/restart.test" width="292" show_faces="false" stream="false" header="true"></fb:like-box>
  			</div>-->
  	<!--	<div style="width: 150px; padding-top: 10px;  float:left;">
        <a href="http://www.refreshing.co.il" target="_blank">
            <img id="refreshing" src="https://general.refreshfb.com/logo/logo1.png" border="0"
             onMouseOver="switch_item2('refreshing','refreshing_hover');" style="display: inline; " />
             
            <img id="refreshing_hover" src="https://general.refreshfb.com/logo/logo2.png" border="0" style="display: none; " onMouseOut="switch_item2('refreshing_hover','refreshing');" /></a>
    </div> -->
</div>
 <script type="text/javascript">
            function switch_item2(from,to) {
                $('#'+from).hide("fast",function() {
                $('#'+to).fadeIn();
                });
            }
			
</script>
    </body>
</html>