<?php  
function inputFilter($input) {
	$input2 = $input; 
	//Replace Spatial Characters
	/*$input = str_replace ( '!' , '&#33;' , $input ) ;
	$input = str_replace ( ' ' , '&#32;' , $input ) ;
	$input = str_replace ( '$' , '&#36;' , $input ) ;
	$input = str_replace ( '%' , '&#37;' , $input ) ;
	$input = str_replace ( '(' , '&#40;' , $input ) ;
	$input = str_replace ( ')' , '&#41;' , $input ) ;
	$input = str_replace ( '*' , '&#42;' , $input ) ;
	$input = str_replace ( '+' , '&#43;' , $input ) ;
	$input = str_replace ( ',' , '&#44;' , $input ) ;
	$input = str_replace ( '-' , '&#45;' , $input ) ;
	$input = str_replace ( '.' , '&#46;' , $input ) ;
	$input = str_replace ( '/' , '&#47;' , $input ) ;
	$input = str_replace ( ':' , '&#58;' , $input ) ;
	$input = str_replace ( '<' , '&#60;' , $input ) ;
	$input = str_replace ( '=' , '&#61;' , $input ) ;
	$input = str_replace ( '>' , '&#62;' , $input ) ;
	$input = str_replace ( '?' , '&#63;' , $input ) ;
	$input = str_replace ( '@' , '&#64;' , $input ) ;
	$input = str_replace ( '[' , '&#91;' , $input ) ;
	$input = str_replace ( ']' , '&#93;' , $input ) ;
	$input = str_replace ( '^' , '&#94;' , $input ) ;
	$input = str_replace ( '_' , '&#95;' , $input ) ;
	$input = str_replace ( '`' , '&#96;' , $input ) ;
	$input = str_replace ( '{' , '&#123;' , $input ) ;
	$input = str_replace ( '|' , '&#124;' , $input ) ;
	$input = str_replace ( '}' , '&#125;' , $input ) ;
	$input = str_replace ( '}' , '&#125;' , $input ) ;*/
	$input = str_replace ( '“' , '&#34;' , $input ) ;
	$input = str_replace ( '″' , '&#34;' , $input ) ;
	$input = str_replace ( "'" , '&#39;' , $input ) ;

	return $input;

}
class baseDB
{
  public $Id;
  
public function Insert()
{ 
  $st="INSERT INTO $this->mytablename ( " ; 
  $index=0;
   foreach($this as $key=>$value)
	 {   if($value!=$this->mytablename  )
	     {
	   	 if($index==0){$st.=$key;}else {$st.=','.$key;}
		 $index++;
		 }
	 }
  $st.=") VALUES  (";	 
	$index=0;
	 foreach($this as $key=>$value)
	 {
		 if($value!=$this->mytablename)
	     {
	   	 if($index==0){$st.="'".inputFilter($value)."'";}else {$st.=','."'".inputFilter($value)."'";}
		 $index++;
		 }
	 }
  $st.=")";
  $query=mysql_query($st)or die (mysql_error().' ' .$st);
    
  $this->Id=mysql_insert_id();	 
}
public function Update()
{
 $st="UPDATE $this->mytablename SET ";
 $index=0;
 	 foreach($this as $key=>$value)
	 {if($value!=$this->mytablename  )
	     {
	   	 if($index==0){$st.=$key.'='."'".inputFilter($value)."'";}else {$st.=','.$key.'='."'".inputFilter($value)."'";}
		 $index++;
		 }
	 }
	 $st.="WHERE Id=$this->Id";
	
	 $query=mysql_query($st)or die (mysql_error().' ' .$st); 

	
}
public function GetById($id)
{ 
	$st="SELECT * FROM $this->mytablename WHERE Id=".$id;
   	$query=mysql_query($st)or die (mysql_error().' ' .$st);
	if(mysql_affected_rows()>0)
	 {
		 $row=mysql_fetch_assoc($query);
	   foreach($this as $key=>$value)
	    {
		  if($value!=$this->mytablename )
	        {
			$this->$key=$row[$key];
		    }
	   }
	   
	   return true;
		
		 
	 }
	else
	 {
		return 0; 
	 }
	
}
}

?>