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

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-purple">
                            <span class="price"></span>
                            <span class="name">SMS Students</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_students.php"
                           class="btn bg-purple waves-effect waves-light w-md">Students</a>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-success">
                            <span class="price"></span>
                            <span class="name">SMS Teachers</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href=""
                           class="btn bg-success waves-effect waves-light w-md">Teachers</a>
                    </div>
                </div>
                

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="price_card text-center">
                        <div class="pricing-header bg-success">
                            <span class="price"></span>
                            <span class="name">SMS Settings</span>
                        </div>
                        <br>
                        <a style="color: #FFFFFF;" href="sms_messages.php"
                           class="btn bg-success waves-effect waves-light w-md">Message Settings</a>
                    </div>
                </div>

                

                


            </div>
            <!-- container -->


            <?php 
              if ($_GET['type'] == 'all') {
                  echo '<form class="cmxform form-horizontal tasi-form" id="manual_sms" name="manual_sms" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" >

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SMS For All Students</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                               
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
                                name="sms_all" id="sms_all" type="submit">Send
                        </button>

                    </div>


            </form>';


              }
              elseif ($_GET['type'] == 'AllTeachers') {
                  echo '<form class="cmxform form-horizontal tasi-form" id="allTeachers" name="allTeachers" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" >

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SMS For All Teachers</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                               
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
                                name="allTeachers" id="allTeachers" type="submit">Send
                        </button>

                    </div>


            </form>';
              }
              elseif ($_GET['type'] == 'TeachersByGrade') {
                  echo '<form class="cmxform form-horizontal tasi-form" id="TeachersByGrade" name="TeachersByGrade" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" >

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SMS For Teachers By Grade</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Grade</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="grade" id="grade">
                                          <option name="1" value="1">ابتدائى</option>
                                          <option name="2" value="2">اعدادى</option>
                                          <option name="3" value="3">بدون</option>
                                          <option name="4" value="4">ثانوى</option>
                                          <option name="5" value="5">رياض أطفال</option>
                                          <option name="6" value="6">عام</option>
                                          <option name="7" value="7">ابتدائي , اعدادي</option>
                                          <option name="8" value="8">اعدادي , ثانوي</option>
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
                                name="TeachersByGrade" id="TeachersByGrade" type="submit">Send
                        </button>

                    </div>


            </form>';
              }
            ?>

            

            

        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>