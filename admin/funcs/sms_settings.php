<?php 
ob_start();
session_start();


header('Content-Type: text/html; charset=utf-8'); 


if (isset($_POST['sms_to_x'])) {
  require_once '../lib/admin.php';
  $_students = new Admin();
  $students  = $_students->select_x_stTable("*","Gradeid=".$_POST['gradeid']);

  
  $MessageTXT   = $_POST['message'];
  $_unicode = implode(unpack('H*', iconv("UTF-8", "UCS-4BE", $MessageTXT)));
  $_unicodeMessage = substr($_unicode, 4);
  
  for ($i=0; $i <count($students) ; $i++) { 
    if (isset($students[$i]['Mobile'])) 
    {     
       $_response = SendSMS($_unicodeMessage , $students[$i]['Mobile']);        
    }
  }
  $_SISSION['sms_response'] = $_response;

  $_SESSION['sms_counter'] = $_SESSION['sms_counter']-1;
    require_once '../lib/params.php';
    require_once '../lib/sms.php';
    $_param = new params();
    $_sms   = new sms();
    $fileds = array(
      0 => 'content'
      );
    $values = array(
      0 => $_SESSION['sms_counter']
      );    
    echo '<br>#sms after = '.$_SESSION['sms_counter'];
    $_param->update($fileds,$values,count($values),'type','sms_counter');
    $date = date("Y-m-d");
    $_sms->saveSmsHistory(null,'Grade : '.$_POST['gradeid'],$MessageTXT,count($students),$date,'Admin');

  header("Location:../sms.php");
}

if (isset($_POST['sms_all'])) 
{
  require_once '../lib/admin.php';
  $_students = new Admin();
  $students  = $_students->get_allST(); 
  
  $username     = 'amro_dev';
  $password     = 'Amroezz1';  

  $MessageTXT   = $_POST['message'];
  $_unicode = implode(unpack('H*', iconv("UTF-8", "UCS-4BE", $MessageTXT)));
  $_unicodeMessage = substr($_unicode, 4);
  
  for ($i=0; $i <count($students) ; $i++) { 
    if (isset($students[$i]['Mobile'])) 
    {     
       $_response = SendSMS($_unicodeMessage , $students[$i]['Mobile']);        
    }
  }
  $_SISSION['sms_response'] = $_response;

  $_SESSION['sms_counter'] = $_SESSION['sms_counter']-1;
    require_once '../lib/params.php';
    require_once '../lib/sms.php';
    $_param = new params();
    $_sms   = new sms();
    $fileds = array(
      0 => 'content'
      );
    $values = array(
      0 => $_SESSION['sms_counter']
      );    
    echo '<br>#sms after = '.$_SESSION['sms_counter'];
    $_param->update($fileds,$values,count($values),'type','sms_counter');
    $date = date("Y-m-d");
    $_sms->saveSmsHistory(null,'to All Students',$MessageTXT,count($students),$date,'Admin');
  
  header("Location:../sms.php");

}

///////////////////////////////////

if (isset($_POST['allTeachers'])) 
{
  require_once '../lib/admin.php';
  $_teachers = new Admin();
  $teachers  = $_teachers->get_allTE(); 

  echo 'vvvvvvvvvvvvvvv';
  
  $username     = 'amro_dev';
  $password     = 'Amroezz1';  

  $MessageTXT   = $_POST['message'];
  $_unicode = implode(unpack('H*', iconv("UTF-8", "UCS-4BE", $MessageTXT)));
  $_unicodeMessage = substr($_unicode, 4);
  
  for ($i=0; $i <count($teachers) ; $i++) { 
    if (isset($teachers[$i]['Mobile'])) 
    {     
       $_response = SendSMS($_unicodeMessage , $teachers[$i]['Mobile']);        
    }
  }
  $_SISSION['sms_response'] = $_response;

  $_SESSION['sms_counter'] = $_SESSION['sms_counter']-count($teachers);
    require_once '../lib/params.php';
    require_once '../lib/sms.php';
    $_param = new params();
    $_sms   = new sms();
    $fileds = array(
      0 => 'content'
      );
    $values = array(
      0 => $_SESSION['sms_counter']
      );    
    echo '<br>#sms after = '.$_SESSION['sms_counter'];
    $_param->update($fileds,$values,count($values),'type','sms_counter');
    $date = date("Y-m-d");
    $_sms->saveSmsHistory(null,'to All Teachers',$MessageTXT,count($teachers),$date,'Admin');
  
  header("Location:../teachers.php");

}


