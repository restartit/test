<?php require_once 'header.php'; ?>



<script type="text/javascript">

function uploadChange(){
        $('input[type="submit"]').click();
    	}
		
</script>
<form id="form_image_upload" action="file_upload.php" method="post" enctype="multipart/form-data"   \>
		<span>העלאת רקע לדף - פרה-לייק</span>
		<input type="file" name="uploaded_file" id="uploaded_file" value="" onchange='uploadChange()' />
		<input type="hidden" name="page_name" value="prelike"  />
		<input type="submit" name="submit" value="" "  />
</form>



<?php require_once 'footer.php'; ?>