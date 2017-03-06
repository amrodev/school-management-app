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
require('../lib/faq.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');
date_default_timezone_set('Africa/Cairo');
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_faq']))
  {     
     $_faq = new Faq();
     
     $english_question     = $_POST['english_question'];
     $english_answer = $_POST['english_answer'];
     $arabic_question  = $_POST['arabic_question'];
     $arabic_answer     = $_POST['arabic_answer'];
     $cat = $_POST['cat'];
     $id = NULL;

     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../../wp_uploads/files/$rand_dir_name");
     move_uploaded_file(@$_FILES["fileToUpload"]["tmp_name"],"../../wp_uploads/files/$rand_dir_name/".$_FILES["fileToUpload"]["name"]);
     $file_name = @$_FILES["fileToUpload"]["name"];
     $filepath = 'wp_uploads/files/'.$rand_dir_name.'/'.$_FILES["fileToUpload"]["name"];
     $faq = $_faq->save($id,$english_question,$english_answer,$arabic_question,$arabic_answer,$cat,$filepath);
     
     $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'FAQ';
     $function_name_arabic    = 'الاسئلة المتكرةة';
     $function_date = $date;
     $function_type = 'Add New FAQ';
     $function_type_arabic    = 'اضافة سؤال جديد';
     $function_content        = 'Add New Job FAQ Tiltle : '.$english_question;
     $function_content_arabic = 'اضافة سؤال جديد بعنوان : '.$arabic_question;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);

     header("Location: ../edit_FAQ.php");
     
  }
  ///////////////////////////////////////////////////////////////////////////////// 

  

////////////del/////////////////////////////////////////////////////////////////
  if (isset($_GET['del_name']))
  {
    $_enc = new Encryption();
    $_faq = new faq();

    $id = $_enc->decode($_GET['del_name']); 
    
    $_faq->delete($id); 
    header("Location: ../edit_FAQ.php");     
  }

  ///////////////////////////////////////////////////////////////////////////////// 

 if (isset($_POST['add_user_photo']))
 {
    $user_id = $_POST['username'];
    $_user = new User();

     // Image ubload 
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../../wp-content/uploads/userphotos/$rand_dir_name");
     
     move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp-content/uploads/userphotos/$rand_dir_name/".$_FILES["photo"]["name"]);
     $pic_name = @$_FILES["photo"]["name"];
     $pic = 'wp-content/uploads/userphotos/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];
     $id  = NULL;
     $_user->save_photo($id,$pic,$user_id);
     header("Location: ../add_user_photo.php");
     
 }
 /////////////////////////////////////////////////////////////////////////
 //log_user
 if (isset($_POST['log_user']))
 {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $_enc     = new Encryption();
   $_user    = new User();
   $enc_pass = $_enc->encode($password);
   $check_user = $_user->check_login($username,$enc_pass);
   if ($check_user) 
   {
     $search_by = 'username';
     $value     = $username;
     $userdata  = $_user->get_userdata($search_by,$value);
     $_SESSION['username']  = $userdata['username'];
     $_SESSION['userid']    = $userdata['id'];
     $_SESSION['userlogin'] = TRUE;
     $_SESSION['user_log_message'] = 'done login';
     header("Location: ../../my-account/user_photo.php");
   }
   else{
    $_SESSION['user_log_message'] = 'Sorry Username is not available now , contact us for more details';
   }
   //check_login($username,$password)
   //encode($value)
 }

 if (isset($_POST['s_edit_user']))
 {
   $_user    = new User();
   $user_id  = $_POST['username'];
   $userdata = $_user->get_userdata('id',$user_id );
   $_SESSION['userdata'] = $userdata;
   header("Location: ../edit_user.php");
 }

 //////////////////////////////////////////////////////////////////

 if (isset($_POST['update_faq']))
 {
   $_faq    = new faq();
   $_enc      = new Encryption();

   $id = $_enc->decode($_SESSION['id']);
   $arabic_answer     = $_POST['arabic_answer'];
   $arabic_question = $_POST['arabic_question'];
   $category  = $_POST['cat'];
   $english_answer        = $_POST['english_answer'];
   $english_question        = $_POST['english_question'];
   $fileds = array(
           0 => 'arabic_answer',
           1 => 'arabic_question',
           2 => 'category',
           3 => 'english_answer',
           4 => 'english_question'
        );
   $values = array(
           0 => $arabic_answer,
           1 => $arabic_question,
           2 => $category,
           3 => $english_answer,
           4 => $english_question 
        );
   $counter = count($values);
   $select = 'id';
   $_faq->update_faq($fileds,$values,$counter,$select,$id);
   
  $_user_action = new User_actions();
  $date = date("j-n-Y h:i A ");
  $id = NULL;
  $username1      = $_SESSION['admin_username'];
  $function_name  = 'FAQ';
  $function_name_arabic    = 'الاسئلة المتكررة';
  $function_date = $date;
  $function_type = 'Edit FAQ';
  $function_type_arabic    = 'تعديل سؤال ';
  $function_content        = 'Edit FAQ With Tiltle : '.$english_question;
  $function_content_arabic = 'تعديل وظيفة  بعنوان : '.$arabic_question;;
  $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
  

   header("Location: ../edit_FAQ.php");   
 }
?>

<? ob_flush(); ?>