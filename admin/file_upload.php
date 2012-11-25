<?php
require_once('../class/include.php');
//require_once ('header.php');
//session_start();
$main_screen = new main_screen();
$main_screen->GetById(1);//אנחנו מעדכנים אם צריך את השורה היחידה

echo $main_screen->countdown_date_time;

if (isset($_POST['datepicker']) && $_POST['datepicker'] != "") {//פה אני בודק האם צריך לעדכן בדטאבייס את התאריך של הטיימר
   
    $timestamp = strtotime($_POST['datepicker']);
    $timer_date = date('Y-m-d', $timestamp);
    $main_screen->countdown_date_time = $timer_date;
}
if (isset($_POST['trailer_url']) && $_POST['trailer_url'] != "") {//כאן אני בודק האם יש לינק יו טיוב חדש לטריילר שצריך להכנס לדטאבייס
       $main_screen->video_url = $_POST['trailer_url'];
       $trailer_delete = "admin_video/trailer.wmv";
       if(file_exists($trailer_delete))//בדיקה האם יש טריילר שצריך למחוק
       {
           unlink($trailer_delete); 
       }
}
if (isset($_POST['terms_url']) && $_POST['terms_url'] != "") {   //כאן אני בודק האם יש לינק חדש לתקנון שצריך להתעדכן בדטאבייס
    $main_screen->terms_url = $_POST['terms_url'];
}

if (isset($_POST['buy_tickets_url']) && $_POST['buy_tickets_url'] != "") { //כאן אני בודק האם יש לינק חדש לקניית כרטיסים שצריך להכנס לדטאבייס

    $main_screen->buy_tickets_url = $_POST['buy_tickets_url'];
}




