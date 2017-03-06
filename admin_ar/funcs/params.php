<? 
ob_start();
?>
<?php
session_start();


if ($_SESSION['login']) {
  
}
else{
  header("Location: ../index.php");
  date_default_timezone_set('Africa/Cairo');
  
}
?>

<?php 
   
   require '../lib/params.php';
   require '../lib/user_actions.php';
   ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

   if (isset($_POST['website_data']))
   {
   	  
     $last_params        = $_SESSION['Params']; 

     $message_arabic     = $_POST['message_arabic'];
     $last_message_ar    = $params[1]['content'];
     if ($message_arabic != $last_message_ar) 
     {
       $en = 'Arabic Message Changed from '.$last_message_ar.' To '.$message_arabic;
       $ar = 'تم تغيير الرسالة من  '.$last_message_ar.' لتصبح '.$message_arabic;
     }

     $message_english    = $_POST['message_english'];
     $last_message_en    = $params[2]['content'];
     if ($message_english != $last_message_en) 
     {
       $en .= ' ,English Message Changed from '.$last_message_en.' To '.$message_english;
       $ar .= ' ,تم تغيير الرسالة من  '.$last_message_en.' لتصبح '.$message_english;
     }

     $vission_arabic     = $_POST['vission_arabic'];
     $last_vission_ar    = $params[3]['content'];
     if ($vission_arabic != $last_vission_ar) 
     {
       $en .= ' ,Arabic Vission Changed from '.$last_vission_ar.' To '.$vission_arabic;
       $ar .= ' ,تم تغيير الرؤية من  '.$last_vission_ar.' لتصبح '.$vission_arabic;
     }

     $vission_english    = $_POST['vission_english'];
     $last_vission_en    = $params[10]['content'];
     if ($vission_english != $last_vission_en) 
     {
       $en .= ' ,English Vission Changed from '.$last_vission_en.' To '.$vission_english;
       $ar .= ' ,تم تغيير الرؤية من  '.$last_vission_en.' لتصبح '.$vission_english;
     }

     $contacts_arabic    = $_POST['contacts_arabic'];
     $last_contacts_ar   = $params[4]['content'];
     if ($vission_english != $last_contacts_ar) 
     {
       $en .= ' ,Contacts  Changed from '.$last_contacts_ar.' To '.$contacts_arabic;
       $ar .= ' ,تم تغيير جهات الاتصال من  '.$last_contacts_ar.' لتصبح '.$contacts_arabic;
     }

     $contacts_english   = $_POST['contacts_english'];
     $last_contacts_en   = $params[5]['content'];
     if ($contacts_english != $last_contacts_en) 
     {
       $en .= ' ,Contacts  Changed from '.$last_contacts_en.' To '.$contacts_english;
       $ar .= ' ,تم تغيير جهات الاتصال من  '.$last_contacts_en.' لتصبح '.$contacts_english;
     }

     $youtube_url        = $_POST['youtube_url'];
     $last_youtube_url   = $params[6]['content'];
     if ($youtube_url != $last_contacts_en) 
     {
       $en .= ' ,Youtube URL Changed from '.$last_youtube_url.' To '.$youtube_url;
       $ar .= ' ,تم تغيير رابط يو تيوب من  '.$last_youtube_url.' لتصبح '.$youtube_url;
     }

     $facebook_url       = $_POST['facebook_url'];
     $last_facebook_url  = $params[7]['content'];
     if ($facebook_url != $last_facebook_url) 
     {
       $en .= ' ,Facebook URL Changed from '.$last_facebook_url.' To '.$facebook_url;
       $ar .= ' ,تم تغيير رابط فيسبوك من  '.$last_facebook_url.' لتصبح '.$facebook_url;
     }
      
     $twitter_url        = $_POST['twitter_url'];
     $last_twitter_url   = $params[8]['content'];
     if ($twitter_url != $last_twitter_url) 
     {
       $en .= ' ,Twitter URL Changed from '.$last_twitter_url.' To '.$twitter_url;
       $ar .= ' ,تم تغيير رابط تويتر من  '.$last_twitter_url.' لتصبح '.$twitter_url;
     }

     $instgram_url       = $_POST['instgram_url'];
     $last_instgram_url  = $params[9]['content'];
     if ($instgram_url != $last_instgram_url) 
     {
       $en .= ' ,Instgram URL Changed from '.$last_instgram_url.' To '.$instgram_url;
       $ar .= ' ,تم تغيير رابط انستجرام من  '.$last_instgram_url.' لتصبح '.$instgram_url;
     }


     $_param = new Params();



     if (isset($message_arabic))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $message_arabic
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 5;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (isset($message_english))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $message_english
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 4;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($vission_arabic))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $vission_arabic
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 13;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($vission_english))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $vission_english
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 6;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($contacts_arabic))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $contacts_english
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 8;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($contacts_english))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $contacts_english
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 7;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($youtube_url))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $youtube_url
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 9;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($facebook_url))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $facebook_url
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 10;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($twitter_url))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $twitter_url
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 11;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	
     if (isset($instgram_url))
     {
     	$fileds = array(
     	         0 => 'content'
     	       );
        $values = array(
     	         0 => $instgram_url
     	       );
        $counter = count($values);
        $select = 'id';
        $id     = 12;
        $_param->update($fileds,$values,$counter,$select,$id);
     }
	  
    $_user_action = new User_actions();
    $date = date("j-n-Y h:i A ");
    $id = NULL;
    $username1      = $_SESSION['admin_username'];
    $function_name  = 'Website Data ';
    $function_name_arabic    = 'بيانات الموقع';
    $function_date = $date;
    $function_type = 'Update Website Data ';
    $function_type_arabic    = 'تحديث بيانات الموقع ';
    $function_content        = $en;
    $function_content_arabic = $ar;
    $_user_action->save_action($id,$username1,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic);

     
     header("Location: ../website_data.php");
   }

   //////////////////////////////////////////////////////////////////////////////////

   if (isset($_POST['update_web_settings']))
   {
     $_param = new Params();
     
     /////////////////////////////////////////////////////////////////////////////////
     if (isset($_POST['best_grades'])) 
     {
       $best_grades = 1;
       $fileds = array(
         0 => 'content',
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'best_grades';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['best_grades'])) 
     {
       $best_grades = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'best_grades';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }
     /////////////////////////////////////////////////////////////////////////////////

     /////////////////////////////////////////////////////////////////////////////////
     if (isset($_POST['star'])) 
     {
       $star = 1;
       $fileds = array(
         0 => 'content',
        );
       $values = array(
         0 =>$star
        );
       $counter = count($values);
       $select = 'type';
       $id = 'star';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['star'])) 
     {
       $star = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$star
        );
       $counter = count($values);
       $select = 'type';
       $id = 'star';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }
     /////////////////////////////////////////////////////////////////////////////////

     /////////////////////////////////////////////////////////////////////////////////
     if (isset($_POST['videos'])) 
     {
       $videos = 1;
       $fileds = array(
         0 => 'content',
        );
       $values = array(
         0 =>$videos
        );
       $counter = count($values);
       $select = 'type';
       $id = 'videos';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['videos'])) 
     {
       $videos = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$videos
        );
       $counter = count($values);
       $select = 'type';
       $id = 'videos';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }
     /////////////////////////////////////////////////////////////////////////////////

     /////////////////////////////////////////////////////////////////////////////////
     if (isset($_POST['Galleries'])) 
     {
       $Galleries = 1;
       $fileds = array(
         0 => 'content',
        );
       $values = array(
         0 =>$Galleries
        );
       $counter = count($values);
       $select = 'type';
       $id = 'Galleries';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['Galleries'])) 
     {
       $Galleries = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$Galleries
        );
       $counter = count($values);
       $select = 'type';
       $id = 'Galleries';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }
     /////////////////////////////////////////////////////////////////////////////////

     /////////////////////////////////////////////////////////////////////////////////
     if (isset($_POST['FAQ'])) 
     {
       $FAQ = 1;
       $fileds = array(
         0 => 'content',
        );
       $values = array(
         0 =>$FAQ
        );
       $counter = count($values);
       $select = 'type';
       $id = 'FAQ';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['FAQ'])) 
     {
       $FAQ = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$FAQ
        );
       $counter = count($values);
       $select = 'type';
       $id = 'FAQ';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }
     /////////////////////////////////////////////////////////////////////////////////



     header("Location: ../website_settings.php");
   }


   //////////////////////////////////////////////////////////////////////////////////

   if (isset($_POST['update_admin_settings']))
   {
     $_param = new Params();
     if (isset($_POST['maintenance'])) 
     {
       $best_grades = 1;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'maintenance';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['maintenance'])) 
     {
       $best_grades = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'maintenance';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }


     if (isset($_POST['birthdays'])) 
     {
       $best_grades = 1;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'birthdays';
       $_param->update($fileds,$values,$counter,$select,$id);
     }
     if (!isset($_POST['birthdays'])) 
     {
       $best_grades = 0;
       $fileds = array(
         0 => 'content'
        );
       $values = array(
         0 =>$best_grades
        );
       $counter = count($values);
       $select = 'type';
       $id = 'birthdays';
       $_param->update($fileds,$values,$counter,$select,$id); 
     }




     header("Location: ../admin_settings.php");
   }




?>

<? ob_flush(); ?>