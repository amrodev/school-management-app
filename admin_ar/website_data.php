<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
     
     
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
    <title>SSMS - Dashboard</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                   



<div class="row">
    <div class="col-sm-22" align="right" style=" margin-top:0px; margin-right:0px;">
        <div class="panel panel-default" style="margin-right: 0px; height: 1400px;">
            <div class="panel-heading">
                <h4 class="panel-title">بيانات الموقع</h4>
            </div><div class="panel-body">
            <?php 
              require 'lib/params.php';
              $_param = new Params();
              $params = $_param->get_all();
              $_SESSION['Params'] = $params;
            ?>
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="website_data" method="post" name="website_data" enctype="multipart/form-data" action="funcs/params.php" novalidate="novalidate">
                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">الرسالة</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="message_arabic" name="message_arabic" required="" aria-required="true"><?php echo $params[1]['content']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="message_english" name="message_english" required="" aria-required="true"><?php echo $params[2]['content']; ?></textarea>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">الرؤية</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="vission_arabic" name="vission_arabic" required="" aria-required="true"><?php echo $params[3]['content']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="vission_english" name="vission_english" required="" aria-required="true"><?php echo $params[10]['content']; ?></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">التواصل</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="contacts_arabic" name="contacts_arabic" required="" aria-required="true"><?php echo $params[4]['content']; ?></textarea>
                                </div>
                            </div>
<div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="contacts_english" name="contacts_english" required="" aria-required="true"><?php echo $params[5]['content']; ?></textarea>
                                </div>
                            </div>

<div class="form-group">
                        <label for="cname" class="control-label col-lg-2">قناة اليوتيوب</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="youtube_url" name="youtube_url" type="text" required="" aria-required="true" value="<?php echo $params[6]['content']; ?>"></div>
                        </div>

                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">الفيسبوك</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="facebook_url" name="facebook_url" type="text" required="" aria-required="true" value="<?php echo $params[7]['content']; ?>"></div>
                        </div>

                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">تويتر</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="twitter_url" name="twitter_url" type="text" required="" aria-required="true" value="<?php echo $params[8]['content']; ?>"></div>
                        </div>

                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">انستجرام</label>
                        <div class="col-lg-10" >
                            <input class="form-control" id="instgram_url" name="instgram_url" type="text" required="" aria-required="true" value="<?php echo $params[9]['content']; ?>"></div>
                       
                        </div>


                            <div class="form-group">
                               <br><br> <br><br>
                                <div class="col-lg-offset-2 col-lg-10" align="center">
                                    <button class="btn btn-success waves-effect waves-light" type="submit" id="website_data" name="website_data">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>

                             </div>
                             <br> <br>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>


                            
                    <!-- Pls Remove -->
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       