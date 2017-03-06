<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require 'lib/banners.php';
  $_ban = new Banners();
  $banners = $_ban->get_all();
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
    <title>SSMS - Banners</title>
    
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
                        <div class="panel panel-default" style="height: 10700px;width: 850px;" align="right">
                          <div class="panel-heading" >
                            

                          </div>  
                          <div class="panel-body" align="right">
                            <div class="form" >

                              
                              <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=HomePage" novalidate="novalidate">
                              
                                <div class="form-group" >
                                  <label for="cname" class="control-label col-lg-2">الصفحة الرئيسية</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                    <?php echo '<img src="../'.$banners[0][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>
                              

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Mission" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة الرسالة</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                    <?php echo '<img src="../'.$banners[1][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Vission" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة الرؤية</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[2][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Career" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة الوظائف</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[3][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Proposals" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة الاقتراحات</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                     <?php echo '<img src="../'.$banners[4][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Contact_us" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة التواصل</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[5][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=News" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة الاخبار</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[6][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_Home" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">الصفحة الرئيسية لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[7][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_Home" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">الصفحة الرئيسية لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[8][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_Home" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">الصفحة الرئيسية لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[9][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_Home" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">الصفحة الرئيسية لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[10][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_Subjects" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة المواد لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[11][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_Subjects" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة المواد لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[12][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_Subjects" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة المواد لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[13][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_Subjects" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">صفحة المواد لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[14][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_Grades" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الدرجات لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[15][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_Grades" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الدرجات لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[16][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_Grades" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الدرجات لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[17][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_Grades" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الدرجات لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[18][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_Gallery" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الابومات الصور لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[19][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_Gallery" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الابومات الصور لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[20][2].'"  width="785" height="150">'; ?>
                                 </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_Gallery" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الابومات الصور لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[21][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_Gallery" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الابومات الصور لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[22][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_Birthdays" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة اعياد الميلاد لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[23][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_Birthdays" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة اعياد الميلاد لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[24][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_Birthdays" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة اعياد الميلاد لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[25][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_Birthdays" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة اعياد الميلاد لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[26][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=KG_FAQ" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الأسئلة المتكررة لمرحلة KG</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[27][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Primary_FAQ" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الأسئلة المتكررة لمرحلة الابتدائي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                 <?php echo '<img src="../'.$banners[28][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Preparatory_FAQ" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الأسئلة المتكررة لمرحلة الاعدادي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[29][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                 </div>
                             </div>
                             </form>

                             <form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page=Secondary_FAQ" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-3">صفحة الأسئلة المتكررة لمرحلة الثانوي</label>
                                  <div class="col-lg-10">
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">
                                  <?php echo '<img src="../'.$banners[30][2].'"  width="785" height="150">'; ?>
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">حفظ</button>
                                     <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
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
             <br><br><br> 
                 <br><br><br> 
            <!-- content -->
<?php require "inc/footer.php" ?>       