/////////////////////////////////////
if (isset($_POST['TeachersByGrade'])) 
{
  $grade   =  $_POST['grade'];
  $message =  $_POST['message'];

  require_once '../lib/admin.php';
  $_teachers = new Admin();
  $teachers  = $_teachers->get_by_whereTE("Grade",$grade); 

  echo 'vvvvvvvvvvvvvvv';
  
  $username     = 'amro_dev';
  $password     = 'Amroezz1';  

  $MessageTXT   = $_POST['message'];
  $_unicode = implode(unpack('H*', iconv("UTF-8", "UCS-4BE", $MessageTXT)));
  $_unicodeMessage = substr($_unicode, 4);
  
  for ($i=0; $i <count($teachers) ; $i++) { 
    if (isset($teachers[$i]['Mobile'])) 
    {     
       $_response = SendSMS($_unicodeMessage , $teachers[$i]['Mobile']);        
    }
  }
  $_SISSION['sms_response'] = $_response;

  $_SESSION['sms_counter'] = $_SESSION['sms_counter']-count($teachers);
    require_once '../lib/params.php';
    require_once '../lib/sms.php';
    $_param = new params();
    $_sms   = new sms();
    $fileds = array(
      0 => 'content'
      );
    $values = array(
      0 => $_SESSION['sms_counter']
      );    
    echo '<br>#sms after = '.$_SESSION['sms_counter'];
    $_param->update($fileds,$values,count($values),'type','sms_counter');
    $date = date("Y-m-d");
    $_sms->saveSmsHistory(null,'to Teachers with Grade Number '.$grade,$MessageTXT,count($teachers),$date,'Admin');
  
  header("Location:../teachers.php");

}

///////////////////////////////////


if (isset($_POST['manual_sms'])) 
{   
  $mobile       = $_POST['mobile'];
  $MessageTXT   = $_POST['message'];
  $_unicode = implode(unpack('H*', iconv("UTF-8", "UCS-4BE", $MessageTXT)));
  $_unicodeMessage = substr($_unicode, 4);
  $_response = SendSMS($_unicodeMessage , $mobile);
  
  if ($_response == '<br><br>1906') {
    $_SESSION['smsresponse_message'] = 'Insufficient Credit ';
  }
  else if ($_response == '<br><br>1903') {
    //$_SESSION['smsresponse_message'] = 'Invalid Paramters';
  }
  else{
    echo $_SESSION['smsresponse_message'] = 'Success, Message Submitted Successfully ';
    
    //update($fileds,$values,$counter,$select,$id)
    $_SESSION['sms_counter'] = $_SESSION['sms_counter']-1;
    require_once '../lib/params.php';
    require_once '../lib/sms.php';
    $_param = new params();
    $_sms   = new sms();
    $fileds = array(
      0 => 'content'
      );
    $values = array(
      0 => $_SESSION['sms_counter']
      );    
    echo '<br>#sms after = '.$_SESSION['sms_counter'];
    $_param->update($fileds,$values,count($values),'type','sms_counter');
    $date = date("Y-m-d");
    $_sms->saveSmsHistory(null,$mobile,$MessageTXT,'1',$date,'Admin');
  }  
    
  
  
    
 header("Location:../sms.php");

}


 if (isset($_POST['sms_selected'])) {
   var_dump($_POST['list']);
   
   /*foreach ($_POST['list'] as $name) {
     echo $name .'<br>';
   }*/
 }   


if (isset($_POST['add_sms_event'])) 
{
    require_once '../lib/sms.php';
    $_sms = new SMS();

    $EventTitle   = $_POST['title'];
    $EventMessage = $_POST['message'];
    $EventDay     = $_POST['day'];
    $EventMonth   = $_POST['month'];
    $EventYear    = $_POST['year'];
    $id           = null;

    $_sms->save($id,$EventTitle,$EventMessage,$EventDay,$EventMonth,$EventYear);
    header("Location: ../sms_events.php");
}


if (isset($_POST['sms_type'])) 
{
    require_once '../lib/sms.php';
    $_sms = new SMS();

    $type   = $_POST['type'];    
    $id           = null;

    $_sms->saveSMSType($id,$type);
    header("Location: ../sms_types.php");
}


if (isset($_POST['sms_message'])) 
{
    require_once '../lib/sms.php';
    $_sms = new SMS();

    $type    = $_POST['type'];    
    $message = $_POST['message']; 

    $_sms->saveSmsMessage(null,$type,$message);
    header("Location: ../sms_messages.php");
}

if (isset($_POST['update_message'])) 
{
   require_once '../lib/sms.php';
   session_start();

   $_sms = new Sms();
   $type = $_POST['type'];
   $message = $_POST['message'];
    $id = $_SESSION['message_id'];
   $fileds = array(
      0 => 'sms_type',
      1 => 'sms_message'
    );
   $values = array(
      0 => $type,
      1 => $message
    );
   $counter = count($fileds);
   $_sms->update_SmsMessage($fileds,$values,$counter,'id',$id);
   header("Location: ../template_messages.php");
}

if (isset($_GET['dsms'])) {
  require_once '../lib/sms.php';
  require_once '../lib/Encryption.php';

  $_sms = new Sms();
  $_enc = new Encryption();
  $id = $_enc->decode($_GET['dsms']);
  $_sms->delete_SmsMessage('id' ,$id);
  header("Location: ../template_messages.php");
}



function SendSMS($_unicodeMessage,$mobile){
  
   $username     = 'amro_dev1';
   $password     = 'Amroezz1';  
   $url = 'http://smsmisr.com/api/send.aspx?username=amro_dev1&password='.$password.'&language=3&sender=SalamSchool&mobile='.$mobile.'&message='.$_unicodeMessage; 
   $url = str_replace(" ", '%20', $url);
   $curl = curl_init();  
   curl_setopt ($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec ($curl);
   curl_close ($curl);
   return $result;
}

echo '<center><h1>You Are Unauthorized Person !</h1></center>';


ob_flush();
?>