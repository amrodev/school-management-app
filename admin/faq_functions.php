
<? ob_start(); ?>

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
require('../lib/encryption.php');
  
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

     $faq = $_faq->save($id,$english_question,$english_answer,$arabic_question,$arabic_answer,$cat);
   
     //header("Location: ../FAQ.php");
     
  }
  ///////////////////////////////////////////////////////////////////////////////// 

  

////////////del/////////////////////////////////////////////////////////////////
  if (isset($_GET['del_name']))
  {
    $_enc = new Encryption();
    $_admin = new Admin();

    $admin_id = $_enc->decode($_GET['del_name']); 
    
    $_admin->delete($admin_id); 
    header("Location: ../edit_users.php");     
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

 if (isset($_POST['update_user']))
 {
   $_admin    = new Admin();
   $_enc      = new Encryption();

   $id = $_enc->decode($_SESSION['admin_id']);
   $username     = $_POST['username'];
   $english_name = $_POST['english_name'];
   $arabic_name  = $_POST['arabic_name'];
   $email        = $_POST['email'];
   $level        = $_POST['level'];
   $fileds = array(
           0 => 'admin_username',
           1 => 'admin_email',
           2 => 'level',
           3 => 'arabic_name',
           4 => 'english_name'
        );
   $values = array(
           0 => $username,
           1 => $email,
           2 => $level,
           3 => $english_name,
           4 => $arabic_name
        );
   $counter = count($values);
   $select = 'admin_id';
   $_admin->update_user($fileds,$values,$counter,$select,$id);
   //$userdata = $_user->get_userdata($select,$id );
   header("Location: ../edit_users.php");   
 }
?>

<? ob_flush(); ?>