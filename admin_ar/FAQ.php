<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  
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
    <div class="col-sm-22" align="right" style=" margin-top:0px; margin-right:0px;">
        <div class="panel panel-default" style="margin-right: 0px; height: 1250px;">
            <div class="panel-heading">
                <h4 class="panel-title">الاسئلة المتكررة</h4>
            </div>

            <div class="panel-body">
                                    <div class="form"   >
                                        <form class="cmxform form-horizontal tasi-form" id="add_faq" name="add_faq" method="post" enctype="multipart/form-data" action="funcs/faq_functions.php" novalidate="novalidate">
                                            
                                           

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">السؤال بالانجليزي</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control error" id="english_question" name="english_question" type="text" required="" aria-required="true" aria-invalid="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">الاجابة بالانجليزي</label>
                                                <div class="col-lg-10">
                                                    <textarea name="english_answer" id="english_answer" class="wysihtml5 form-control" rows="9"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">السؤال بالعربي</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control error" id="arabic_question" name="arabic_question" type="textarea" required="" aria-required="true" aria-invalid="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">الاجابة بالعربي</label>
                                                <div class="col-lg-10">
                                                    <textarea class="wysihtml5 form-control" name="arabic_answer" id="arabic_answer" rows="9"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">الفئة</label>
                                                <div class="col-lg-10">
                                                   <input class="form-control error" id="cat" name="cat" type="text" required="" aria-required="true" aria-invalid="true">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">المرفقات</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control error" name="fileToUpload" id="fileToUpload" type="file" required="" aria-required="true" aria-invalid="true">
                                            <br>
                                            
                                            </div>
                                            </div>

                               <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10" align="center">
                                    <button class="btn btn-success waves-effect waves-light" name="add_faq" id="add_faq" type="submit">حفظ</button>
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