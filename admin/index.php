<?php 
 /* if(isset($_SESSION['user'])){session_destroy();}
 session_start();*/
  define('PASSTO','app_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>מערכת ניהול - דלתא דיסני</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- js -->
<script src="../inc/js/jquery-1.7.min.js"  type="text/javascript"></script>
<script src="../inc/js/jquery-ui-1.8.17.custom.min.js"  type="text/javascript"></script>
<script src="../inc/js/jquery.validate.js"  type="text/javascript"></script>
<script src="../inc/js/core.js"  type="text/javascript"></script>
</head>
<?php
require_once('../class/include.php');
 if(isset($_POST['UserName']) && isset($_POST['Pass']))
{   $error=false;
    require_once('../inc/database.php');
    db_connect();
	$name=$_POST['UserName']; 
	$pass=$_POST['Pass'];
	$user = new UserDB();
	$bool=$user->Login($name,$pass);
		if($bool!='null')
	{
		
		$_SESSION['user']=$bool->UserName;
		 
		 echo "<script>window.location='".PASSTO."';  </script>";
		  
		
	}
	else // $bool=null 
	 {
		 echo "שם משתמש או סיסמא לא נכונים";
	
	 }
}

?>
<body>
<style>
table
{
 width:auto;	
}
td
{
border:0;
width:auto;
height:auto;	
}

</style>
<div id="wrapper">
 <div id="TitleMain"> 
 <strong class="TitleMain">מערכת ניהולית- </strong>
  <!--<img src="http::/restartest.co.il/facebook/smirnoff/products/css/image/LogoRefresh.png"  alt="Refresh" class="TitleImg"/>-->
 </div> 
 <span class="hr"></span>
 <form id="FormIndex" name="FormIndex" method="post" action="">  
   <table>
   <tr><td><label>שם:</label></td>
   <td><input id="UserName" name="UserName" type="text"  /></td>
   </tr>
   	<tr>	
       <td><label>סיסמא:</label></td> 
   		<td><input id="Pass" name="Pass" type="password"  /></td>
    </tr> 
     </table>
     <input type="submit" value="כנס" />
   </form>
   <?php  if($error) {?><span class="FR">שם משתמש/סיסמא לא נכונים</span><?php } ?>
   
	
 <div  id="error_find"></div>
 <span class="hr"></span>
</div>
</body>
</html>
<script>
$(document).ready(function(e) {
                           
		
    $('#FormIndex').validate({
		      rules:
			      { 
				    UserName:{required:true},
				    Pass:{required:true}
				  
				  },
				  errorLabelContainer:'#error_find',
	            		  errorElement: "li",
			  messages:
			           {
						 UserName:"שם",
						 Pass:"סיסמא", 
					   }
					   
		
		});
}); 
 
 
</script>