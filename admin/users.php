<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {

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
    <title>SSMS - Users</title>

    <?php
    require "inc/head.php";
    require_once 'funcs/auth.php';
      if($adminVeiwUsers == 0)
      {
        header("Location: dashboard.php");
      }
    ?>
    <?php
    //
    //$_SESSION['User_message'],$_SESSION['User_status']
    if (isset($_SESSION['User_status'])) {
        if ($_SESSION['User_status'] == 'done') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify(' . "'success', 'top right', '','" . $_SESSION['User_message'] . "')" . '">';
            $_SESSION['User_status'] = 'false';
        }

        if ($_SESSION['User_status'] == 'fail') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify(' . "'error', 'top right', '','" . $_SESSION['User_message'] . "')" . '">';
            $_SESSION['User_status'] = 'false';
        }

    } else {
        //
    }

    ?>

    <?php
    require "inc/top_bar.php";
    require "inc/left_bar.php";
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <a href="edit_users.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i
                        class="md md-edit"> </i> Edit User</a>
                <br><br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Users</h3>
                            </div>

                            <div class="panel-body" align="left">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="add_user" name="add_user"
                                          method="post" enctype="multipart/form-data" action="funcs/user_functions.php"
                                          novalidate="novalidate">

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Username</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="username" name="username"
                                                       type="text" required="" aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">English Full Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="english_name" name="english_name"
                                                       type="text" required="" aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Arabic Full Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="arabic_name" name="arabic_name"
                                                       type="text" required="" aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Password</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="password" name="password"
                                                       type="password" required="" aria-required="true"
                                                       aria-invalid="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Confirm Password</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="confirm_password"
                                                       name="confirm_password" type="password" required=""
                                                       aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input class="form-control error" id="email" name="email" type="email"
                                                       required="" aria-required="true" aria-invalid="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2">User Level</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" id="level" name="level">
                                                    <option value ="1">Super Admin</option>
                                                    <option value ="2">Admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light" name="add_user"
                                                        id="add_user" type="submit">Save
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

            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <?php require "inc/footer.php" ?>