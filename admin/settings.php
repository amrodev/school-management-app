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
    <title>SSMS - Web Site & Admin Settings</title>
    
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

                        <?php
                          if ($_SESSION['admin_level'] == 0) 
                          {
                            echo '<div class="col-sm-6 col-md-6 col-lg-3">';
                            echo '<div class="price_card text-center">';
                            echo '<div class="pricing-header bg-pink">';
                            echo '<span class="price"></span> ';
                            echo '<span class="name">Mips Settings</span>';
                            echo '</div><br>';
                            echo '<a style="color: #FFFFFF;" href="mips_settings.php" class="btn bg-pink waves-effect waves-light w-md">Settings</a>';
                            echo '</div></div>';
                          } 
                        ?>

                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       