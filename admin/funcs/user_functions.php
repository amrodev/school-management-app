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
  require('../lib/admin.php');
  require('../lib/user_actions.php');
  require('../lib/Encryption.php');
  
  ini_set('session.bug_compat_warn', 0);
  ini_set('session.bug_compat_42', 0);
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_user']))
  {     
     $_user = new Admin();
     $_user_action = new User_Actions();
     
     $username     = $_POST['username'];
     $english_name = $_POST['english_name'];
     $arabic_name  = $_POST['arabic_name'];
     $password     = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];
     $email        = $_POST['email'];
     $level        = $_POST['level'];

     //check passwords
     if ($password == $confirm_password) 
     {
       $is_user = $_user->is_username($username);
       if ($is_user) {
         echo $_SESSION['User_message']      = 'Sorry , User is exist';
         $_SESSION['User_status'] = 'fail';
       }
       else{
        $id = NULL;
        $_enc = new Encryption();
        $password1 = $_enc->encode($password);
        $add_user = $_user->save($id,$username,$english_name,$arabic_name,$password1,$email,$level);
        if ($add_user) {
          $_SESSION['User_message']      = 'Adding user is successfully done';
          $_SESSION['User_status'] = 'done';
          date_default_timezone_set('Africa/Cairo');
          $id = NULL;
          $username_log = $username;
          $number_of_logins = 0;
          $umber_of_actions = 0;
          $last_login_date  = '';
          $_user_action->save_user_log($id,$username,$number_of_logins,$umber_of_actions,$last_login_date);
          $date = date("j-n-Y h:i A ");
          $id = NULL;
          $username1      = $_SESSION['admin_username'];
          $function_name = 'Users';
          $function_date = $date;
          $function_type = 'Create New User';
          $function_content        = 'Create New User With username : '.$username;
          $function_name_arabic    = 'مستخدمين';
          $function_type_arabic    = 'اضافة مستخدم جديد';
          $function_content_arabic = 'اضافة مستخدم جديد بأسم : '.$username;
          $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
        }
        else{
          $_SESSION['User_message']      = 'Something wrong on database , please contact mips team';
          $_SESSION['User_status'] = 'fail';
        }
        
       }
     }
     else{
      $_SESSION['User_message']      ='your password does not matched , please try again ';
      $_SESSION['User_status'] = 'fail';
     }

     ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     //is_username($username)
     header("Location:../users.php");
     
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
  /////////////////////////////////////////////////////
  if (isset($_GET['sus']))
  {
    $_enc   = new Encryption();
    $_admin = new Admin();

    $admin_id = $_enc->decode($_GET['sus']); 
    $fileds =array(
      0=> 'suspended'
      );
    $values = array(
       0 => 1
      );
    $counter = count($values);
    $select = 'admin_id';
    $id     = $admin_id;
    $_admin->update_user($fileds,$values,$counter,$select,$id);
    header("Location: ../edit_users.php");     
  }
  /////////////////////////////////////////////////////
  if (isset($_GET['unsus']))
  {
    $_enc   = new Encryption();
    $_admin = new Admin();

    $admin_id = $_enc->decode($_GET['unsus']); 
    $fileds =array(
      0=> 'suspended'
      );
    $values = array(
       0 => 0
      );
    $counter = count($values);
    $select = 'admin_id';
    $id     = $admin_id;
    $_admin->update_user($fileds,$values,$counter,$select,$id);
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
   $_user_action = new User_actions();

   $id = $_enc->decode($_SESSION['admin_id']);
   $username     = $_POST['username'];
   $english_name = $_POST['english_name'];
   $arabic_name  = $_POST['arabic_name'];
   $email        = $_POST['email'];
   $_POST['level'];

   switch ($_POST['level']) {
     case 'Super Admin':
        $level = 1;
       break;
     case 'Website Admin':
       $level = 2;
      break;
     
    
   }

   
   if ($_SESSION['last_username'] != $username) 
   {
     $details_english = 'Username Changed From '.$_SESSION['last_username'].' To '.$username;
     $details_arabic  = 'تم تغير اسم المستخدم  '.$_SESSION['last_username'].' ليبح '.$username;
   }
   if ($_SESSION['last_english_name'] != $english_name) 
   {
     $details_english .= '  English Name Changed From '.$_SESSION['last_english_name'].' To '.$english_name;
     $details_arabic  .= '  تم تغير الاسم بالغة الانجليزية من'.$_SESSION['last_english_name'].' ليبح '.$english_name;
   }
   if ($_SESSION['last_arabic_name'] != $arabic_name) 
   {
     $details_english .= '  Arabic Name Changed From '.$_SESSION['last_arabic_name'].' To '.$arabic_name;
     $details_arabic  .= '  تم تغير الاسم بالغة العربية من'.$_SESSION['last_arabic_name'].' ليبح '.$arabic_name;
   }
   if ($_SESSION['last_email'] != $email) 
   {
     $details_english .= '  Email Changed From '.$_SESSION['last_email'].' To '.$email;
     $details_arabic  .= '  تم تغيير البريد الالكترونى من '.$_SESSION['last_email'].' ليبح '.$email;
   }
   if ($_SESSION['last_level'] != $level) 
   {
     $details_english .= '  Level Changed ';
     $details_arabic  .= '  تم تغير لاحية المستخدم';
   }
   unset($_SESSION['last_username'] );
   unset($_SESSION['last_english_name']);
   unset($_SESSION['last_arabic_name']);
   unset($_SESSION['last_email']);
   unset($_SESSION['last_level']);           

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
   
   //$details_english
   date_default_timezone_set('Africa/Cairo');
   $date = date("j-n-Y h:i A ");
   $id = NULL;
   $username1               = $_SESSION['admin_username'];
   $function_name           = 'Users';
   $function_name_arabic    = 'مستخدمين';
   $function_date           = $date;
   $function_type           = 'Update Existing User';
   $function_type_arabic    = 'تعديل مستخدم';
   $function_content        = $details_english;
   $function_content_arabic = $details_arabic;
   $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   
   header("Location: ../edit_users.php");   
 }
?>

<? ob_flush(); ?>