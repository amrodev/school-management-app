<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {

    require_once 'funcs/auth.php';
      if($adminVeiwSMS == 0)
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


            
               

<div class="col-md-12">
            


            <?php

            ?>


               <div class="panel panel-default">
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <table class="table table-bordered table-striped dataTable no-footer"  id="datatable-editable"   role="grid" aria-describedby="datatable-editable_info">
                                <thead>
                                  <tr role="row">
                                  
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Job Title: activate to sort column descending" aria-sort="ascending" >
                                        Date
                                    </th>
                                    
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Send To
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Number of Smss
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Details
                                    </th>
                                    

                                    
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  require_once 'lib/sms.php';
                                  $_history = new SMS();
                                  $sms_history = $_history->get_smsHistory();
                                  for ($i=0; $i <count($sms_history) ; $i++) { 
                                      echo '<tr class="gradeA odd" role="row">';
                                      echo '<td>'.$sms_history[$i]['date'].'</td>';
                                      echo '<td>'.$sms_history[$i]['smsto'].'</td>';
                                      echo '<td>'.$sms_history[$i]['num'].'</td>';
                                      echo '<td>'.$sms_history[$i]['details'].'</td>';
                                      echo '</tr>';
                                  }
                                ?>
                                    
                                     
                                   
                                </tbody>
                            </table>


                            </div></div>
                        </div>
                        <br>
                        



                    </div>


            </form>


        </div>
        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>