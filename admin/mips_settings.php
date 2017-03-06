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
                <div class="container">
                   
                   <div class="row pricing-plan">
                    <div class="col-md-12">
                      <div class="row">
                        
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

                    
                </div>
                <!-- container -->


                
               <form class="cmxform form-horizontal tasi-form" id="update_web_settings" name="update_web_settings" method="post" enctype="multipart/form-data" action="funcs/params.php" novalidate="novalidate">
                <div class="panel panel-default">
                  <div class="panel-heading">
                  	<h3 class="panel-title">MIPS Settings</h3>
                  </div>
                  <div class="panel-body">


                  	<div class="row">
                      <div class="col-lg-12">



                      </div>
                    </div>

                    <br><br><br>

               </form>

                  	
                  </div>
                </div>


            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       