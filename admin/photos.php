<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
    $_SESSION['AlbumID'] = $_GET['photo'];
    $_SESSION['photosec'] = $_GET['sec'];
} else {
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
    <title>SSMS - Photos</title>

    <?php
    require "inc/head.php";
    require "inc/top_bar.php";
    require "inc/left_bar.php";
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <form action="funcs/gallery_functions.php" class="dropzone" name="add_photos" id="my-awesome-dropzone"
                  method="POST" enctype="multipart/form-data">
                <div class="fallback" id="file" name="file">
                    <input name="file" id="file" type="file" multiple="multiple"/>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">

                        <button class="btn btn-success waves-effect waves-light" name="add_photos" id="add_photos"
                                type="submit">Save
                        </button>
                        <button class="btn btn-default waves-effect" type="cancel">Cancel</button>
                    </div>
                </div>
            </form>
            <!-- container -->
        </div>
        <!-- content -->
        <?php require "inc/footer.php" ?>