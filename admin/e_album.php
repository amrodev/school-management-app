<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
    require 'lib/gallery.php';
    require 'lib/encryption.php';
    $_album = new Gallery();
    $_enc = new Encryption();

    $enc_id = $_GET['name'];
    $id = $_enc->decode($enc_id);
    $select = '*';
    $where = ' id=' . $id;
    $album = $_album->get_by_where('id',$id);
    $_SESSION['album_id'] = $id;
    require_once 'funcs/auth.php';
      if($adminEditGal == 0)
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
                                    <form class="cmxform form-horizontal tasi-form" id="update_album"
                                          name="update_album" method="post" enctype="multipart/form-data"
                                          action="funcs/gallery_functions.php?id=<?php echo $id;?>" novalidate="novalidate">

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Album Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="title_english"
                                                       value="<?php echo $album[0]['title_english']; ?>"
                                                       name="title_english" type="text" required="" aria-required="true"
                                                       aria-invalid="true" placeholder="English Name">
                                                <input class="form-control error" id="title_arabic"
                                                       value="<?php echo $album[0]['title_arabic']; ?>"
                                                       name="title_arabic" type="text" required="" aria-required="true"
                                                       aria-invalid="true" placeholder="Arabic Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Album Cover</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="photo" name="photo" type="file"
                                                       required="" aria-required="true" aria-invalid="true">
                                                <br>
                                                <img width="300" height="180"
                                                     src="../<?php echo $album[0]['photo']; ?>">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Section</label>
                                            <div class="col-lg-10">
                                                <select class="btn btn-success waves-effect waves-light" id="section"
                                                        name="section">
                                                    <?php
                                                    switch ($album[0]['section']) {
                                                        case 'All Sections':
                                                            echo '<option>All Sections</option>';
                                                            echo '<option>KG</option>';
                                                            echo '<option>Primary</option>';
                                                            echo '<option>Preparatory</option>';
                                                            echo '<option>Secondary</option>';
                                                            break;
                                                        case 'KG':
                                                            echo '<option>KG</option>';
                                                            echo '<option>All Sections</option>';
                                                            echo '<option>Primary</option>';
                                                            echo '<option>Preparatory</option>';
                                                            echo '<option>Secondary</option>';
                                                            break;
                                                        case 'Primary':
                                                            echo '<option>Primary</option>';
                                                            echo '<option>All Sections</option>';
                                                            echo '<option>KG</option>';
                                                            echo '<option>Preparatory</option>';
                                                            echo '<option>Secondary</option>';
                                                            break;
                                                        case 'Preparatory':
                                                            echo '<option>Preparatory</option>';
                                                            echo '<option>Secondary</option>';
                                                            echo '<option>All Sections</option>';
                                                            echo '<option>KG</option>';
                                                            echo '<option>Primary</option>';
                                                            break;
                                                        case 'Secondary':
                                                            echo '<option>Secondary</option>';
                                                            echo '<option>All Sections</option>';
                                                            echo '<option>KG</option>';
                                                            echo '<option>Primary</option>';
                                                            echo '<option>Preparatory</option>';
                                                            break;


                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light"
                                                        name="update_album" id="update_album" type="submit">Save
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