<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  header("Location: empty.php");
  
}
else{
  header("Location: index.php");
  echo 'ERROR';
  
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
    <title>SSMS - Dashboard</title>
    <style type="text/css">
      body
{
  font-family: "Helvetica Neue Bold", arial, helvetica, sans-serif;
  font-size: 100%;
  margin: 10px;
  color: #333;
  background-color: #cecece;
}

h1
{
  margin: 0;
  font-weight: normal;
}

time.icon
{
  font-size: 1em; /* change icon size */
  display: block;
  position: relative;
  width: 7em;
  height: 7em;
  background-color: #fff;
  border-radius: 0.6em;
  box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transform: rotate(0deg) skewY(0deg);
  -webkit-transform-origin: 50% 10%;
  transform-origin: 50% 10%;
}

time.icon *
{
  display: block;
  width: 100%;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  text-align: center;
}

time.icon strong
{
  position: absolute;
  top: 0;
  padding: 0.4em 0;
  color: #fff;
  background-color: #029602;
  border-bottom: 1px dashed #034203;
  box-shadow: 0 2px 0 #029602;
}

time.icon em
{
  position: absolute;
  bottom: 0.3em;
  color: #056105;
}

time.icon span
{
  width: 100%;
  font-size: 2.8em;
  letter-spacing: -0.05em;
  padding-top: 0.8em;
  color: #2f2f2f;
}

time.icon:hover, time.icon:focus
{
  -webkit-animation: swing 0.6s ease-out;
  animation: swing 0.6s ease-out;
}

@-webkit-keyframes swing {
  0%   { -webkit-transform: rotate(0deg)  skewY(0deg); }
  20%  { -webkit-transform: rotate(12deg) skewY(4deg); }
  60%  { -webkit-transform: rotate(-9deg) skewY(-3deg); }
  80%  { -webkit-transform: rotate(6deg)  skewY(-2deg); }
  100% { -webkit-transform: rotate(0deg)  skewY(0deg); }
}

@keyframes swing {
  0%   { transform: rotate(0deg)  skewY(0deg); }
  20%  { transform: rotate(12deg) skewY(4deg); }
  60%  { transform: rotate(-9deg) skewY(-3deg); }
  80%  { transform: rotate(6deg)  skewY(-2deg); }
  100% { transform: rotate(0deg)  skewY(0deg); }
}
    </style>
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  
                  


                    <?php
                      if (isset($_SESSION['AdminBirthDate'])) 
                      {
                        $bdate     = $_SESSION['AdminBirthDate'];
                        $orderdate = explode('-', $bdate);
                        $year      = $orderdate[0];
                        $month     = $orderdate[1];
                        $day       = $orderdate[2];
                        $NowDay    =  date("d");
                        $NowMonth  =  date("m");
                        $NowYear   =  date("o");
                        $age = $NowYear - $year;
                        if ($NowDay == $day && $NowMonth == $NowMonth) 
                        {
                          echo '<div class="col-lg-12"><div class="panel bg-success">
                                <div class="panel-body" style="background-image : url(assets/images/big/bg.jpg);"><div class="row"><div class="col-sm-7">
                                <div class=""><div class="row"><div class="col-xs-6 text-center">
                                <img src="images/bday.jpg" width="100"  />
                                </div><div class="col-xs-6">
                                <h2 class="m-t-0 text-white"><b>'.$_SESSION['AdminFirstName'].'</b></h2>
                                <p class="text-white">Happy Birthday </p>
                                <p class="text-white">'.$age.' Years</p>
                                </div></div></div></div></div></div></div></div>';
                       }
                     }
                    ?>                    
                   
                   <?php
                      require_once 'lib/tests.php';

                      if ($_SESSION['admin_level'] == 3) 
                      {
                        if (isset($_SESSION['StudentClassID'])) 
                        {
                          $class   = $_SESSION['StudentClassID'];
                          $NowDate = date("o-m-d");
                          $NowTime = date("h:i A");
                          $_test   = New Tests();
                          $_enc    = New Encryption();
                          $select  = '*';
                          $where   = " TestDate =  '".$NowDate."' and TestClass = '".$class."' ";
                          $test    = $_test->get_by_whereTXT($select,$where);
                          $enc_id  = $_enc->encode($test[0]['TestID']);
                          // check if student answer test 
                          $check_student_test = $_test->CheckStudentTest('UserName',$_SESSION['admin_username']);
                          if (isset($test)) 
                          {
                            if ($check_student_test) 
                            {
                              
                            }
                            else
                            {
                              echo '<div class="alert alert-success">'.$test[0]['TestName'].' For Subject '.$test[0]['TestSubject'].' Is Today <a href="online_test.php?ID='.$enc_id.'" class="alert-link">Do a Test</a>.</div> ';
                            }
                            
                          }
                        }
                      }
                   ?>

                    <?php
                      require 'lib/params.php';
                      $_params = new Params();                      
                      $parms = $_params->get_all();
                      //var_dump($parms);
                    ?>
                   
                   <div class="col-lg-6">
                    <div class="panel bg-success">
                    <?php
                     require 'lib/admin.php';
                     $_admin   = new Admin();
                     $admins  = $_admin->get_all();
                     $counter = count($admins);
                     for ($i=0; $i <$counter ; $i++) 
                     {
                      switch ($admins[$i]['level']) 
                      {
                        case '1':
                        $level = 'Super Admin';
                        break;
                        case '2':
                        $level = 'Website Admin';
                        break;
                          
                        default:
                        # code...
                        break;
                      }
                    }
                    ?>
                                    
                      
                    </div>
                  </div>

                  

                    </div>
                 
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       