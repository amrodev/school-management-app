<? 
ob_start();
?>

<?php
session_start();


if ($_SESSION['login']) {
  
}
else{
  header("Location: index.php");
  
}
?>
<?php 
//$_SESSION['User_message']
require('../lib/videos.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');
date_default_timezone_set('Africa/Cairo');

  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_video']))
  {     
     $_video = new Videos();
     
     echo $title_english       = $_POST['title_english'];
     echo '<br>';
     echo $title_arabic        = $_POST['title_arabic'];
     echo '<br>';
     echo $description_english = $_POST['description_english'];
     echo '<br>';
     echo $description_arabic  = $_POST['description_arabic'];
     echo '<br>';
     echo $img_txt             = $_POST['img'];
     echo '<br>';
     echo $embaded_code        = $_POST['embaded_code'];
     echo '<br>';
     echo $img                 = 'http://img.youtube.com/vi/'.$img_txt.'/0.jpg';
     echo '<br>';
     echo $section             = $_POST['section'];
     echo '<br>';
     $id = NULL;

     //$_video->save($id,$title_english,$title_arabic,$description_english,$description_arabic,$img,$embaded_code,$section);
     
     /*
     $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'Videos';
     $function_name_arabic    = 'فديوهات';
     $function_date = $date;
     $function_type = 'Add New Video';
     $function_type_arabic    = 'اضافة فديو جديد';
     $function_content        = 'Add New Video With Tiltle : '.$title_english;
     $function_content_arabic = 'اضافة فديو جديد بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
     //header("Location: ../videos.php");*/
     
  }
  ///////////////////////////////////////////////////////////////////////////////// 
  
  if (isset($_GET['job_name'])) 
  {
    $_job = new Jobs();
    $_enc = new Encryption();

    $enc_id = $_GET['job_name'];
    $id = $_enc->decode($enc_id);
    $_job->delete('id' ,$id);
    header("Location: ../jobs.php");
  }
  


 /////////////////////////////////////////////////////////////////////////
 
 
 //////////////////////////////////////////////////////////////////

 if (isset($_POST['edit_video']))
 {
   $_video    = new Videos();

   $title_english       = $_POST['title_english'];
   $title_arabic        = $_POST['title_arabic'];
   $description_english = $_POST['description_english'];
   $description_arabic  = $_POST['description_arabic'];
   $img                 = $_POST['img'];
   $embaded_code        = $_POST['embaded_code'];

   $id  = $_SESSION['video_name'];
   $last_img = $_SESSION['v_img'];
   if ($last_img == $img) 
   {
     $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'description_english',
           3 => 'description_arabic',
           4 => 'embaded_code'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $description_english,
           3 => $description_arabic,
           4 => $embaded_code
        );
      $counter = count($values);
      $select = 'id';
      $_video->update($fileds,$values,$counter,$select,$id);
   }
   else
   {
      $img_txt = 'http://img.youtube.com/vi/'.$img.'/0.jpg';
      $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'description_english',
           3 => 'description_arabic',
           4 => 'img',
           5 => 'embaded_code'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $description_english,
           3 => $description_arabic,
           4 => $img_txt,
           5 => $embaded_code
        );
      $counter = count($values);
      $select = 'id';
      $_video->update($fileds,$values,$counter,$select,$id);
   }



  $_user_action = new User_actions();
  $date = date("j-n-Y h:i A ");
  $id = NULL;
  $username1      = $_SESSION['admin_username'];
  $function_name  = 'Videos';
  $function_name_arabic    = 'فديوهات';
  $function_date = $date;
  $function_type = 'Edit Video';
  $function_type_arabic    = 'تعديل فديو ';
  $function_content        = 'Edit Video With Tiltle : '.$title_english;
  $function_content_arabic = 'تعديل فديو  بعنوان : '.$title_english;;
  $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
         
      
   header("Location: ../all_Videos.php");   
 }

 if (isset($_GET['v_del'])) 
  {
    $_video = new Videos();
    $_enc = new Encryption();

    $enc_id = $_GET['v_del'];
    $id = $_enc->decode($enc_id);
    $_video->delete('id' ,$id);
    header("Location: ../all_Videos.php");
  }
?>

<? ob_flush(); ?>