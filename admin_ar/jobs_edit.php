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
    

    <title>SSMS - Jobs</title>
    
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
        <div class="panel panel-default" style="margin-right: 0px; height: 1450px;">
            <div class="panel-heading">
                <h3 class="panel-title">الوظائف</h3>

            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="add_job" name="add_job" method="post" enctype="multipart/form-data" action="funcs/jobs_functions.php" novalidate="novalidate">
                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2" style="padding-top: 0px;">المسمى الوظيفي</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="النص بالانجليزي .." id="title_english" name="title_english" type="text" required="" aria-required="true"></div>
                        </div>
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="النص بالعربي .." id="title_arabic" name="title_arabic" type="text" required="" aria-required="true"></div>
                        </div>


                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">نبذة مختصرة</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="short_description_english" name="short_description_english" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="short_description_arabic" name="short_description_arabic" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">شرح الوظيفة</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="long_description_english" name="long_description_english" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="long_description_arabic" name="long_description_arabic" required="" aria-required="true"></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">المهارات</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالانجليزي .." id="english_skills" name="english_skills" required="" aria-required="true"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="النص بالعربي .." id="arabic_skills" name="arabic_skills" required="" aria-required="true"></textarea>
                                </div>
                            </div>


                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">المرتب</label>
                        <div class="col-lg-8" style="padding-top: 15px; margin-right: -100px; ">
                            <input class="form-control" placeholder="" id="Salary" name="Salary" type="text" required="" aria-required="true"></div>
                        </div><br><br>

                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">العدد المطلوب للوظيفة</label>
                        <div class="col-lg-8"  style="padding-top: 15px; margin-right: -100px;">
                            <input class="form-control" placeholder="" id="Vacancies" name="Vacancies" type="text" required="" aria-required="true"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">تاريخ الايقاف</label>
                        <div class="col-lg-8"  style="padding-top: 15px; margin-right: -100px;">
                            
                           <input type="text" id="datepicker" name="datepicker"></p>
                        </div>  
                        </div>



                        <div class="form-group"> 
                            <label for="cname" class="control-label col-lg-2">رقم الوظيفة</label>
                        <div class="col-lg-8"  style="padding-top: 15px; margin-right: -100px;">
                            <input class="form-control" placeholder="" id="Ref" name="Ref" type="text" required="" aria-required="true">
                        <br>
                        </div>
                        </div>

                      
                            <div class="form-group" align="center">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-default waves-effect" type="cancel">تراجع</button>
                                    <button class="btn btn-success waves-effect waves-light" name="add_job" id="add_job" type="submit">حفظ</button>
                                    
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