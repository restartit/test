<?php require_once 'header.php'; ?>



<script type="text/javascript">

function uploadChange(){
        $('input[type="submit"]').click();
    	}
		
</script> 
<form id="form_image_upload" action="file_upload.php" method="post" enctype="multipart/form-data"   \>
		<span>העלאת רקע לדף מילוי פרטי משתמש</span>
		<input type="file" name="uploaded_file" id="uploaded_file" value=""  />
		<input type="hidden" name="page_name" value="details"  />
		<input type="submit" name="submit" value=""   />
</form>



<?php require_once 'footer.php'; ?>