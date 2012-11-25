
		
		
		
			
<?php require_once 'header.php'; ?>



<script type="text/javascript">

function uploadChange(){
        $('input[type="submit"]').click();
    	}
		
</script>
<form id="form_image_upload" action="file_upload.php" method="post" enctype="multipart/form-data"   />
		<span>העלאת באנר לחלק התחתון בדף באנר פעילות גולשים</span>
		<input type="file" name="uploaded_file" id="uploaded_file" value=""  />
		<input type="hidden" name="page_name" value="after_like_bot"  />
		</br>
		
		 <span>החלפת הURL אליה מקושר כפתור התקנון</span>
		 <input type="text" name="terms_url" id="terms_url" value=""  />
                 </br>
                 <span>חשוב מאוד !! על מנת להעלים כפתור יש להכניס - 0 -ב"לאן מוביל?"</span>
                                      </br>

                 <span>  כפתור -1 לאן מוביל </span>
		 <input type="text" name="button_1_url" id="button_1_url" value=""  />
                 <span>בחר תמונה רגילה לכפתור</span><input type="file" name="button_1_pic" id="button_1_pic" value=""  />
                 <span>בחר תמונת הובר לכפתור</span> <input type="file" name="button_1_pic_hover" id="button_1_pic_hover" value=""  />
                 </br>
                 <span>כפתור 2 לאן מוביל </span>
                 <input type="text" name="button_2_url" id="button_2_url" value=""  />
                <span>בחר תמונה רגילה לכפתור</span> <input type="file" name="button_2_pic" id="button_2_pic" value=""  />
                <span>בחר תמונת הובר לכפתור</span> <input type="file" name="button_2_pic_hover" id="button_2_pic_hover" value=""  />
                 </br>
                 <span>כפתור 3 לאן מוביל </span>
                 <input type="text" name="button_3_url" id="button_3_url" value=""  />
               <span>בחר תמונה רגילה לכפתור</span>  <input type="file" name="button_3_pic" id="button_3_pic" value=""  />
               <span>בחר תמונת הובר לכפתור</span>  <input type="file" name="button_3_pic_hover" id="button_3_pic_hover" value=""  /> 
                 </br>
		<input type="submit" name="submit" value=""   />
</form>



<?php require_once 'footer.php'; ?>