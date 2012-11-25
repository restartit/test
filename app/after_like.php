<?php if(isset($_GET['redirect'])){header('Location: https://www.facebook.com/pages/Ecaliptoos-disney-delta/431497813576275?sk=app_525242367503747');} ?>
<?php require_once('header.php'); ?>
<?php require_once('../class/include.php'); ?>

<?php
//i check if there is an uploaded movie otherwise choose youtube url from db
$main_screen = new main_screen();
$main_screen->GetById(1);
$trailer_upload_path = '../admin/admin_video/trailer.wmv';

$facebook = new Facebook(array(
		'appId'  => FACEBOOK_APP_ID,
		'secret' => FACEBOOK_SECRET,
		));		
$user = $facebook->getUser();
if($user)
 {
    try
	 {
		$user_profile = $facebook->api('/me');	
	 }
	catch (Exception $e) 
	  {
      	   echo 'Caught exception: ',  $e->getMessage(), "\n";
	  }
 }
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

<div id="top_banner">
<div class="counter">
	   	<script language="JavaScript">
			TargetDate = "<?php echo $main_screen->countdown_date_time ?>";
			CountActive = true;
			CountStepper = -1; 
			LeadingZero = true;
			DisplayFormat = "%%D%%:%%H%%:%%M%%:%%S%%";
			FinishMessage = "נגמר הזמן";
			BackColor = "#transparent";
			ForeColor = "#fff";
			</script>
		 <script language="JavaScript" src="../inc/js/countdown.js"></script>
         
</div><!--counter-->
        
        <div class="preview_details">
        
        <a class="back_to_after_like" href="#"></a>
        
        </div><!--preview_details-->
        
        <div class="after_like_links_wrapper">
        
           <a class="movie_site_url" href="<?php echo $main_screen->movie_site_url ?>" target="_blank"></a>
           <a class="preview_site_url" href="#"></a>
        
        </div><!--after_like_links_wrapper-->

</div><!--top_banner-->
    <div id="main_bg">
    
    </div><!--main_bg-->
<div id="bottom_banner">
    
    
 <?php   $trivia = new trivia();
         $trivia->getTrivia();
		 
		 
	?>
    
    <?php $user_info = new user_info();
	      //$user_info->GetById(1);
	 ?>
    <script>
	$(document).ready(function(e) {
		
	$('.btnTrivia').click(function(){ 
		   if($('input:radio[name=radio1]:checked').val() > 0   & $('input:radio[name=radio2]:checked').val() > 0 & $('input:radio[name=radio3]:checked').val() > 0)
		     {
				 $('fieldset').hide();
				 $('.detailsLayer').show();
			 }
		   else
		   {
			 
				  $('.must_fill').show().text('נא לענות על כל השאלות');
				  setTimeout(function() {
					  $('.must_fill').hide()
				  },2000);
		   }
		 
	});
	 
	 $('.roles').click(function(e) {
       if($('#inputRoles').is(':checked'))
	    {
		  
		    $(this).children().css('display','none');
		    $('#inputRoles').click();
		}
		else
		 {
			
			  $(this).children().css('display','block');;
	 		  $('#inputRoles').click();
		 }
    });
	$('.submit_form').click(function(e) {
       $('.trivia_form').submit(); 
    });
	$(".trivia_form").validate({
		    rules: {
			
			full_name:		{required: true, minlength: 2},
			email: 			{required: true,email: true },
			roles:   {required: true},
			
			
			
		    },
		    messages: {
					
			full_name:		"שם מלא",
			email: 			"דואר אלקטרוני",
			roles:  "נא לאשר תקנון",
					
					
		    },
		    errorLabelContainer: "#must_fields",
		    errorElement: "li",
			submitHandler: function(form) 
							 {
								var form=$('.trivia_form').serialize();
								insertUserInfo(form);
								 $('.finishLayer').css('display','block');
								 $('.finish_popUp').css('display','block');
							 }
		});
	 
			
			
		
    		
});
   
	</script>
   
    
     <div class="trivia_wrapper">
       <form class="trivia_form" name="trivia_form" method="post" >
         <?php if(!$trivia->ifPlay($user)) {?>
          <fieldset class="questionLayer">
              <div class="trivia_questions">
                      <p> 1. <?php echo $trivia->the_question1 ?></p>
                      <ul>
                      <li>
                      <input type="radio" name="radio1" value="1"/>
                      <span><?php echo $trivia->the_question1_answer1 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio1" value="2"/>
                      <span><?php echo $trivia->the_question1_answer2 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio1" value="3"/>
                      <span><?php echo $trivia->the_question1_answer3 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio1" value="4"/>
                      <span><?php echo $trivia->the_question1_answer4 ?></span>
                      </li>
                      </ul>
                  </div>
                  <div class="trivia_questions">
                      <p> 2. <?php echo $trivia->the_question2 ?></p>
                      <ul>
                      <li>
                      <input type="radio" name="radio2" value="1"/>
                      <span><?php echo $trivia->the_question2_answer1 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio2" value="2"/>
                      <span><?php echo $trivia->the_question2_answer2 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio2" value="3"/>
                      <span><?php echo $trivia->the_question2_answer3 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio2" value="4"/>
                      <span><?php echo $trivia->the_question2_answer4 ?></span>
                      </li>
                      </ul>
                  </div>
                  <div class="trivia_questions">
                      <p> 3. <?php echo $trivia->the_question3 ?></p>	
                      <ul>
                      <li>
                      <input type="radio" name="radio3" value="1"/>
                      <span><?php echo $trivia->the_question3_answer1 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio3" value="2"/>
                      <span><?php echo $trivia->the_question3_answer2 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio3" value="3"/>
                      <span><?php echo $trivia->the_question3_answer3 ?></span>
                      </li>
                       <li>
                      <input type="radio" name="radio3" value="4"/>
                      <span><?php echo $trivia->the_question3_answer4 ?></span>
                      </li>
                  </ul>
                  </div>
                  <span class="btnTrivia"></span>
            </fieldset>  
            <fieldset class="detailsLayer">
                <h1><?php echo $user_profile['name']?></h1>
                <input name="full_name" type="text" class="inputFullName" />
                <input name="email" type="text" class="inputEmail" />
               <input type="checkbox" name="roles" id="inputRoles" checked="checked" value="1" />   
                <span class="roles">
                    <span></span>
                </span>
               <a href="#" class="submit_form"></a>
            </fieldset> 
            <?php } ?>
            <fieldset class="finishLayer"  >
                  <div class="finish_popUp" style=" <?php if($trivia->ifPlay($user)){?> display:block <?php } ?>">
                     <a class="link_a_url" href="<?php echo $main_screen->link_a_url ?>"></a>
                     <a class="back" href="postLike.php" ></a>
                  </div>
            </fieldset>   
      
      <div class="must_fill"></div>
        </form>
        <div id="must_fields"></div>
    </div><!--trivia_wrapper-->

    <div class="bottom_links_url">
    <a href="<?php echo $main_screen->terms_url ?>" id="bottom_link_1" target="_blank"></a>
    <a href="<?php echo $main_screen->link_a_url ?>" id="bottom_link_2"></a>
    <a href="<?php echo $main_screen->link_b_url ?>" id="bottom_link_3"></a>
    </div><!--bottom_links_url-->
</div><!--bottom_banner-->

<?php require_once('footer.php'); ?>