<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  
  require 'lib/encryption.php';
  require 'lib/videos.php';

  $_enc = new Encryption();
  $_video = new Videos();
  $enc_id = $_GET['video_name'];
  $id  = $_enc->decode($enc_id);
  $_SESSION['video_name'] = $id; 
  $search_by = 'id';
  $value = $id;
  $video = $_video->get_videodata($search_by,$value);
  $_SESSION['v_img'] = $video[0]['img'];
  
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
    <title>SSMS - Videos</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">



                                      <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Videos</h3>
                <p class="panel-title" style="float:right; margin-top:-25px; color:green;"><a href="all_Videos.php">Edit Videos</a></p>
            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="edit_video" name="edit_video" method="post" enctype="multipart/form-data" action="funcs/videos_functions.php" novalidate="novalidate">
                    



                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Video Title *</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="English text .." value="<?php echo $video[0]['title_english']; ?>" id="title_english" name="title_english" type="text" required="" aria-required="true"></div>
                        </div>
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Arabic text .." id="title_arabic" value="<?php echo $video[0]['title_arabic']; ?>" name="title_arabic" type="text" required="" aria-required="true"></div>
                        </div>


                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Video Description *</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="English text .."  id="description_english" name="description_english" required="" aria-required="true"><?php echo $video[0]['description_english']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="Arabic text .."  id="description_arabic" name="description_arabic" required="" aria-required="true"><?php echo $video[0]['description_arabic']; ?></textarea>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Video Image *</label>
                                <div class="col-lg-10">
                                    <?php echo '<img widht="200" height="120" src="'.$video[0]['img'].'" />'; ?>
                                	<input class="form-control" placeholder="English text .." id="img" value="<?php echo $video[0]['img']; ?>" name="img" type="text" required="" aria-required="true">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Video Embaded Code *</label>
                                <div class="col-lg-10"><textarea class="form-control" placeholder="English text .."  id="embaded_code"  name="embaded_code" type="text" required="" aria-required="true"><?php echo $video[0]['embaded_code']; ?></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="edit_video" id="edit_video" type="submit">Save</button>
                                     <button class="btn btn-default waves-effect" type="cancel">Cancel</button>
                                 </div>
                             </div>
                            




                    
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       