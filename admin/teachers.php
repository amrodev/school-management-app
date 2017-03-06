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
        <div class="col-md-12">
            


            <?php

            ?>


            <form class="cmxform form-horizontal tasi-form" id="manual_sms" name="manual_sms" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="float:left;">Teachers </h3>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">


                           <br>


                                <table class="table table-bordered table-striped dataTable no-footer"  id="datatable-editable"   role="grid" aria-describedby="datatable-editable_info">
                                <thead>
                                  <tr role="row">
                                  
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Job Title: activate to sort column descending" aria-sort="ascending" >
                                        Employee ID
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Name
                                    </th>
                                    
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Subject
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Mobile
                                    </th>
                                    

                                    
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                  require_once 'lib/admin.php';
                                  $_teachers = new Admin();
                                  $teachers = $_teachers->get_allTE();
                                  for ($i=0; $i <count($teachers) ; $i++) 
                                  { 
                                    echo '<tr class="gradeA odd" role="row">';
                                    echo "<td>".$teachers[$i]['EmpID']."</td>";
                                    echo "<td>".$teachers[$i]['Name']."</td>";
                                    echo "<td>".$teachers[$i]['Subject']."</td>";
                                    echo "<td>".$teachers[$i]['Mobile']."</td>";
                                    echo '</tr>';
                                  }
                                ?>
                                   
                                    </tbody>
                                  </table>


                            </div>
                        </div>
                        <br>
                        
                       
                        <a href="sendMessage.php?type=AllTeachers" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="sms_all" id="sms_all" type="submit">Send to All
                        </a>

                        <a href="sendMessage.php?type=TeachersByGrade" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="TeachersByGrade" id="TeachersByGrade" type="submit">Send By Grade
                        </a>

                        
                        

                    </div>


            </form>


        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>