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
        <title>SSMS - Attendance</title>
        <link href="assets/plugins/notifications/notification.css" rel="stylesheet">
        <?php
        if (isset($_SESSION['smsresult'])) {

        } else {
            //$_SESSION['smsstatus']   = '';
            //$_SESSION['smssmessage'] = '';
            //$_SESSION['smssHeadr']   = '';
            //$.Notification.notify('success','left bottom', 'successfully', 'Success, Message Submitted Successfully')
        }
        ?>

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
             <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-info"><i class="ion-android-user-menu"></i></i></span>
                <div class="mini-stat-info text-right text-dark"><br>
               <a style="color: #FFFFFF;" href="sms_students.php"
                           class="btn bg-purple waves-effect waves-light w-md">Students</a>
                </div>
                </div>
                </div>


                

                <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-info"><i class="fa fa-users"></i></span>
                <div class="mini-stat-info text-right text-dark"><br>
               <a style="color: #FFFFFF;" href="#"
                           class="btn bg-purple waves-effect waves-light w-md">Teachers</a>
                </div>
                </div>
                </div>
                

                


                <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-info"><i class="md  md-settings"></i></span>
                <div class="mini-stat-info text-right text-dark"><br>
               <a style="color: #FFFFFF;" href="sms_messages.php"
                           class="btn bg-purple waves-effect waves-light w-md">SMS Settings</a>
                </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-info"><i class="md md-textsms"></i></span>
                <div class="mini-stat-info text-right text-dark">
                <span class="counter text-dark"><?php echo $_SESSION['sms_counter']; ?></span>Remaining SMSs
                </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-purple">
                            <span class="price"></span>
                            <span class="name">SMS Types</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_types.php"
                           class="btn bg-purple waves-effect waves-light w-md">Types</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-success">
                            <span class="price"></span>
                            <span class="name">SMS Messages</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_messages.php"
                           class="btn bg-success waves-effect waves-light w-md">Events</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-success">
                            <span class="price"></span>
                            <span class="name">SMS Events</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_events.php"
                           class="btn bg-success waves-effect waves-light w-md">Events</a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-success">
                            <span class="price"></span>
                            <span class="name">SMS History</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_history.php"
                           class="btn bg-success waves-effect waves-light w-md">History</a>
                    </div>
                </div>

                


            </div>
            <!-- container -->


            <?php

            ?>


            <form class="cmxform form-horizontal tasi-form" id="sms_message" name="sms_message" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add SMS Message to Type</h3>
                        <a href="template_messages.php" style="float:right; margin-top:-10px;">View All Template Messages</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Type</label>
                                    <div class="col-lg-10">
                                        <select name="type" id="type">
                                            <?php
                                               
                                               require_once 'lib/sms.php';
                                               $_sms = new SMS();

                                               $sms = $_sms->get_allTypes();
                                               if (isset($sms)) {
                                                   for ($i=0; $i <count($sms) ; $i++) { 
                                                      echo '<option name="'.$sms[$i]['type'].'" id="'.$sms[$i]['type'].'">'.$sms[$i]['type'].'</option>';
                                                   }
                                               }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Message</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="message" id="message"></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <br>
                        <button style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="sms_message" id="sms_message" type="submit">Save
                        </button>

                    </div>


            </form>


        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>