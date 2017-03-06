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
require('../lib/gallery.php');
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
     $FacebookLink  = $_POST['FacebookLink'];

     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $rand_dir_name = substr(str_shuffle($chars), 0, 15);
     mkdir("../../wp_uploads/albums/$rand_dir_name");     
     move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/albums/$rand_dir_name/".$_FILES["photo"]["name"]);
     $pic_name = @$_FILES["photo"]["name"];
     $pic = 'wp_uploads/albums/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];
     $id = NULL;
     $_gallery->save_album($id,$title_english,$title_arabic,$pic,$section,$FacebookLink);
     /////////////// Audit ///////////////////////////////////////////////////////////
     $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'Gallery';
     $function_name_arabic    = 'البومات الصور';
     $function_date = $date;
     $function_type = 'Add New Photos Album';
     $function_type_arabic    = 'اضافة البوم ور';
     $function_content        = 'Add New Album With Tiltle : '.$title_english;
     $function_content_arabic = 'اضافة البوم جديد بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
     ///////////////////////////////////////////////////////////////////////////////////

     header("Location: ../gallery.php");     
  }
  ///////////////////////////////////////////////////////////////////////////////////
  
  if(isset($_POST['add_photos']))
  {
    echo '<br><br>';
    echo 'isset()';
    $_photos = new Gallery();
    $_enc = new Encryption();
    $AlbumID    = $_enc->decode($_SESSION['AlbumID']);
    $album_section  = $_enc->decode($_SESSION['photosec']);
    
    $dst2 = "../../wp_uploads/photos/";

    $ds          = DIRECTORY_SEPARATOR;  //1
 
    $storeFolder = '../../i/';   //2
 
    if (!empty($_FILES)) 
    {
       //upload files to I Folder
       echo '<br><br>';
       echo 'empty'; 
       $tempFile = $_FILES['file']['tmp_name'];          //3             
       $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
       $targetFile =  $targetPath. $_FILES['file']['name'];  //5
       move_uploaded_file($tempFile,$targetFile); //6
    }

    //Copy files 

    $dir = opendir($storeFolder); 
    while(false !== ( $file = readdir($dir)) ) 
    {
      echo '<br><br>';
      echo 'while'; 
      if (( $file != '.' ) && ( $file != '..' )) 
      {
       echo '<br><br>';
       echo 'if(file)';    
       if ( is_dir($storeFolder . '/' . $file) ) 
       {

       } 
       else 
       {
         echo '<br><br>';
         echo 'else'; 
         $d = date("Y-msi");
         $path =  $dst2.$d.$file;
         $id = NULL;
         $_photos->save_photo($id,$AlbumID,$album_section,$path);    
         copy($storeFolder . '/' . $file,$dst2 . '/' . $d.$file);
         unlink($storeFolder . '/' . $file);
         /////////////// Audit ///////////////////////////////////////////////////////////
         $_user_action = new User_actions();
         $date = date("j-n-Y h:i A ");
         $id = NULL;
         $username1      = $_SESSION['admin_username'];
         $function_name  = 'Gallery';
         $function_name_arabic    = 'البومات الصور';
         $function_date = $date;
         $function_type = 'Add New Photos To Album ';
         $function_type_arabic    = 'إضافة صور';
         $function_content        = 'Add New Photos ';
         $function_content_arabic = 'ضافة صور';
         $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
         ///////////////////////////////////////////////////////////////////////////////////
       }
     }
   }
   closedir($dir);
   header("Location: ../gallery.php");     

  }

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
 
 
 //////////////////////////////////////////////////////////////////

 if (isset($_POST['update_album']))
 {
   $_gallery    = new Gallery();

   $title_english = $_POST['title_english'];
   $title_arabic  = $_POST['title_arabic'];
   $section       = $_POST['section'];
   $id            = $_SESSION['album_id'];
   if (isset($_FILES["photo"]["name"])) 
   {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../../wp_uploads/albums/$rand_dir_name");
      move_uploaded_file(@$_FILES["photo"]["tmp_name"],"../../wp_uploads/albums/$rand_dir_name/".$_FILES["photo"]["name"]);
      $pic_name = @$_FILES["photo"]["name"];
      $pic = 'wp_uploads/albums/'.$rand_dir_name.'/'.$_FILES["photo"]["name"];

      $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'photo',
           3 => 'section'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $pic,
           3 => $section
        );
      $counter = count($values);
      $select = 'id';
      $_gallery->update($fileds,$values,$counter,$select,$id);
   }
   else
   {
      $fileds = array(
           0 => 'title_english',
           1 => 'title_arabic',
           2 => 'section'
        );
      $values = array(
           0 => $title_english,
           1 => $title_arabic,
           2 => $section
        );
      $counter = count($values);
      $select = 'id';
      $_gallery->update($fileds,$values,$counter,$select,$id);    
   }

   $_user_action = new User_actions();
     $date = date("j-n-Y h:i A ");
     $id = NULL;
     $username1      = $_SESSION['admin_username'];
     $function_name  = 'Gallery';
     $function_name_arabic    = 'البومات الصور';
     $function_date = $date;
     $function_type = 'Edit Photos Album';
     $function_type_arabic    = 'تعديل البوم ور';
     $function_content        = 'Edit Album With Tiltle : '.$title_english;
     $function_content_arabic = 'تعديب البوم  بعنوان : '.$title_english;;
     $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);
     
      
   header("Location: ../edit_albums.php");   
 }
?>

<? ob_flush(); ?>