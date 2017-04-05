<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  require 'lib/sms.php';
  require 'lib/Encryption.php';
  
  $_enc = new Encryption(); 
  $_sms = new Sms();

  $id = $_enc->decode($_GET['sms']);
  $search_by = 'id';
  $_SESSION['message_id'] =  $id;
  $value = $id; 
  $sms = $_sms->get_SmsMessageData($search_by,$value);
  require_once 'funcs/auth.php';
      if($adminVeiwSMS == 0)
      {
        header("Location: dashboard.php");
      } 
}
else{
  header("Location: index.php");
  
}
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from moltran.coderthemes.com/purple/blank.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 30 Jan 2016 12:08:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    

    <title>SSMS - SMS Message Edit</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                  <a href="jobs.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i class="md md-edit"> </i> Edit Jobs</a>
                  <br><br>
                    <!-- Page-Title -->
                    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">SMS Template Message</h3>

            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="update_message" name="update_message" method="post" enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">
                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">SMS Type *</label>
                        <div class="col-lg-10">
                        <?php
                          $sms_types = $_sms->get_allTypes();
                          if (isset($sms_types)) {
                            echo '<select class="form-control" name="type" id="type"  class="control-label col-lg-2">';
                            $type = $sms[0]['sms_type'];
                            echo '<option name="'.$type.'" id="'.$type.'">'.$type.'</option>';
                           for ($i=0; $i <count($sms_types) ; $i++) {
                              if ($sms_types[$i]['type'] != $type) {
                                echo '<option name="'.$sms_types[$i]['type'].'" id="'.$sms_types[$i]['type'].'">'.$sms_types[$i]['type'].'</option>';
                              }                                
                            }
                            echo '</select>';
                          }
                          
                        ?>
                            </div>
                        </div>
                        


                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">SMS Message</label>
                                <div class="col-lg-10"><textarea class="form-control"  placeholder="English text .." id="message" name="message" required="" aria-required="true"><?php echo $sms[0]['sms_message'] ?></textarea>
                                </div>
                            </div>

                      
                      
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_message" id="update_message" type="submit">Save</button>
                                </div>
                             </div>
                            
                    

                         </form>


                     </div>
                 </div>
             </div>
         </div>
     </div>



 



            <!-- content -->
<?php require "inc/footer.php" ?>       