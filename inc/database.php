<?php 
 
function db_connect() {
$database ="apps3_disney_generic";
$server ="localhost";
$user = "apps3_disney";
$password = "1234qwer";
$link = mysql_connect($server,$user,$password) or die(mysql_error());
	if(!$link) {
		echo "Error";
	} else {
		mysql_select_db($database,$link);
		mysql_query("set names `UTF8`");
	} 
}
	
 ?>