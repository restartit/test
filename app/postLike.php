<?php require_once('header.php'); ?>

<style>
.linksPostLike{position: absolute;top: 386px;right: 62px;width: 694px;height: 23px;}
.linksPostLike a{float:right; width:208px; height:100%;cursor:pointer;}
.expertMoviePostLike{margin-right: 77px;width: 207px !important;}
.buyTicketsPostLike{margin-right: 23px;}
.bottom_links_url{top: 288px;}
.toParticipation{position: absolute;top: 208px;width: 260px;height: 50px;right: 270px;cursor: pointer;}

</style> 
<script>
$(document).ready(function(e) {
    $('.buyTicketsPostLike').click(function(e) {
		     $('.buyTicketsChoose').show();
    });
	$('.buyTicketsChoose .close').click(function(e) {
        	     $('.buyTicketsChoose').hide();
    });
	$('.toParticipation').click(function(e) {
        
    });
});
function goTo(url)
  {
	FB.getLoginStatus(function(response) {
		if (response.authResponse) 
		{
			var ac = response.authResponse.accessToken;
			var uid = response.authResponse.userID;
			
			
			FB.api('/me', function(response) {
			      // alert('Good to see you, ' + response.id+ '.');
				 
				 window.location=url; 
				    
			     });
			
		}
		else
		{
			 FB.login(function(response) {
			   if (response.authResponse) {
			     FB.api('/me', function(response) {
			     
				  window.location=url;
			     });
			   } else { 
			     console.log('User cancelled login or did not fully authorize.');
			   }
			 }, {scope:'publish_stream'});
		}
	});
  }
</script>
<?php 
	$main_screen = new main_screen();
	$main_screen->GetById(1); 
$trailer_upload_path = '../admin/admin_video/trailer.wmv';


if (file_exists($trailer_upload_path)) {
    //echo "The file $trailer_upload_path exists";
    ?>
    <div id="trailer_wmv_wrapper">
        <object id="MediaPlayer" classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" width="480" height="360" standby="Loading Windows Media Player components…" type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">
            <param name="FileName" value="https://apps3.ecaliptoos.co.il/disney_generic/admin/admin_video/trailer.wmv">
            <param name="AutoStart" value="true">
            <param name="ShowControls" value="true">
            <param name="BufferingTime" value="2">
            <param name="ShowStatusBar" value="true">
            <param name="AutoSize" value="true">
            <param name="InvokeURLs" value="false">
            <param name="AnimationatStart" value="1">
            <param name="TransparentatStart" value="1">
            <param name="Loop" value="0">

            <embed type="application/x-mplayer2" src="https://apps3.ecaliptoos.co.il/disney_generic/admin/admin_video/trailer.wmv" name="MediaPlayer" autostart="1" showstatusbar="1" showdisplay="1" showcontrols="1" loop="0" videoborder3d="0" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" width="690" height="240"></embed>
        </object>
    </div><?php
} else {
    //echo "The file $trailer_upload_path does not exist";
    ?>  
    <div id="trailer_youtube_wrapper">
    <?php echo $main_screen->video_url; ?>
    </div>
    <?php
}
?>
<div class="postLike">
<div class="topPostlike">
<div class="counter">
	   	<script language="JavaScript">
			TargetDate = "<?php echo $main_screen->countdown_date_time;  ?>";
			CountActive = true;
			CountStepper = -1; 
			LeadingZero = true;
			DisplayFormat = "%%D%%:%%H%%:%%M%%:%%S%%";
			FinishMessage = "נגמר הזמן";
			BackColor = "#transparent";
			ForeColor = "#fff";
			</script>
		 <script language="JavaScript" src="../inc/js/countdown.js"></script>
         
</div>
 <div class="preview_details">
        <a class="back_to_after_like" href="#"></a>
 </div><!--preview_details-->
<div class="buyTicketsChoose">
	<span class="close"></span>
    <a class="yesPlanet"></a>
    <a class="ravHan"></a>
</div>
<div class="linksPostLike">
<a class="movieSiteUrlPostLike" href="<?php echo $main_screen->movie_site_url;?>"></a>
<a class="buyTicketsPostLike" ></a>
<a class="preview_site_url expertMoviePostLike" ></a>
</div>
</div>
<div class="botPostlike">
  <div class="toParticipation" onclick="goTo('after_like.php')"></div>

    <div class="bottom_links_url">
    <a href="<?php echo $main_screen->terms_url ?>" id="bottom_link_1" target="_blank"></a>
    <a href="<?php //echo $main_screen->movie_site_url ?>" id="bottom_link_2"></a>
    <a href="<?php //echo $$main_screen->movie_site_url ?>" id="bottom_link_3"></a>
    </div><!--bottom_links_url-->

</div>
</div>

<?php require_once('footer.php'); ?>