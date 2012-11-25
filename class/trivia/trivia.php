<?php
 require_once('../class/baseDB.php');
 
class trivia extends baseDB 

 {
  public $mytablename='trivia';   
  public $Id;
  public $ques1;
  public $ques2;
  public $ques3;
  public $the_question1;
  public $the_question1_answer1; 
  public $the_question1_answer2;
  public $the_question1_answer3;
  public $the_question1_answer4; 
  public $the_question2;
  public $the_question2_answer1; 
  public $the_question2_answer2;
  public $the_question2_answer3;
  public $the_question2_answer4; 
  public $the_question3;
  public $the_question3_answer1; 
  public $the_question3_answer2;
  public $the_question3_answer3;
  public $the_question3_answer4; 
  public $active;

public function trivia($id='',$the_question1='',$the_question1_answer1='',$the_question1_answer2='',$the_question1_answer3='',$the_question1_answer4='',$the_question2='',$the_question2_answer1='',$the_question2_answer2='',$the_question2_answer3='',$the_question2_answer4='',
$the_question3='',$the_question3_answer1='',$the_question3_answer2='',$the_question3_answer3='',$the_question3_answer4='',$ques1='',$ques2='',$ques3='',$active=0)
{
 $this->Id=$id ;
 $this->ques1=$ques1;
 $this->ques2=$ques2;
 $this->ques3=$ques3;
 $this->the_question1=$the_question1;
 $this->the_question1_answer1=$the_question1_answer1;
 $this->the_question1_answer2=$the_question1_answer2;
 $this->the_question1_answer3=$the_question1_answer3;
 $this->the_question1_answer4=$the_question1_answer4;
 $this->the_question2=$the_question2;
 $this->the_question2_answer1=$the_question2_answer1;
 $this->the_question2_answer2=$the_question2_answer2;
 $this->the_question2_answer3=$the_question2_answer3;
 $this->the_question2_answer4=$the_question2_answer4;
 $this->the_question3=$the_question3;
 $this->the_question3_answer1=$the_question3_answer1;
 $this->the_question3_answer2=$the_question3_answer2;
 $this->the_question3_answer3=$the_question3_answer3;
 $this->the_question3_answer4=$the_question3_answer4;
 $this->active=$active;
 
}
public function getTrivia()
{
  $st="SELECT * FROM `trivia` WHERE `active`=1";
  $query=mysql_query($st)or die(mysql_error().' ' .$st);
  if(mysql_affected_rows()==1)
   {
	    $row=mysql_fetch_object($query);
		$this->Id=$row->Id ;
		 $this->ques1=$row->ques1;
		 $this->ques2=$row->ques2;
		 $this->ques3=$row->ques3;
		 $this->the_question1=$row->the_question1;
		 $this->the_question1_answer1=$row->the_question1_answer1;
		 $this->the_question1_answer2=$row->the_question1_answer2;
		 $this->the_question1_answer3=$row->the_question1_answer3;
		 $this->the_question1_answer4=$row->the_question1_answer4;
		 $this->the_question2=$row->the_question2;
		 $this->the_question2_answer1=$row->the_question2_answer1;
		 $this->the_question2_answer2=$row->the_question2_answer2;
		 $this->the_question2_answer3=$row->the_question2_answer3;
		 $this->the_question2_answer4=$row->the_question2_answer4;
		 $this->the_question3=$row->the_question3;
		 $this->the_question3_answer1=$row->the_question3_answer1;
		 $this->the_question3_answer2=$row->the_question3_answer2;
		 $this->the_question3_answer3=$row->the_question3_answer3;
		 $this->the_question3_answer4=$row->the_question3_answer4;
		 $this->active=1;
  }
  else
   {
	   
	 return false;
   }
}
public function ifPlay($user)
{ 
   $st="SELECT * FROM `user_info` WHERE `fb_id`=$user AND `trivia_id`=$this->Id";
  $query=mysql_query($st)or die(mysql_error().' ' .$st);
  if(mysql_affected_rows()>0)
   {
	 return true;   
   }
   else
    {
		return false;   
	}
}

 }
 ?>