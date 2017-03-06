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
    <title>SSMS - Web Site Settings</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>


         <div class="content-page">

            <!-- Start content -->
            <div class="content">
            <div class="col-sm-6 col-md-6 col-lg-3">
                          <div class="price_card text-center">
                            <div class="pricing-header bg-purple">
                              <span class="price"></span> 
                              <span class="name">Website Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="website_settings.php" class="btn bg-purple waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                          <div class="price_card text-center">
                            <div class="pricing-header bg-success">
                              <span class="price"></span> 
                              <span class="name">Admin Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="admin_settings.php" class="btn bg-success waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>
                        <br><br><br><br><br><br><br><br>
                <div class="container">
                   
                   <div class="row pricing-plan">
                     
                <!-- container -->

                <?php
                      require 'lib/params.php';
                      $_params = new Params();                      
                      $parms = $_params->get_all();
                      //var_dump($parms);
                      
                      if ($parms[12]['content'] == 0) 
                      {
                        $best_grades = '';
                      }
                      if ($parms[12]['content'] == 1) 
                      {
                        $best_grades = 'checked=""';
                      }

                      if ($parms[13]['content'] == 0) 
                      {
                        $star = '';
                      }
                      if ($parms[13]['content'] == 1) 
                      {
                        $star = 'checked=""';
                      }

                      if ($parms[14]['content'] == 0) 
                      {
                        $videos = '';
                      }
                      if ($parms[14]['content'] == 1) 
                      {
                        $videos = 'checked=""';
                      }

                      if ($parms[15]['content'] == 0) 
                      {
                        $Galleries = '';
                      }
                      if ($parms[15]['content'] == 1) 
                      {
                        $Galleries = 'checked=""';
                      }

                      if ($parms[16]['content'] == 0) 
                      {
                        $FAQ = '';
                      }
                      if ($parms[16]['content'] == 1) 
                      {
                        $FAQ = 'checked=""';
                      }
                      

                      


                    ?>


                  	
                  </div>
                   <form class="cmxform form-horizontal tasi-form" id="update_web_settings" name="update_web_settings" method="post" enctype="multipart/form-data" action="funcs/params.php" novalidate="novalidate">
                <div class="panel panel-default">
                  <div class="panel-heading" align="right" style="width: 784px;">
                    <h3 class="panel-title">اعدادات الموقع</h3>
                  </div>
                  <div class="panel-body" align="right">
                         

                    <div class="row" align="right">
                      
                      <div class="col-lg-12" style="padding-right:5px;" align="right">
                        <div class="checkbox checkbox-primary" align="right">
                          <input name="best_grades" id="best_grades" type="checkbox" <?php echo $best_grades ?>>
                          <label for="checkbox-h">اظهار افضل الطلاب</label>
                        </div>
                      </div>

                      <div class="col-lg-12" style="padding-right:5px;" align="right">
                        <div class="checkbox checkbox-primary" align="right">
                          <input name="star" id="star" type="checkbox" <?php echo $star ?>>
                          <label for="checkbox-h">اظهار نجم الاسبوع والشهر</label>
                        </div>
                      </div>

                      <div class="col-lg-12" style="padding-right:5px;" align="right">
                        <div class="checkbox checkbox-primary" align="right">
                          <input name="videos" id="videos" type="checkbox" <?php echo $videos ?>>
                          <label for="checkbox-h">اظهار الفديوهات</label>
                        </div>
                      </div>

                      <div class="col-lg-12" style="padding-right:5px;" align="right">
                        <div class="checkbox checkbox-primary" align="right">
                          <input name="Galleries" id="Galleries" type="checkbox" <?php echo $Galleries ?>>
                          <label for="checkbox-h">اظهار البوم الصور</label>
                        </div>
                      </div>

                      <div class="col-lg-12" style="padding-right:5px;" align="right">
                        <div class="checkbox checkbox-primary" align="right">
                          <input name="FAQ" id="FAQ" type="checkbox" <?php echo $FAQ ?>>
                          <label for="checkbox-h">اظهار الاسئلة المتكررة</label>
                        </div>
                      </div>

                      

                    <br>
                    <button style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light" name="update_web_settings" id="update_web_settings" type="submit">Save</button>

               </form>
                </div>


            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       