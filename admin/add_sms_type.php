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
    <title>SSMS - Attendance</title>
    <link href="assets/plugins/notifications/notification.css" rel="stylesheet">
    
    
    <body onload="">
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
                              <span class="name">SMS Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="" class="btn bg-purple waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                          <div class="price_card text-center">
                            <div class="pricing-header bg-success">
                              <span class="price"></span> 
                              <span class="name">Add SMS Event</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="sms_events.php" class="btn bg-success waves-effect waves-light w-md">Add Event</a>
                          </div>
                        </div>




                    
                </div>
                <!-- container -->


                <?php
                     
                ?>


            <form class="cmxform form-horizontal tasi-form" id="sms_type" name="sms_type" method="post" enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">
               
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Add New SMS Type</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">

                      <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">SMS Type</label>
                        <div class="col-lg-10">
                          <input class="form-control error" id="type" name="type" type="text" required="" aria-required="true" aria-invalid="true">
                        </div>
                      </div>
                      
                        </div>
                      </div>


<br>
                    <button style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light" name="sms_type" id="sms_type" type="submit">Save</button>


                      </div>
                    </div>
                    
                  </div>

                    
               </form>

                   
                    
                </div>

                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       