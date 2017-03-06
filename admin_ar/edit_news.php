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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>SSMS - News</title>
    
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
    <div class="col-sm-22" align="right" style="  margin-right:0px; ">
        <div class="panel panel-default" style="margin-right: 0px; height: 1050px;">
            <div class="panel-heading">
                <h3 class="panel-title">اضافة خبر</h3>
            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="add_news" name="add_news" method="post" enctype="multipart/form-data" action="funcs/news_functions.php" novalidate="novalidate">
                    
                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">عنوان الخبر</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="English text .." id="title_english" name="title_english" type="text" required="" aria-required="true"></div>
                        </div>
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Arabic text .." id="title_arabic" name="title_arabic" type="text" required="" aria-required="true"></div>
                  </div>

                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">الصورة</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="photo" name="photo" type="file" required="" aria-required="true">
                        </div>
                        </div>
                        <div class="form-group">

                  </div>


                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">نبذة مختصرة</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="English text .." id="short_description_english" name="short_description_english" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="Arabic text .." id="short_description_arabic" name="short_description_arabic" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">شرح مفصل</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="English text .." id="long_description_english" name="long_description_english" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="Arabic text .." id="long_description_arabic" name="long_description_arabic" required="" aria-required="true"></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group" >
                                <div class="col-lg-offset-2 col-lg-10" align="center" style="padding-top: 20px;">
                                  <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                    <button class="btn btn-success waves-effect waves-light" name="add_news" id="add_news" type="submit">حفظ</button>
                                     
                                 </div>
                             </div>
                            


















                          

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