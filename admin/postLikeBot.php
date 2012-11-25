<?php require_once 'header.php'; ?>
<script type="text/javascript">

function uploadChange(){
        $('#form_image_upload').submit();
    	}
		
</script> 
<form  id="form_image_upload" action="file_upload.php" method="post" enctype="multipart/form-data"   />
<input type="file" name="uploaded_file" id="uploaded_file" value=""  onchange="uploadChange()"  />
		<input type="hidden" name="page_name" value="postLikeBot"  />
        
</form>


<?php require_once 'footer.php'; ?>