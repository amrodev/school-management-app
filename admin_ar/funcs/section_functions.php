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
require('../lib/sections.php');
require('../lib/Encryption.php');
require('../lib/user_actions.php');
date_default_timezone_set('Africa/Cairo');
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
  

 
 //////////////////////////////////////////////////////////////////

 if (isset($_POST['select_section']))
 {
   $_section    = new Sections();
   $_user_action     = new User_actions();
   $username1 = $_SESSION['admin_username'];
   
   if (isset($_POST['Pre_School'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 1,
       1 => $_POST['Pre_School_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Pre_School';
     $_section->update($fileds,$values,$counter,$select,$id);
     
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $function_name = 'Sections';
     $function_date = $date;
     $function_type = 'Update Theme ';
     $function_content        = 'Update Theme of Pre-Scool';
     $function_name_arabic    = 'المراحل التعليمية ';
     $function_type_arabic    = 'تحديث الثين';
     $function_content_arabic = 'تحديث الثيم الخا بموقع الحضانة';
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }

   if (isset($_POST['KG'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 1,
       1 => $_POST['KG_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'KG';
     $_section->update($fileds,$values,$counter,$select,$id);
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $function_name = 'Sections';
     $function_date = $date;
     $function_type = 'Update Theme ';
     $function_content        = 'Update Theme of KG';
     $function_name_arabic    = 'المراحل التعليمية ';
     $function_type_arabic    = 'تحديث الثين';
     $function_content_arabic = 'تحديث الثيم الخا بموقع رياض اطفال';
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }

   if (isset($_POST['Primary'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 1,
       1 => $_POST['Primary_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Primary';
     $_section->update($fileds,$values,$counter,$select,$id);

     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $function_name = 'Sections';
     $function_date = $date;
     $function_type = 'Update Theme ';
     $function_content        = 'Update Theme of Primary';
     $function_name_arabic    = 'المراحل التعليمية ';
     $function_type_arabic    = 'تحديث الثين';
     $function_content_arabic = 'تحديث الثيم الخا بموقع الابتدائية';
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }

   if (isset($_POST['Preparatory'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 1,
       1 => $_POST['Preparatory_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Preparatory';
     $_section->update($fileds,$values,$counter,$select,$id);

     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $function_name = 'Sections';
     $function_date = $date;
     $function_type = 'Update Theme ';
     $function_content        = 'Update Theme of Preparatory';
     $function_name_arabic    = 'المراحل التعليمية ';
     $function_type_arabic    = 'تحديث الثين';
     $function_content_arabic = 'تحديث الثيم الخا بموقع المرحلة الاعدادية';
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }

   if (isset($_POST['Secondary'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 1,
       1 => $_POST['Secondary_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Secondary';
     $_section->update($fileds,$values,$counter,$select,$id);

     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $function_name = 'Sections';
     $function_date = $date;
     $function_type = 'Update Theme ';
     $function_content        = 'Update Theme of Secondary';
     $function_name_arabic    = 'المراحل التعليمية ';
     $function_type_arabic    = 'تحديث الثين';
     $function_content_arabic = 'تحديث الثيم الخا بموقع الثانوية';
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
   }
   ///////////////////////////////////////////////////////////////////////////////
   if (!isset($_POST['Pre_School'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 0,
       1 => $_POST['Pre_School_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Pre_School';
     $_section->update($fileds,$values,$counter,$select,$id);
   }

   if (!isset($_POST['KG'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 0,
       1 => $_POST['KG_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'KG';
     $_section->update($fileds,$values,$counter,$select,$id);
   }

   if (!isset($_POST['Primary'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 0,
       1 => $_POST['Primary_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Primary';
     $_section->update($fileds,$values,$counter,$select,$id);
   }

   if (!isset($_POST['Preparatory'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 0,
       1 => $_POST['Preparatory_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Preparatory';
     $_section->update($fileds,$values,$counter,$select,$id);
   }

   if (!isset($_POST['Secondary'])) 
   {
     $fileds = array(
       0 => 'enabled',
       1 => 'theme'
      );
     $values = array(
       0 => 0,
       1 => $_POST['Secondary_theme']
      );
     $counter = count($values);
     $select  = 'section_name_english';
     $id      = 'Secondary';
     $_section->update($fileds,$values,$counter,$select,$id);
   }      
   
   header("Location: ../Sections.php");   
 }
 
 if (isset($_POST['show'])) 
 {
    if ($_POST['KG_theme']) 
    {
      $color = $_POST['KG_theme'];
       header("Location: ../../EN/section/gallery.php?color=".$color);
    }
 }
?>

<? ob_flush(); ?>