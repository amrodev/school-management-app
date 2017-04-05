<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require_once 'funcs/auth.php';
      if($adminVeiwSMS == 0)
      {
        header("Location: dashboard.php");
      }
  
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
    <title>SSMS - SMS Events</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
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
                    <!-- Page-Title -->
                  <a href="add_sms_event.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i class="md md-my-library-add"></i> Add SMS Event</a>
                  <br><br>
                    <!-- Pls Remove -->
                    <div class="panel">
                      <div class="panel-body">
                        
                        <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          
                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 229px;">Event Title</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">Day</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 250px;">Month</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 114px;">Year</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 114px;">Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                    require 'lib/sms.php';
                                    require 'lib/user_actions.php';
                                    $_sms     = new SMS();
                                    $_enc     = new Encryption();

                                    $smss  = $_sms->get_all();
                                    $counter = count($smss);
                                    for ($i=0; $i <$counter ; $i++) 
                                    {
                                      if ($level != 'mips') 
                                      {
                                        echo '<tr class="gradeA odd" role="row">';
                                        echo '<td class="sorting_1">'.$smss[$i]['EventTitle'].'</td>';
                                        echo '<td>'.$smss[$i]['EventDay'].'</td>';
                                        echo '<td>'.$smss[$i]['EventMonth'].'</td>';
                                        echo '<td>'.$smss[$i]['EventYear'].'</td>';
                                        echo '<td></td>';
                                        echo '</td>';
                                        
                                        echo '</tr>';
                                    }
                                  }
                                ?>  

                                  </tbody>
                                </table>
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