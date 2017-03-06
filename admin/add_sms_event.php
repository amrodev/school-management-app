<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  
}
else{
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
      if (isset($_SESSION['smsresult'])) 
      {
         
      } 
      else
      {
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
                              <span class="name">SMS Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="" class="btn bg-purple waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                          <div class="price_card text-center">
                            <div class="pricing-header bg-success">
                              <span class="price"></span> 
                              <span class="name">Add SMS Event</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="sms_events.php" class="btn bg-success waves-effect waves-light w-md">Add Event</a>
                          </div>
                        </div>




                    
                </div>
                <!-- container -->


                <?php
                     
                ?>


            <form class="cmxform form-horizontal tasi-form" id="add_sms_event" name="add_sms_event" method="post" enctype="multipart/form-data" action="funcs/sms_settings.php" novalidate="novalidate">
               
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Add New SMS</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-12">

                      <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Event Title</label>
                        <div class="col-lg-10">
                          <input class="form-control error" id="title" name="title" type="text" required="" aria-required="true" aria-invalid="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Event Message</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Date</label>
                        <div class="col-lg-10">
                          <select  name="day" id="day">
                            <option>Day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>

                          </select>

                          <select  name="month" id="month">
                            <option>Month</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            
                          </select>

                          <select id="year" name="year">
                            <option>Year</option>
                            <option>Every Year</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                           
                          </select>
                        </div>
                      </div>




                      </div>
                    </div>
                    <br>
                    <button style="color: #FFFFFF;" class="btn  bg-purple waves-effect waves-light" name="add_sms_event" id="add_sms_event" type="submit">Save</button>

                  </div>

                    
               </form>

                   
                    
                </div>

                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       