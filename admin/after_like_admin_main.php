	
<?php require_once 'header.php';  ?>
<?php $upload_mb = min($max_upload, $max_post, $memory_limit);
 echo $upload_mb;
 $main_screen = new main_screen();
$main_screen->GetById(1);//אנחנו מעדכנים אם צריך את השורה היחידה
?>


<script type="text/javascript">

function uploadChange(){
        $('input[type="submit"]').click();
    	}
		
</script>
<form id="form_image_upload" action="file_upload.php" method="post" enctype="multipart/form-data"   /> 
		<span>העלאת רקע לחלק האמצעי(העיקרי) בדף אחרי לייק</span>
		<input type="file" name="uploaded_file" id="uploaded_file" value=""  />
		<input type="hidden" name="page_name" value="after_like_main"  />
		 </br>
		 
		 <span>העלאת סרטון WMV לטריילר</span>
		<input type="file" name="uploaded_file_wmv" id="uploaded_file_wmv" value=""  />
		</br>
		
		 <span>הכנסת קישור חדש (width=690 height=240)</span>
		 <input type="text" name="trailer_url" id="trailer_url" value='<?php echo $main_screen->video_url ?>' />
		</br>
		
		 <span>החלפת הקישור לאתר הזמנת כרטיסים לסרט בצורה של URL</span>
		 <input type="text" name="buy_tickets_url" id="buy_tickets_url" value='<?php echo $main_screen->buy_tickets_url ?>'  />
		
         <span>החלפת הקישור לאתר הסרט בצורה של URL</span>
		 <input type="text" name="movie_site_url" id="movie_site_url" value='<?php echo $main_screen->movie_site_url ?>'  />
		<input type="submit" name="submit" value=""   />
</form>
 



<?php require_once 'footer.php'; ?>