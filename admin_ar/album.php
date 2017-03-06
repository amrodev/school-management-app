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
    <title>SSMS - Add Album </title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  <div class="row" align="">
                      <div class="col-sm-11">
                        <div class="panel panel-default" align="right">
                          <div class="panel-heading" >
                            <h3 class="panel-title">اضافة البوم صور جديد</h3>
                          </div>
                          <div class="panel-body" align="right">
                            <div class="form" >
                              <form class="cmxform form-horizontal tasi-form" id="add_album" name="add_album" method="post" enctype="multipart/form-data" action="funcs/gallery_functions.php" novalidate="novalidate">
                                
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">اسم الالبوم</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="title_english" name="title_english" type="text" required="" aria-required="true" aria-invalid="true" placeholder="النص بالانجليزي">
                                    <br>
                                    <input class="form-control error" id="title_arabic" name="title_arabic" type="text" required="" aria-required="true" aria-invalid="true" placeholder="النص بالعربي">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صورة الالبوم</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">Facebook Link</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="FacebookLink" name="FacebookLink" type="text" required="" aria-required="true" aria-invalid="true" placeholder="Facebook Link">
                                  </div>
                                </div>

                                
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">المرحلة</label>
                                  <div class="col-lg-10" align="right">
                                    <select class="btn btn-success waves-effect waves-light" id="section" name="section">
                                      <option>جميع المراحل</option>
                                      <option>التمهيدي</option>
                                      <option>الابتدائي</option>   
                                      <option>الاعدادي</option> 
                                      <option>الثانوي</option>                                     
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10" align="center">
                                    <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                    <button class="btn btn-success waves-effect waves-light" name="add_album" id="add_album" type="submit">حفظ</button>
                                     
                                 </div>
                             </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>

                    
                    <div style="height: 600px">

                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       