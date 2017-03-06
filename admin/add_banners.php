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
                        <div class="panel panel-default">
                           <div class="panel-heading">
                            <?php 
                             if (isset($_GET['b'])) 
                             {
                               $enc   = new Encryption();
                               $title = $enc->decode($_GET['b']);
                               $_SESSION['b'] = $_GET['b'];
                             }
                            ?>
                            <h3 class="panel-title">Banners - <?php echo $title; ?></h3>
                          </div>

                          <div class="panel-body" align="left">
                            <div class="form">
                             
                             <form class="cmxform form-horizontal tasi-form" id="add_new_slide" name="add_new_slide" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?title=<?php echo $title ?>" novalidate="novalidate">
                              
                                <div class="form-group">
                                  <label for="cname" class="control-label col-lg-2">Add New Slide</label>
                                  <div class="col-lg-10">
                                     
                                    <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">                                     
                                  </div>
                                </div>                             
                                <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="add_new_slide" id="add_new_slide" type="submit">Save</button>
                                 </div>
                             </div>
                             </form>

                             <br>


                              <br><br>

                              <?php
                                require 'lib/banners.php' ;
                                $_ban      = new Banners();
                                $search_by = 'page'; 
                                $value     = $title;
                                $banners = $_ban->GetBanners($search_by,$value);
                                //var_dump($banners);
                                $counter = count($banners);
                                for ($i=0; $i <$counter ; $i++) 
                                {
                                  echo '<form class="cmxform form-horizontal tasi-form" id="update_banner" name="update_banner" method="post" enctype="multipart/form-data" action="funcs/banner_functions.php?page='.$title.'&id='.$banners[$i]['id'].'" novalidate="novalidate">'; 
                                  echo '<div class="form-group">
                                          <div class="col-lg-10">                                     
                                            <input class="form-control error" id="photo" name="photo" type="file" required="" aria-required="true" aria-invalid="true">                                     
                                            <img src="../'.$banners[$i]['image'].'" width="785" height="150">
                                          </div>
                                        </div>';
                                  $enc_id = $enc->encode($banners[$i]['id']) ;     
                                  echo '<div class="col-lg-offset-2 col-lg-10">
                                         <button class="btn btn-success waves-effect waves-light" name="update_banner" id="update_banner" type="submit">Save</button>
                                         <a href="funcs/banner_functions.php?delban='.$enc_id.'" class="btn btn-default waves-effect">Delete</a>
                                        </div>';      
                                  echo '</form>';      
                                }
                              ?>

                              <br><br>
                              

                              

                            </div>
                          </div>
                          
                      </div>
                     </div>

                    
                    
                    
                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       