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
    <title>SSMS - User Reports</title>
    
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
                              <span class="name">Users</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="user_report.php" class="btn bg-purple waves-effect waves-light w-md">Users</a>
                          </div>
                        </div>    
                </div>


                <div class="row">
                  <div class="col-sm-12" style="background-color: #FFFFFF;">
                                <br>
                                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                  <thead>
                                    <tr align="center" role="row" style="background-color: #7E57C2;">
                                      <th style="color: white;" class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 229px;">Username</th>
                                      <th style="color: white;" class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 229px;">Type</th>
                                      <th style="color: white;" class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">Number of login</th>
                                      <th style="color: white;" class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 250px;">Number of Actions</th>
                                      <th style="color: white;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 114px;">Last Login Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                              
                  <?php
                    require 'lib/user_actions.php';

                    $_enc          = new Encryption();
                    $_user_actions = new User_actions();
                    $users = $_user_actions->get_all_users();
                    $counter = count($users);
                    for ($i=0; $i <$counter ; $i++) 
                    {
                      $enc_user = $_enc->encode($users[$i]['username']); 
                      echo '<tr class="gradeA odd" role="row">';
                      echo '<td class="sorting_1"><a href="user_action_report.php?u='.$enc_user.'">'.$users[$i]['username'].'</a></td>';
                      switch ($users[$i]['level']) 
                      {
                        case '1':
                          $level = 'Super Admin';
                          break;
                        case '2':
                          $level = 'Website Admin';
                          break;
                        case '3':
                          $level = 'Student';
                          break;
                        case '4':
                          $level = 'Parent';
                          break;
                        case '5':
                          $level = 'Teacher';
                          break;        
                      }
                      echo '<td>'.$level.'</td>';
                      echo '<td>'.$users[$i]['number_of_logins'].'</td>';
                      $actions = $_user_actions->get_actions('username',$users[$i]['username']);
                      if (isset($actions)) 
                      {
                        $n_actions = count($actions);
                      }
                      else{
                        $n_actions = 0;
                      }
                      echo '<td>'.$n_actions.'</td>';
                      echo '<td>'.$users[$i]['last_login_date'].'</td>';
                      echo '</tr>';
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