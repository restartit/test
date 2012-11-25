<?php require_once 'header.php'; ?>

<?php
$trivia = new trivia();
$trivia->GetById(1);

?> 

<script type="text/javascript">

function uploadChange(){
        $('input[type="submit"]').click();
    	}
		
</script>

<form class="form_trivia_admin" action="trivia_upload.php" method="post" enctype="multipart/form-data"  >
<p>
    <span class="question1">שאלה 1</span>
        <input type="text" name="the_question1" id="the_question1" value="<?php echo $trivia->the_question1 ?>"/><br/>
    <input type="radio" name="ques1" value="1" <?php if($trivia->ques1 == "1"){?>checked="checked"<?php }?>   />    
         <input type="text" name="the_question1_answer1" id="the_question1_answer1"  value="<?php echo $trivia->the_question1_answer1 ?>"/><br/>
         <input type="radio" name="ques1" value="2" <?php if($trivia->ques1 == "2"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question1_answer2" id="the_question1_answer2"  value="<?php echo $trivia->the_question1_answer2 ?>"/><br/>
         <input type="radio" name="ques1" value="3" <?php if($trivia->ques1 == "3"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question1_answer3" id="the_question1_answer3"  value="<?php echo $trivia->the_question1_answer3 ?>"/><br/>
         <input type="radio" name="ques1" value="4" <?php if($trivia->ques1 == "4"){?>checked="checked"<?php }?> />
         <input type="text" name="the_question1_answer4" id="the_question1_answer4"  value="<?php echo $trivia->the_question1_answer4 ?>"/><br/>
         </p>
<p>         
    <span class="question1">שאלה 2</span>
        <input type="text" name="the_question2" id="the_question2"  value="<?php echo $trivia->the_question2 ?>"/><br/>
        <input type="radio" name="ques2" value="1" <?php if($trivia->ques2 == "1"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question2_answer1" id="the_question2_answer1"  value="<?php echo $trivia->the_question2_answer1 ?>"/><br/>
         <input type="radio" name="ques2" value="2" <?php if($trivia->ques2 == "2"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question2_answer2" id="the_question2_answer2"  value="<?php echo $trivia->the_question2_answer2 ?>"/><br/>
         <input type="radio" name="ques2" value="3" <?php if($trivia->ques2 == "3"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question2_answer3" id="the_question2_answer3"  value="<?php echo $trivia->the_question2_answer3 ?>"/><br/>
         <input type="radio" name="ques2" value="4" <?php if($trivia->ques2 == "4"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question2_answer4" id="the_question2_answer4"  value="<?php echo $trivia->the_question2_answer4 ?>"/><br/>
         </p>
<p>         
    <span class="question1">שאלה 3</span>
        <input type="text" name="the_question3" id="the_question3"  value="<?php echo $trivia->the_question3 ?>"/><br/>
        <input type="radio" name="ques3" value="1" <?php if($trivia->ques3 == "1"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question3_answer1" id="the_question3_answer1"  value="<?php echo $trivia->the_question3_answer1 ?>"/><br/>
         <input type="radio" name="ques3" value="2" <?php if($trivia->ques3 == "2"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question3_answer2" id="the_question3_answer2"  value="<?php echo $trivia->the_question3_answer2 ?>"/><br/>
         <input type="radio" name="ques3" value="3" <?php if($trivia->ques3 == "3"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question3_answer3" id="the_question3_answer3"  value="<?php echo $trivia->the_question3_answer3 ?>"/><br/>
         <input type="radio" name="ques3" value="4"  <?php if($trivia->ques3 == "4"){?>checked="checked"<?php }?>/>
         <input type="text" name="the_question3_answer4" id="the_question3_answer4"  value="<?php echo $trivia->the_question3_answer4 ?>"/><br/>
         <input type="submit" name="trivia_submit" /> <?php if($_GET['update'] == 'yes') { ?> עודכן בהצלחה! <?php } ?>
         </p>
</form>

<?php require_once 'footer.php'; ?>