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
    <title>SSMS - Dashboard</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container" align="right">
                  
                  
                  <a href="edit_albums.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-5">تعديل البوم</a>
                  <a href="album.php" class="btn btn-success btn-rounded waves-effect waves-light m-b-5" style="margin-right: 30px;">اضافة البوم</a><br><br>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="portfolioFilter">
                        <a href="#" data-filter="*" class="current">الكل</a>
                        <a href="#" data-filter=".KG" class="">تمهيدي</a>
                        <a href="#" data-filter=".Primary" class="">ابتدائي</a>
                        <a href="#" data-filter=".Preparatory" class="">اعدادي</a> 
                        <a href="#" data-filter=".Secondary" class="">ثانوي</a>
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="row port">
                    <div class="portfolioContainer" align="right" style="position: relative; height: 792px; margin-right: -300px; width: 1000px;">
                    
                     <?php
                       require 'lib/gallery.php';
                       require 'lib/encryption.php';
                       $_album = new Gallery();
                       $_enc = new Encryption();

                       $albums = $_album->get_all_albums();
                       $counter = count($albums);
                       for ($i=0; $i <$counter ; $i++) 
                       {
                          $name = $_enc->encode($albums[$i]['title_english']);
                          $sec = $_enc->encode($albums[$i]['section']);  
                          echo '<div class="col-sm-6 col-lg-3 col-md-4 '.$albums[$i]['section'].'" style="position: absolute; left: 0px; top: 0px;">';
                          echo '<div class="gal-detail thumb">';
                          echo '<a href="photos.php?photo='.$name.'&sec='.$sec.'" class="" title="'.$albums[$i]['title_english'].'">';
                          echo '<img width="232" height="155" src="../'.$albums[$i]['photo'].'" class="thumb-img" alt="work-thumbnail">';
                          echo '</a><h4>'.$albums[$i]['title_english'].'</h4></div></div>';
                       } 
                     ?>  
                      
                    </div>
                  </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       