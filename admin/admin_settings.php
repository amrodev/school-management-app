<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  require_once 'funcs/auth.php';
      if($adminVeiwSet == 0 && $adminEditSet == 0)
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
    <title>SSMS - Admin Settings</title>
    
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
                              <span class="name">Website Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="website_settings.php" class="btn bg-purple waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                          <div class="price_card text-center">
                            <div class="pricing-header bg-success">
                              <span class="price"></span> 
                              <span class="name">Admin Settings</span>
                            </div>
                            <br>
                            <a style="color: #FFFFFF;" href="admin_settings.php" class="btn bg-success waves-effect waves-light w-md">Settings</a>
                          </div>
                        </div>

                    
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Admin Settings - Items to Show</h3>
                  </div>
                  <div class="panel-body">

                    <?php
                      require 'lib/params.php';
                      $_params = new Params();                      
                      $parms = $_params->get_all();
                      //var_dump($parms);
                      
                      if ($parms[0]['content'] == 0) 
                      {
                        $maintenanc = '';
                      }
                      else if ($parms[0]['content'] == 1) 
                      {
                        $maintenanc = 'checked=""';
                      }
                      //////////////////////////////////////////////////////
                      if ($parms[11]['content'] == 0) 
                      {
                        $birthdays = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $birthdays = 'checked=""';
                      }
                      //////////////////////////////////////////////////////
                      if ($parms[17]['content'] == 0) 
                      {
                        $Users = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $Users = 'checked=""';
                      }
                      //////////////////////////////////////////////////////
                      //////////////////////////////////////////////////////
                      if ($parms[18]['content'] == 0) 
                      {
                        $Sections = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $Sections = 'checked=""';
                      }
                      //////////////////////////////////////////////////////
                      if ($parms[19]['content'] == 0) 
                      {
                        $Events = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $Events = 'checked=""';
                      } 
                      //////////////////////////////////////////////////////
                      if ($parms[20]['content'] == 0) 
                      {
                        $News = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $News = 'checked=""';
                      } 
                      //////////////////////////////////////////////////////
                      if ($parms[21]['content'] == 0) 
                      {
                        $Photos = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $Photos = 'checked=""';
                      }
                      //////////////////////////////////////////////////////
                      if ($parms[22]['content'] == 0) 
                      {
                        $Mailbox = '';
                      }
                      else if ($parms[11]['content'] == 1) 
                      {
                        $Mailbox = 'checked=""';
                      }                         


                    ?>
             
               <form class="cmxform form-horizontal tasi-form" id="update_admin_settings" name="update_admin_settings" method="post" enctype="multipart/form-data" action="funcs/params.php" novalidate="novalidate">
                  
                  <?php
                    if ($_SESSION['admin_level'] == 0) 
                    {
                      echo '<div class="row"><div class="col-lg-12">';
                      echo '<div class="checkbox checkbox-primary">';
                      echo '<input name="maintenance" id="maintenance" type="checkbox"'.$maintenanc.'>';
                      echo '<label for="checkbox-h">Maintenance</label>';
                      echo '</div></div></div>';
                    } 
                  ?>  

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="birthdays" id="birthdays" type="checkbox" <?php echo $birthdays ?>>
                          <label for="checkbox-h">Birthdays </label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="Users" id="Users" type="checkbox" <?php echo $Users ?>>
                          <label for="checkbox-h">Dashboard - Latest Users</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="Sections" id="Sections" type="checkbox" <?php echo $Sections ?>>
                          <label for="checkbox-h">Dashboard - Available Sections</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="Events" id="Events" type="checkbox" <?php echo $Events ?>>
                          <label for="checkbox-h">Dashboard - Latest Events</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="News" id="News" type="checkbox" <?php echo $News ?>>
                          <label for="checkbox-h">Dashboard - Latest News</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="Photos" id="Photos" type="checkbox" <?php echo $Photos ?>>
                          <label for="checkbox-h">Dashboard - Latest Photos</label>
                        </div>
                      </div>
                    </div>                   

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="checkbox checkbox-primary">
                          <input name="Mailbox" id="Mailbox" type="checkbox" <?php echo $Mailbox ?>>
                          <label for="checkbox-h">Dashboard - Mailbox</label>
                        </div>
                      </div>
                    </div>

                    <button style="color: #FFFFFF;" class="btn bg-success waves-effect waves-light" name="update_admin_settings" id="update_admin_settings" type="submit">Save</button>
                </form>
                    

                  </div>
                </div>
                  

            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       