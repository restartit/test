<?php
require_once('../class/baseDB.php');

 
 
class UserDB extends baseDB  
{
 public $mytablename='User';	
 public $Id;
 public $UserName;
 public $Pass;
 

public function UserDB($id="",$username="",$pass="") 
{$_SESSION['Table']='User';
	$this->Id=$id;
	$this->UserName=$username;
	$this->Pass=$pass;
	
}
public static function Login($name,$pass)
{
	$st="SELECT * FROM `User` WHERE `UserName`='$name' AND `Pass`='$pass'";
	$query=mysql_query($st)or die(mysql_error().' ' .$st);
	if(mysql_affected_rows()>0)
	 {   $row=mysql_fetch_assoc($query);
		 $User = new UserDB($row['Id'],$name,$pass) ;
		 return $User; 
	 }
	else 
	 {
	 	 return 'null';
	 }
	
}

}

?>