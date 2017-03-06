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
require('../lib/jobs.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');
date_default_timezone_set('Africa/Cairo');
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
  
  //////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['add_job']))
  {     
     $_job = new Jobs();
     
     $title_english             = $_POST['title_english'];
     $title_arabic              = $_POST['title_arabic'];
     $short_description_english = $_POST['short_description_english'];
     $short_description_arabic  = $_POST['short_description_arabic'];
     $long_description_english  = $_POST['long_description_english'];
     $long_description_arabic   = $_POST['long_description_arabic'];
     $salary                    = $_POST['Salary'];
     $english_skills            = $_POST['english_skills'];
     $arabic_skills             = $_POST['arabic_skills'];
     $Vacancies                 = $_POST['Vacancies'];
     $ExpiryDate                = $_POST['datepicker'];
     $Ref                       = $_POST['Ref'];
     $id = NULL;

     $_job->save($id,$title_english,$title_arabic,$short_description_english,$short_description_arabic,
     $long_description_english,$long_description_arabic,$salary,$english_skills,$arabic_skills,
     $Vacancies,$ExpiryDate,$Ref);

     $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'Jobs';
     $function_name_arabic    = 'وظائف';
     $function_date = $date;
     $function_type = 'Add New Job';
     $function_type_arabic    = 'اضافة وظيفة جديد';
     $function_content        = 'Add New Job With Tiltle : '.$title_english;
     $function_content_arabic = 'اضافة وظيفة جديد بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);

     header("Location: ../jobs.php");
     
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

 if (isset($_POST['edit_job']))
 {
   $_job    = new Jobs();

   $title_english             = $_POST['title_english'];
   $title_arabic              = $_POST['title_arabic'];
   $short_description_english = $_POST['short_description_english'];
   $short_description_arabic  = $_POST['short_description_arabic'];
   $long_description_english  = $_POST['long_description_english'];
   $long_description_arabic   = $_POST['long_description_arabic'];
   $salary= $_POST['Salary'];
   $english_skills= $_POST['english_skills'];
   $arabic_skills= $_POST['arabic_skills'];
   $Vacancies= $_POST['Vacancies'];
   $ExpiryDate= $_POST['ExpiryDate'];
   $Ref= $_POST['Ref'];

   $id = $_SESSION['job_name'];



      $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'short_description_english',
           3 => 'short_description_arabic',
           4 => 'long_description_english',
           5 => 'long_description_arabic',
           6 => 'salary',
           7 => 'english_skills',
           8 => 'arabic_skills',
           9 => 'Vacancies',
           10 => 'ExpiryDate',
           11 => 'Ref'
           );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $short_description_english,
           3 => $short_description_arabic,
           4 => $long_description_english,
           5 => $long_description_arabic,
           6 => $salary,
           7 => $english_skills,
           8 => $arabic_skills,
           9 => $Vacancies,
           10 => $ExpiryDate,
           11 => $Ref
        );
      $counter = count($values);
      $select = 'id';
      $_job->update($fileds,$values,$counter,$select,$id);

  $_user_action = new User_actions();
  $date = date("j-n-Y h:i A ");
  $id = NULL;
  $username1      = $_SESSION['admin_username'];
  $function_name  = 'Jobs';
  $function_name_arabic    = 'ةظائف';
  $function_date = $date;
  $function_type = 'Edit Job';
  $function_type_arabic    = 'تعديل وظيفة ';
  $function_content        = 'Edit Job With Tiltle : '.$title_english;
  $function_content_arabic = 'تعديل وظيفة  بعنوان : '.$title_english;;
  $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
      
      
   header("Location: ../jobs.php");   
 }
?>

<? ob_flush(); ?>