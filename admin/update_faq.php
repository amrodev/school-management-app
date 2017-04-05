<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  
  require 'lib/Encryption.php';
  require 'lib/faq.php';

  $_enc = new Encryption(); 
  $_faq = new faq();

  $id = $_enc->decode($_GET['faq_name']);
  $_SESSION['id'] = $_GET['faq_name'];
  $search_by = 'id';
  $value = $id; 
  $faq = $_faq->get_faqdata($search_by,$value); 
  require_once 'funcs/auth.php';
      if($adminVeiwFAQ == 0)
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
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>SSMS - Users</title>
    
    <?php
      require "inc/head.php";
    ?>
    <?php
    //
      //$_SESSION['User_message'],$_SESSION['User_status'] 
      if (isset($_SESSION['User_status'])) 
      {
        if ($_SESSION['User_status'] == 'done') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify('."'success', 'top right', '','".$_SESSION['User_message']."')".'">';
            $_SESSION['User_status'] = 'false';
        }

        if ($_SESSION['User_status'] == 'fail') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify('."'error', 'top right', '','".$_SESSION['User_message']."')".'">';
            $_SESSION['User_status'] = 'false';
        }
        
      }
      else
      {
         //
      }
       
    ?>
    
    <?php
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page"  >
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    
                    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">FAQ</h3>
            </div>

            <div class="panel-body" align="left">
                                    <div class="form">
                                        <form class="cmxform form-horizontal tasi-form" id="add_faq" name="add_faq" method="post" enctype="multipart/form-data" action="funcs/faq_functions.php" novalidate="novalidate">
                                            
                                           

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">English Question</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control error" id="english_question" name="english_question" value="<?php echo $faq[0]['english_question'] ?>" type="text" required="" aria-required="true" aria-invalid="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">English Answer</label>
                                                <div class="col-lg-10">
                                                    <textarea name="english_answer" id="english_answer" class="wysihtml5 form-control"  rows="9"><?php echo $faq[0]['english_answer'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Arabic Question</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control error" id="arabic_question" name="arabic_question" type="textarea" required="" value="<?php echo $faq[0]['arabic_question'] ?>" aria-required="true" aria-invalid="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Arabic Answer</label>
                                                <div class="col-lg-10">
                                                    <textarea class="wysihtml5 form-control" name="arabic_answer" id="arabic_answer" rows="9"><?php echo $faq[0]['arabic_answer'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Categories</label>
                                                <div class="col-lg-10">
                                                   <input class="form-control error" id="cat" name="cat" type="text" required="" aria-required="true" value="<?php echo $faq[0]['category'] ?>" aria-invalid="true">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Attachment</label>
                                                <div class="col-lg-10">
                                            <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $faq[0]['Filepath'] ?>">
                                            
                                            </div>
                                            </div>
 <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_faq" id="update_faq" type="submit">Save</button>
                                 </div>
                             </div>
                                        </form>
                                    </div>
                                </div>
        </div>
         </div>
     </div>

                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       