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
    <title>SSMS - Students</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  <div class="panel">
                      <div class="panel-body">
                        
                        <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          
                            <div class="row">
                              <div class="col-sm-12">
                               <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable"
                    role="grid" aria-describedby="datatable-editable_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                colspan="1" aria-label="Job Title: activate to sort column descending"
                                aria-sort="ascending" style="width: 283px;">
                                ID
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 351px;">
                                Test ID
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                Username
                            </th>
                            
                            
                           
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          require 'lib/tests.php';
                          $_tests = new Tests();
                          $_enc   = new Encryption();
                          $ID     = $_GET['id'];
                          $enc_id = $_enc->decode($ID);
                          $all_users = $_tests->GetTestUsers('TestID',$enc_id);
                          $counter = count($all_users);
                          for ($i=0; $i <$counter ; $i++) 
                          {
                            $enc_id  = $_enc->encode($all_users[$i]['UserName']); 
                            $enc_id2 = $_enc->encode($all_users[$i]['TestID']);
                            echo '<tr class="gradeA odd" role="row"><td class="sorting_1">';
                            echo $all_users[$i]['id'];
                            echo '</td><td>';
                            echo $all_users[$i]['TestID'];
                            echo '</td><td>'.$all_users[$i]['UserName'];
                            echo '</td>';
                           
                            echo '';
                            echo '<td><a href="mark_exam.php?id='.$enc_id.'&id2='.$enc_id2.'">Show</a></td>';
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