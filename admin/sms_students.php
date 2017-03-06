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
                        <h3 class="panel-title" style="float:left;">Students </h3>
                        <form method="get" style="float:right;" align="right">
                            <select onchange="answers()"  style="margin-left: 10px;" name="filter_type" id="filter_type">
                                <option name="select" id="select">Select Filter</option>
                                <option name="Religion" id="Religion">Religion</option>
                                <option name="Grade" id="Grade">Grade</option>                                
                            </select>
                            
                            <script type="text/javascript">
                              function answers(){
                                var selected = document.getElementById("filter_type").value;
                                window.location.href="sms_students.php?filter="+selected;
                                //alert(selected);
                              }
                            </script>
                            <?php
                              //require 'lib/admin.php';
                              
                              require 'lib/database.php';
                              $_students = new Database();
                              $_enc = new Encryption();
                              
                              $selects = "students.StudentCode ,students.StudentID ,students.FirstNameAR, classes.ClassName, students.Gradeid, classes.StageId, students.Mobile";
                              $OnStatement = "students.ClassID = classes.ClassID";
                              $WhereStatement = "";
                              $students = $_students->InnerJoin("students","classes",$selects,$OnStatement,"");
                              $counter = count($students);
                              if (!isset($_GET['filter'])) {
                                    echo '<select style="margin-left: 10px;" name="filter_value" id="filter_value">
                                     <option name="1" id="1">Muslim</option>
                                     <option name="2" id="2">Christian</option>
                                     </select>';
                                }
                                else{
                                    if ($_GET['filter'] == "Religion") {
                                        echo '<select style="margin-left: 10px;" name="filter_value" id="filter_value">
                                     <option name="1" id="1">Muslim</option>
                                     <option name="2" id="2">Christian</option>
                                     </select>';
                                    }

                                    if ($_GET['filter'] == "Grade") {
                                        echo '<select onchange="answers2()" style="margin-left: 10px;" name="grade" id="grade">';
                                        echo '<option name="" id="">Select Grade</option>';
                                        echo '<option name="0" id="0" value="0">تمهيدى</option>';
                                        echo '<option name="1" id="1" value="1">المستوى الأول</option>';
                                        echo '<option name="2" id="2" value="2">المستوى الثانى</option>';
                                        echo '<option name="3" id="3" value="3">الصف الأول الابتدائى</option>';
                                        echo '<option name="4" id="4" value="4">الصف الثانى الابتدائى</option>';
                                        echo '<option name="5" id="5" value="5">الصف الثالث الابتدائى</option>';
                                        echo '<option name="6" id="6" value="6">الصف الرابع الابتدائى</option>';
                                        echo '<option name="7" id="7" value="7">الصف الخامس الابتدائى</option>';
                                        echo '<option name="8" id="8" value="8">الصف السادس الابتدائى</option>';
                                        echo '<option name="9" id="9" value="9">الصف الأول الإعدادى</option>';
                                        echo '<option name="10" id="10" value="10">الصف الثانى الإعدادى</option>';
                                        echo '<option name="11" id="11" value="11">الصف الثالث الإعدادى</option>';
                                        echo '<option name="12" id="12" value="12">الصف الأول الثانوى</option>';
                                        echo '<option name="13" id="13" value="13">الصف الثانى الثانوى</option>';
                                        echo '<option name="14" id="14" value="14">الصف الثالث الثانوى</option>';                                        
                                        echo '</select>';
                                    }
                                }  
                            ?>

                              <script type="text/javascript">
                              function answers2(){
                                var selected2 = document.getElementById("grade").value;
                                window.location.href="sms_students.php?gradeid="+selected2;
                                //alert(selected);
                              }
                            </script>
                            <?php
                             if (isset($_GET['gradeid'])) {
                                 $selects = "students.StudentCode ,students.StudentID ,students.FirstNameAR, classes.ClassName, students.Gradeid, classes.StageId, students.Mobile";
                                 $OnStatement = "students.ClassID = classes.ClassID";
                                 $WhereStatement = " students.Gradeid=".$_GET['gradeid'];
                                 $students = $_students->InnerJoin("students","classes",$selects,$OnStatement,$WhereStatement);
                                 $counter = count($students);
                                 $_SESSION['stucounter'] = $counter;
                              
                             }
                            ?>

                        </form>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">


                            <?php
                            if (isset($_SESSION['students'])) {
                             var_dump($_SESSION['students']);
                            }
                             ?>


                                <table class="table table-bordered table-striped dataTable no-footer"  id="datatable-editable"   role="grid" aria-describedby="datatable-editable_info">
                                <thead>
                                  <tr role="row">
                                  
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Job Title: activate to sort column descending" aria-sort="ascending" >
                                        Name
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Student Code
                                    </th>
                                    
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Class
                                    </th>
                                    <th tabindex="0"  rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >
                                      Mobile
                                    </th>
                                    

                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        if (isset($students)) {
                                            for ($i = 0; $i < $counter; $i++) {
                                                $enc_id = $_enc->encode($students[$i]['StudentID']);
                                                
                                                echo '<tr class="gradeA odd" role="row">';
                                                $_SISSION[$i]['mobiles'] = $students[$i]['Mobile'];
                                                echo '<td><input type="checkbox" name="list[]" value="'.$students[$i]['Mobile'].'" id="red" style="margin-right:15px"> '.$students[$i]['FirstNameAR'].'</td>';
                                                echo '<td>'.$students[$i]['StudentCode'].'</td>';
                                               
                                                echo '<td>'.$students[$i]['ClassName'].'</td>';
                                                echo '<td>'.$students[$i]['Mobile'].'</td>';
                                                                                                
                                                echo '</tr>';
                                            }
                                        }
                                    ?>

                                   
                                    </tbody>
                                  </table>


                            </div>
                        </div>
                        <br>
                        
                        <button name="sms_selected" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light">
                          Send to Selected
                        </button>

                        <a href="sendMessage.php?type=all" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="sms_all" id="sms_all" type="submit">Send to All
                        </a>

                        <a href="sms_students.php" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="sms_all" id="sms_all" type="submit">filter Selected
                        </a>

                        <a href="sendTo.php?type=grade" style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light"
                                name="sms_all" id="sms_all" type="submit">Send to Grade
                        </a>



                    </div>


            </form>


        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>