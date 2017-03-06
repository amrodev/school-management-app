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
date_default_timezone_set('Africa/Cairo');
require('../lib/events.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_event']))
  {     
     $_news = new Events();
     
     $title_english             = $_POST['title_english'];
     $title_arabic              = $_POST['title_arabic'];
     $day                       = $_POST['day'];
     $month                     = $_POST['month'];
     $id = NULL;
     $year = date("Y");

     $_news->save($id,$title_english,$title_arabic,$day,$month,$year);

     

     $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'News';
     $function_name_arabic    = 'اخبار';
     $function_date = $date;
     $function_type = 'Add New News';
     $function_type_arabic    = 'اضافة خبر جديد';
     $function_content        = 'Add New News With Tiltle : '.$title_english;
     $function_content_arabic = 'اضافة خبر جديد بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
     header("Location: ../ads_news.php");
  }
  ///////////////////////////////////////////////////////////////////////////////// 
  
  if (isset($_GET['news_name_del'])) 
  {
    $_news = new Events();
    $_enc = new Encryption();

    $enc_id = $_GET['news_name_del'];
    $id = $_enc->decode($enc_id);
    $_news->delete('id' ,$id);
    header("Location: ../ads_news.php");
  }
  


 /////////////////////////////////////////////////////////////////////////
 
 
 //////////////////////////////////////////////////////////////////

 if (isset($_POST['edit_events']))
 {
   $_news    = new Events();

   $title_english             = $_POST['title_english'];
   $title_arabic              = $_POST['title_arabic'];
   $short_description_english = $_POST['short_description_english'];
   $short_description_arabic  = $_POST['short_description_arabic'];
   $long_description_english  = $_POST['long_description_english'];
   $long_description_arabic   = $_POST['long_description_arabic'];
   $id = $_SESSION['news_name'];

   if (isset($_FILES["photo"]["tmp_name"])) 
   {
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../../wp_uploads/news/$rand_dir_name");
     
     move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/news/$rand_dir_name/".$_FILES["photo"]["name"]);
     $pic_name = @$_FILES["photo"]["name"];
     $pic = 'wp_uploads/news/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];
     
     $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'short_description_english',
           3 => 'short_description_arabic',
           4 => 'long_description_english',
           5 => 'long_description_arabic',
           6 => 'photo'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $short_description_english,
           3 => $short_description_arabic,
           4 => $long_description_english,
           5 => $long_description_arabic,
           6 => $pic
        );
      $counter = count($values);
      $select = 'id';
      $_news->update($fileds,$values,$counter,$select,$id);
   }
   else
   {
     $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'short_description_english',
           3 => 'short_description_arabic',
           4 => 'long_description_english',
           5 => 'long_description_arabic'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $short_description_english,
           3 => $short_description_arabic,
           4 => $long_description_english,
           5 => $long_description_arabic
        );
      $counter = count($values);
      $select = 'id';
      $_news->update($fileds,$values,$counter,$select,$id);

      $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'News';
     $function_name_arabic    = 'اخبار';
     $function_date = $date;
     $function_type = 'Edit  News';
     $function_type_arabic    = 'تعديل خبر';
     $function_content        = 'Edit News With Tiltle : '.$title_english;
     $function_content_arabic = 'تعديل خبر بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
     
   }


      
      
   header("Location: ../ads_news.php");   
 }
?>

<? ob_flush(); ?>