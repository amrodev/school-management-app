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
require('../lib/banners.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');

ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_album']))
  {     
     $_gallery = new Gallery();
     
     $title_english = $_POST['title_english'];
     $title_arabic  = $_POST['title_arabic'];
     $section       = $_POST['section'];

     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../../wp_uploads/albums/$rand_dir_name");
     
     move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/albums/$rand_dir_name/".$_FILES["photo"]["name"]);
     $pic_name = @$_FILES["photo"]["name"];
     $pic = 'wp_uploads/albums/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];
     
     
     //is_username($username)
     $id = NULL;

     $_gallery->save_album($id,$title_english,$title_arabic,$pic,$section);

     header("Location: ../gallery.php");
     
  }
  ///////////////////////////////////////////////////////////////////////////////////
  
 
  ///////////////////////////////////////////////////////////////////////////////// 
  
  if (isset($_GET['delete_gallery'])) 
  {
    $_gall = new Gallery();
    $_enc  = new Encryption();

    $enc_id = $_GET['delete_gallery'];
    $id = $_enc->decode($enc_id);
    $_gall->delete('id' ,$id);
    header("Location: ../edit_albums.php");
  }
  


 /////////////////////////////////////////////////////////////////////////
 
 if (isset($_POST['add_new_slide'])) 
 {
   if ($_GET['title'])
   {
      $_bann = new Banners();
      $_enc = new Encryption();
      $title  = $_GET['title']; 
   
      if (isset($_FILES["photo"]["name"])) 
      {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $rand_dir_name = substr(str_shuffle($chars), 0, 15);
        mkdir("../../wp_uploads/banners/$rand_dir_name");
        move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/banners/$rand_dir_name/".$_FILES["photo"]["name"]);
        $pic_name = @$_FILES["photo"]["name"];
        $pic      = 'wp_uploads/banners/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];

        $id        = NULL;
        
        $enc_title = $_enc->encode($title);
        $_bann->save_photo($id,$title,$pic);
   
        $_user_action = new User_actions();
        $date = date("j-n-Y h:i A ");
        $id = NULL;
        $username1      = $_SESSION['admin_username'];
        $function_name  = 'Banners';
        $function_name_arabic    = 'بانرات';
        $function_date = $date;
        $function_type = 'Add New Banner';
        $function_type_arabic    = 'اضافة بانر جديدة';
        $function_content        = 'Add '.$title.'`s Banner';
        $function_content_arabic = 'اضافة بانرة صفحة : '.$title.'';
      $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }
      
   header("Location: ../add_banners.php?b=".$enc_title);   
 }
 }
 
 //////////////////////////////////////////////////////////////////

 if (isset($_POST['update_banner']))
 {
   $_bann = new Banners();
   $page  = $_GET['page'];
   $id    = $_GET['id'];    
   $enc   = new Encryption();
   $enc_page = $enc->encode($page);
   
   if (isset($_FILES["photo"]["name"])) 
   {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../../wp_uploads/banners/$rand_dir_name");
      move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/banners/$rand_dir_name/".$_FILES["photo"]["name"]);
      $pic_name = @$_FILES["photo"]["name"];
      $pic = 'wp_uploads/banners/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];

      $fileds = array(
           0 => 'image'
        );
      $values = array(
           0 => $pic
        );
      $counter = count($values);
      $select = 'id';
      $_bann->update($fileds,$values,$counter,$select,$id);
   
      $_user_action = new User_actions();
      $date = date("j-n-Y h:i A ");
      $id = NULL;
      $username1      = $_SESSION['admin_username'];
      $function_name  = 'Banners';
      $function_name_arabic    = 'بانرات';
      $function_date = $date;
      $function_type = 'Update Banner';
      $function_type_arabic    = 'تحذسث بانر';
      $function_content        = 'Update '.$page.'`s Banner';
      $function_content_arabic = 'تحديث بانرة صفحة : '.$page.'';
      $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }
      
   header("Location: ../add_banners.php?b=".$enc_page);   
 }

 /*if ($_GET['AddSlide'])
 {
    $_bann = new Banners();
    $page  = $_GET['page']; 
   
   if (isset($_FILES["photo"]["name"])) 
   {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../../wp_uploads/banners/$rand_dir_name");
      move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/banners/$rand_dir_name/".$_FILES["photo"]["name"]);
      $pic_name = @$_FILES["photo"]["name"];
      $pic = 'wp_uploads/banners/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];

      $fileds = array(
           0 => 'image'
        );
      $values = array(
           0 => $pic
        );
      $counter = count($values);
      $select = 'page';
      $_bann->update($fileds,$values,$counter,$select,$page);
   
      $_user_action = new User_actions();
      $date = date("j-n-Y h:i A ");
      $id = NULL;
      $username1      = $_SESSION['admin_username'];
      $function_name  = 'Banners';
      $function_name_arabic    = 'بانرات';
      $function_date = $date;
      $function_type = 'Update Banner';
      $function_type_arabic    = 'تحذسث بانر';
      $function_content        = 'Update '.$page.'`s Banner';
      $function_content_arabic = 'تحديث بانرة صفحة : '.$page.'';
      $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }
      
   header("Location: ../banners.php");   
 }*/


?>

<? ob_flush(); ?>