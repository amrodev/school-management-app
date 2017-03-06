<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require 'lib/admin.php';
  require 'lib/Encryption.php';
  require 'lib/user_actions.php';

  $_admin   = new Admin();
  $_enc     = new Encryption();
  $_actions = new User_actions();


  $admins  = $_admin->get_all();
  $counter = count($admins);
  
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
    <title>SSMS - Edit Users</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                  <a href="users.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"> اضافة مستخدم <i class="md md-my-library-add"></i></a>
                  
                  <br><br>
                   <br><br>
                    <!-- Pls Remove -->
                    <div class="panel">
                      <div class="panel-body" align="right">
                        
                        <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          <br><br>
                            <div class="row">
                              <div class="col-sm-22">
                                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                  <thead>
                                    <tr role="row" align="center">
                                      
                                      <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 114px;">نوع العملية</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 250px;">النوع</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">الايميل</th>
                                      <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 229px;">اسم المستخدم</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      for ($i=0; $i <$counter ; $i++) 
                                      {
                                        switch ($admins[$i]['level']) {
                                          case '1':
                                            $level = 'مدير عام';
                                            break;
                                          case '2':
                                            $level = 'مدير الموقع';
                                            break;
                                          case '3':
                                            $level = 'طالب';
                                            break;
                                          case '4':
                                            $level = 'مدرس';
                                            break;
                                          case '5':
                                            $level = 'ولى امر';
                                            break;        
                                          
                                          default:
                                            # code...
                                            break;
                                        }
                                        $enc_id = $_enc->encode($admins[$i]['admin_id']); 
                                        echo '<tr class="gradeA odd" role="row">';

                                        echo '<td class="actions">';
                                        $actions = $_actions->get_actions('username',$admins[$i]['admin_username']);
                                        //var_dump($actions);
                                       if (!empty($actions)) 
                                        {
                                          echo '<a href="update_user.php?user_name='.$enc_id.'"><i class="fa fa-pencil"></i></a>';
                                          if ($admins[$i]['suspended'] == 0) 
                                          {
                                            echo '<a href="funcs/user_functions.php?sus='.$enc_id.'"><i class="md md-block"></i></a>';
                                          }
                                          else{
                                            echo '<a href="funcs/user_functions.php?unsus='.$enc_id.'"><i class="ion-play"></i></a>';
                                         }
                                          
                                        
                                        }
                                        else{
                                          echo '<a href="update_user.php?user_name='.$enc_id.'"><i class="fa fa-pencil"></i></a>';
                                        echo '<a href="funcs/user_functions.php?del_name='.$enc_id.'" ><i class="fa fa-trash-o"></i></a>';
                                        
                                        }
                                        echo '</td>';
                                        echo '<td>'.$level.'</td>';
                                        echo '<td>'.$admins[$i]['admin_email'].'</td>';
                                        echo '<td class="sorting_1">'.$admins[$i]['admin_username'].'</td>';
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