if (isset($_FILES['uploaded_file_wmv'])) {//כאן אני בודק האם הועלה קובץ חדש לטריילר בעמוד ראשי
 if ($_FILES["uploaded_file_wmv"]["error"] > 0)
  {
  echo "Error: " . $_FILES["uploaded_file_wmv"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["uploaded_file_wmv"]["name"] . "<br />";
  echo "Type: " . $_FILES["uploaded_file_wmv"]["type"] . "<br />";
  echo "Size: " . ($_FILES["uploaded_file_wmv"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["uploaded_file_wmv"]["tmp_name"];
  }
  
        move_uploaded_file($_FILES["uploaded_file_wmv"]["tmp_name"], 'admin_video/trailer.wmv');
    //$target_path = "../upload/trailer.wmv"; //כמו כן צריך לברר לגבי מי שולט...יו.אר.אל או סרטון שהועלה פיזית
    /*
    if (move_uploaded_file($_FILES['uploaded_file_wmv']['tmp_name'], $target_path)) {
        echo "The file " . $target_path .
        " has been uploaded";
    } else {
        echo "There was an error uploading the file, please try again!";
    
    }*/
}

if (isset($_POST['button_1_url']) && $_POST['button_1_url'] != "") {   //בודק האם יש קישורים חדשים לשלושת הכפתורים המתחלפים
    $social_buttons1= new social_buttons();
    $social_buttons1->GetById(1);
    $social_buttons1->Id=1;
    if($_POST['button_1_url']!='0')
    {
        
    $social_buttons1->link_url = $_POST['button_1_url'];
    }
    else 
    {
          
     $social_buttons1->is_shown='0';
    }
    
    
    $social_buttons1->Update();
}
if (isset($_POST['button_2_url']) && $_POST['button_2_url'] != "") {   //בודק האם יש קישורים חדשים לשלושת הכפתורים המתחלפים
    $social_buttons2= new social_buttons();
    $social_buttons2->GetById(2);
    $social_buttons2->Id=2;
    if($_POST['button_2_url']!='0')
    {
    $social_buttons2->link_url = $_POST['button_2_url']; 
    }
    else 
    {
     $social_buttons2->is_shown='0';
    }
    $social_buttons2->Update();
}
if (isset($_POST['button_3_url']) && $_POST['button_3_url'] != "") {   //בודק האם יש קישורים חדשים לשלושת הכפתורים המתחלפים
   $social_buttons3= new social_buttons();
    $social_buttons3->GetById(3);
    $social_buttons3->Id=3;
    if($_POST['button_3_url']!='0')
    {
    $social_buttons3->link_url = $_POST['button_3_url'];
    }
    else 
    {
     $social_buttons3->is_shown='0';
    }
    $social_buttons3->Update();
}

if(isset($_FILES['button_1_pic'])){//בדיקה האם יש אייקונים חדשים שצריכים לעלות
$was_upload = uploadImg($_FILES['button_1_pic'],'button_1_pic');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_FILES['button_1_pic_hover'])){
$was_upload = uploadImg($_FILES['button_1_pic_hover'],'button_1_pic_hover');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_FILES['button_2_pic'])){
$was_upload = uploadImg($_FILES['button_2_pic'],'button_2_pic');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_FILES['button_2_pic_hover'])){
$was_upload = uploadImg($_FILES['button_2_pic_hover'],'button_2_pic_hover');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_FILES['button_3_pic'])){
$was_upload = uploadImg($_FILES['button_3_pic'],'button_3_pic');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_FILES['button_3_pic_hover'])){
$was_upload = uploadImg($_FILES['button_3_pic_hover'],'button_3_pic_hover');
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if (isset($_FILES['uploaded_file'])) {//פה אני בודק האם צריך להחליף רקע לאחד העמודים לא משנה לאיזה עמוד אני עושה אותו הדבר ובודק בסוויטצ
    //echo($_POST['page_name']);
    $was_upload = uploadImg($_FILES['uploaded_file'], $_POST['page_name']);
    if ($was_upload) {
        ?>
        <img id='uploaded_image_pc' class='box' src='admin_images/<?php echo $was_upload ?>'/>
        <?php
    }
}
if(isset($_POST['movie_site_url']))
{
   $main_screen->movie_site_url=$_POST['movie_site_url'];	
}

$main_screen->Update(); //מעדכן את כל מה שצריך עדכון בבת אחת

function uploadImg($file, $choose_page) {//בודק לאיזה עמוד ,מעלה תמונה חדשה ושומר
//print_r($file);

    $path = "admin_images/";
    $arr = array(
        "image/jpeg" => "jpeg",
        "image/png" => "png"
    );
    {

        if (!is_dir($path)) {
            mkdir($path);
        }

        echo ($file['name']);
        $imageName = basename($file['name']);
        // Taking postfix of the image

        $postfix = explode(".", $imageName);

        $postfix_2 = $postfix[sizeof($postfix) - 1];
        //echo ($path);
        $rnd = rand(1, 10000);
        $path.=$rnd . "." . $postfix_2;
        //echo ($path);



        if (!move_uploaded_file($file["tmp_name"], $path)) {

            return '0';
            echo ' הקובץ לא עלה ';
        }
        //echo ($choose_page);
        switch ($choose_page) {
            case 'prelike':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/prelike.jpg", 100);
                imagedestroy($image);
                break;
            case 'after_like_top':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/after_like_top.jpg", 100);
                imagedestroy($image);
                break;
            case 'after_like_main':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/after_like_main.jpg", 100);
                imagedestroy($image);
                break;
            case 'after_like_bot':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/after_like_bot.jpg", 100);
                imagedestroy($image);
                break;
            case 'details':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/details.jpg", 100);
                imagedestroy($image);
                break;
            case 'finish':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/finish.jpg", 100);
                imagedestroy($image);
                break;
            case 'button_1_pic':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_1_pic.jpg", 100);
                imagedestroy($image);
                break;
            case 'button_2_pic':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_2_pic.jpg", 100);
                imagedestroy($image);
                break;
            case 'button_3_pic':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_3_pic.jpg", 100);
                imagedestroy($image);
                break;
             case 'button_1_pic_hover':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_1_pic_hover.jpg", 100);
                imagedestroy($image);
                break;
             case 'button_2_pic_hover':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_2_pic_hover.jpg", 100);
                imagedestroy($image);
                break;
             case 'button_3_pic_hover':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/button_3_pic_hover.jpg", 100);
                imagedestroy($image);
                break;
				case 'postLikeBot':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/postLikeBot.jpg", 100);
                imagedestroy($image);
                break;
				case 'postLikeTop':
                $image = imagecreatefromjpeg($path);
                imagejpeg($image, "admin_images/postLikeTop.jpg", 100);
                imagedestroy($image);
                break;
            default:
                break;
        }
    }
}
?>



