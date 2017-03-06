<? 
ob_start(); 
header('Content-Type: text/html; charset=utf-8');  
?>


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
               <a style="color: #FFFFFF;" href="teachers.php"
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

                

                


            </div>
            <!-- container -->


            


            <form class="cmxform form-horizontal tasi-form" id="manual_sms" name="manual_sms" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" >

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Manual SMS</h3>
                    </div>

                    <div class="panel-body">
                          <?php
                          if (isset($_SESSION['smsresponse_message'])) {
                              if ($_SESSION['smsresponse_message']) {
                              if ($_SESSION['smsresponse_message'] == 'Success, Message Submitted Successfully ') {
                                  echo '<div class="alert alert-success">'.$_SESSION['smsresponse_message'].'</div>';
                              }
                              if ($_SESSION['smsresponse_message'] = 'Insufficient Credit ') {
                                  //echo '<div class="alert alert-warning">'.$_SESSION['smsresponse_message'].'</div>';
                              }
                          }
                          }
                          
                            
                          ?>
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Mobile Number</label>
                                    <div class="col-lg-10">
                                        <input class="form-control error" id="mobile" name="mobile" type="text"
                                               required="" aria-required="true" aria-invalid="true">
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
                                name="manual_sms" id="manual_sms" type="submit">Send
                        </button>

                    </div>


            </form>

            

        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>