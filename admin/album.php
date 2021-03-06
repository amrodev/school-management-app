<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
require_once 'funcs/auth.php';
      if($adminAddGal == 0)
      {
        header("Location: dashboard.php");
      }
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
    <title>SSMS - Add Album </title>

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
                                <h3 class="panel-title">Add New Album</h3>
                            </div>
                            <div class="panel-body" align="left">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="add_album" name="add_album"
                                          method="post" enctype="multipart/form-data"
                                          action="funcs/gallery_functions.php" novalidate="novalidate">

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Album Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="title_english"
                                                       name="title_english" type="text" required="" aria-required="true"
                                                       aria-invalid="true" placeholder="English Name">
                                                <input class="form-control error" id="title_arabic" name="title_arabic"
                                                       type="text" required="" aria-required="true" aria-invalid="true"
                                                       placeholder="Arabic Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Album Cover</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="photo" name="photo" type="file"
                                                       required="" aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Facebook Link</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="FacebookLink" name="FacebookLink"
                                                       type="text" required="" aria-required="true" aria-invalid="true"
                                                       placeholder="Facebook Link">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Section</label>
                                            <div class="col-lg-10">
                                                <select class="btn btn-success waves-effect waves-light" id="section"
                                                        name="section">
                                                    <option>All Sections</option>
                                                    <option>KG</option>
                                                    <option>Primary</option>
                                                    <option>Preparatory</option>
                                                    <option>Secondary</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light"
                                                        name="add_album" id="add_album" type="submit">Save
                                                </button>
                                                <button class="btn btn-default waves-effect" type="cancel">Cancel
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="height: 600px">

                </div>
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <?php require "inc/footer.php" ?>