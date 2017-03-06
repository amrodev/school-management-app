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
        <title>SSMS - SMS</title>
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

                


            </div>
            <!-- container -->


            <?php

            ?>


            <form class="cmxform form-horizontal tasi-form" id="sms_message" name="sms_message" method="post"
                  enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Template Message</h3>
                        <a href="sms_messages.php" style="float:right; margin-top:-10px;">Back to Adding Messages</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <br>
                        <div class="col-sm-12">
                             <table class="table table-bordered table-striped dataTable no-footer"  id="datatable-editable"   role="grid" aria-describedby="datatable-editable_info">
                                <thead>
                                  <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column descending" aria-sort="ascending" style="width: 283px;">
                                        ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 351px;">
                                        Type
                                    </th>
                                    <th class="sorting" tabindex="0"
                                      aria-controls="datatable-editable" rowspan="1"
                                      colspan="1"
                                      aria-label="Platform(s): activate to sort column ascending"
                                      style="width: 321px;">
                                      Message
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                      aria-label="Actions" style="width: 147px;">
                                      Actions
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require 'lib/sms.php';
                                        $_smsMessages = new sms();
                                        $_enc = new Encryption();
                                        $messages = $_smsMessages->get_allMessages();
                                        $counter = count($messages);
                                        if (isset($messages)) {
                                            for ($i = 0; $i < $counter; $i++) {
                                                $enc_id = $_enc->encode($messages[$i]['id']);
                                                echo '<tr class="gradeA odd" role="row"><td class="sorting_1">';
                                                echo $messages[$i]['id'];
                                                echo '</td><td>';
                                                echo $messages[$i]['sms_type'];
                                                echo '</td><td>';
                                                echo $messages[$i]['sms_message'];
                                                echo '</td><td class="actions">';
                                                echo '<a href="sms_message_edit.php?sms=' . $enc_id . '">
                                                     <i class="fa fa-pencil"></i>
                                                      </a>
                                                      <a href="funcs/sms_settings.php?dsms=' . $enc_id . '" >
                                                      <i class="fa fa-trash-o"></i>
                                                      </a>
                                                      </td>
                                                      </tr>';
                                            }
                                        }
                                    ?>

                                    </tbody>
                                  </table>
                                </div>
                            
                        </div>
                        

                    </div>


            </form>


        </div>

        <!-- container -->
    </div>
    <!-- content -->
<?php require "inc/footer.php" ?>