<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{

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
    <title>Profile </title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
          
          <?php 
            $id = $_GET['id'];
            require_once 'lib/Encryption.php';
            require_once 'lib/admin.php';
            $_user = new Admin();
            $_enc  = new Encryption();
            $value = $_enc->decode($id);
            switch ($_SESSION['admin_level']) {
              case '1':
                $user = $_user->get_userdata('admin_username',$value);
                $UserLevel = 'Super Admin' ;
                break;
              case '2':
                $user = $_user->get_userdata('admin_username',$value);
                $UserLevel = 'Website Admin' ;
                break;
              case '3':
                $user = $_user->get_userdataST('Username',$value);
                $UserLevel = 'Student' ;
                break;
              case '4':
                $user = $_user->get_userdataPA('Username',$value);
                $UserLevel = 'Parent' ;
                break;
              case '5':
                $user = $_user->get_userdataTE('Username',$value);
                $UserLevel = 'Teacher' ;
                break;
              
            }

          ?>  
            <div class="content">

              <?php
                  if ($UserLevel = 'Student') 
                  {
                     echo '<div class="wraper container-fluid"><div class="row"><div class="col-sm-12"><div class="bg-picture text-center" style="background-image:url('."assets/images/big/bg.jpg".')">
                           <div class="bg-picture-overlay"></div><div class="profile-info-name">
                           <img src="../wp_uploads/students/'.$user[0]['StudentID'].'.jpg'.'" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                        ';
                     echo '<h3 class="text-white">'.$user[0]['FirstNameAR'].'<br>'.$UserLevel.'</h3>';
                     echo '</div></div></div></div>';
                     echo '<div class="row user-tabs">
                           <div class="col-lg-6 col-md-9 col-sm-9">
                           <ul class="nav nav-tabs tabs" style="width: 100%;">';

                    echo '<li class="active tab" style="width: 25%;">
                           <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                           <span class="visible-xs">
                           <i class="fa fa-home"></i>
                           </span> 
                           <span class="hidden-xs">About Me</span>
                           </a>
                          </li>';

                    echo '<li class="tab" style="width: 25%;">
                           <a href="#messages-2" data-toggle="tab" aria-expanded="true">
                             <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                             <span class="hidden-xs">Grades</span>
                           </a>
                          </li>';

                    echo '<li class="tab" style="width: 25%;">
                           <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                           <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                           <span class="hidden-xs">Settings</span>
                           </a>
                          </li>';

                    echo '<div class="indicator" style="right: 412px; left: 0px;"></div>
                          <div class="indicator" style="right: 412px; left: 0px;"></div>
                         </ul></div>';
                    
                    echo '<div class="col-lg-6 col-md-3 col-sm-3 hidden-xs">
                           <div class="pull-right">
                           <div class="dropdown">
                           <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light" href="#">';
                    
                    echo 'Actions <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                              <li><a href="#">Private message</a></li>
                            </ul>
                            </div></div></div></div>'; 

                    echo ' <div class="row">
                           <div class="col-lg-12">
                           <div class="tab-content profile-tab-content">
                           <div class="tab-pane active" id="home-2">
                           <div class="row"><div class="col-md-4">
                           <div class="panel panel-default panel-fill">
                           <div class="panel-heading">
                           <h3 class="panel-title">Personal Information</h3>
                           </div><div class="panel-body"><div class="about-info-p">'; 
                   
                    echo '<strong>Full Name</strong><br><p class="text-muted">'.$user[0]['FirstName'].' '.$user[0]['MiddleName'].' '.$user[0]['LastName'].'</p>';        
                    
                    echo '</div><div class="about-info-p"><strong>Gender</strong><br><p class="text-muted">'; 
                    
                    if ($user[0]['GenderCode'] == '1') 
                    {
                      echo 'Male';
                    }
                    else{
                     echo 'Female';
                    }  

                    echo ' </p></div><div class="about-info-p">
                          <strong>Email</strong><br><p class="text-muted">';
                    
                    echo $user[0]['Email'];
                    
                    echo '</p></div><div class="about-info-p m-b-0">
                          <strong>City</strong><br><p class="text-muted">';

                    echo $user[0]['CityName'];

                    echo '</p></div><div class="about-info-p m-b-0">
                          <strong>School ID</strong><br><p class="text-muted">';

                    echo $user[0]['StudentCode'];

                    echo '</p></div></div></div></div>';

                    echo '<div class="col-md-8">
                          <div class="panel panel-default panel-fill">
                          <div class="panel-heading">
                          <h3 class="panel-title">Biography</h3>
                          </div><div class="panel-body">';

                    echo '<p></p>';

                    echo '</div></div>';


                    echo '<div class="panel panel-default panel-fill">
                                </div></div></div></div></div>';

                    echo '<div class="tab-pane" id="messages-2" style="display: none;">
                            <div class="panel panel-default panel-fill">
                            <div class="panel-heading"><h3 class="panel-title"> My Grades</h3>
                            </div><div class="panel-body"<div class="table-responsive">
                            <table class="table">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Subject</th>
                              <th>Date</th>
                              <th>Grade</th>                                          
                            </tr>
                            </thead>
                            <tbody>';

                    echo '<tr>
                            <td>1</td>
                            <td>Moltran Admin</td>
                            <td>01/01/2015</td>
                            <td>01/01/2015</td>
                          </tr>';
     
                    echo '</tbody></table></div></div></div></div>';

                    echo '<div class="tab-pane" id="settings-2" style="display: none;">
                              <div class="panel panel-default panel-fill">
                                <div class="panel-heading"><h3 class="panel-title">Edit Profile</h3></div>
                                <div class="panel-body">'; 

                    echo '<form role="form">
                                    <div class="form-group">
                                      <label for="FullName">Full Name</label>
                                      <input type="text" value="" id="FullName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="Email">Email</label>
                                      <input type="email" value="" id="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="Username">Username</label>
                                      <input type="text" value="" id="Username" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="Password">Password</label>
                                      <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="RePassword">Re-Password</label>
                                      <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                    </div>
                                    <div class="form-group"><label for="AboutMe">About Me</label>
                                      <textarea style="height: 125px" id="AboutMe" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                  </form>';

                    echo '</div></div></div></div></div></div></div></div>';


                  
                  } 
              ?>                        
                                        
                                        
                                        
                                     
                            

                                  
                                
            
         </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       