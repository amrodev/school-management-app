<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require_once 'lib/exams.php';
  $_StuResult = new Exams();
  $StudentCode = $_SESSION['StudentCode'];
  $where       = ' StudentCode ="'.$StudentCode.'" and Term =1 ';
  $ResultsTerm1     = $_StuResult->get_by_where('*',$where);
  $where       = ' StudentCode ="'.$StudentCode.'" and Term =2 ';
  $ResultsTerm2     = $_StuResult->get_by_where('*',$where);                           

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
    <title>SSMS - Exams</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page"  align="right">
            <!-- Start content -->
            <div class="content">
                <div class="container" >

                  <?php 
                    $counter = count($ResultsTerm1);
                    if (isset($ResultsTerm1)) 
                    {
                      echo '<div class="col-md-12"  style=" padding-right: 0px;"><div class="panel panel-default">';
                      echo '<div class="panel-heading" style="width: 96%;" align="right">
                       <h3 class="panel-title">نتائج الترم الاول</h3>';
                      echo '</div><div  align="right" class="panel-body"><div class="row">';
                      echo '<div  align="right" class="col-md-12 col-sm-12 col-xs-12" style="width: 85%;"><div class="table-responsive">';
                      echo '<h4 align="center" style="background-color: rgba(68, 128, 68, 0.24);">Student Name : '.$_SESSION['AdminFirstName'].' '.$_SESSION['AdminMiddleName'].' '.$_SESSION['AdminLastName'].'</h4>';
                      echo '<table class="table"><thead>
                      
                      <tr>
                      <th  align="right">النسبة المئوية</th>
                      <th>الدرجات</th>
                      <th>المادة</th>
                      <th>مسلسل</th>';
                      echo '</tr></thead><tbody>';
                      $x = 1;
                      $TotalMaxDegree  = 0;
                      $TotalMinDegree  = 0;
                      $TotalYourDegree = 0;
                      for ($i=0; $i <$counter ; $i++) 
                      { 
                        echo '<tr>';
                       
                        $TotalMaxDegree += $ResultsTerm1[$i]['MaxDegree'];
                        $TotalMinDegree += $ResultsTerm1[$i]['MinDegree'];
                        $TotalYourDegree += $ResultsTerm1[$i]['StudentDegree'];
                        $Percentageshow = ($ResultsTerm1[$i]['StudentDegree']/$ResultsTerm1[$i]['MaxDegree'])*100;
                        $Percentage = round($Percentageshow, 2);
                        echo '<td><div class="progress"><div class="progress-bar progress-bar-info wow animated progress-animated animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="background-color: #5A795A; width: '.$Percentage.'%; visibility: visible; animation-name: animationProgress;">'.$Percentage.'%</div></div></td>';
                        
                        echo '<td>'.$ResultsTerm1[$i]['StudentDegree'].'/'.$ResultsTerm1[$i]['MaxDegree'].'</td>';
                       echo '<td>'.$ResultsTerm1[$i]['SubjectNameEN'].'</td>';
                        echo '<td>'.$x.'</td>';
                        echo '</tr>';
                        $x++;
                      }
                      echo '<tr style="background-color: rgba(68, 128, 68, 0.24);">';
                      echo '<td></td>';
                      echo '<td>'.$TotalYourDegree.'/'.$TotalMaxDegree.'</td><td>المجموع</td>';
                      $overallPercentage  = ($TotalYourDegree/$TotalMaxDegree)*100;
                      $allPercentage = round($overallPercentage, 2);
                      
                      echo '<td></td></tr>';
                      echo '</tbody></table>';
                      echo '<div class="progress progress-lg style=""><div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="background-color: rgba(2, 150, 2, 0.59);box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4), 0 5px 10px rgba(0,0,0,0.4);width: '.$allPercentage.'%;">'.$allPercentage.'%</div></div>';
                      echo '</div></div></div></div></div></div>';

                    }
                  ?> 


                  <?php 
                    $counter = count($ResultsTerm2);
                    if (isset($ResultsTerm2)) 
                    {
                      echo '<div class="col-md-12"><div class="panel panel-default">';
                      echo '<div class="panel-heading"><h3 class="panel-title">Second Term Results</h3>';
                      echo '</div><div class="panel-body"><div class="row">';
                      echo '<div class="col-md-12 col-sm-12 col-xs-12"><div class="table-responsive">';
                      echo '<table class="table"><thead><tr><th>#</th><th>Subject Name</th>';
                      echo '<th>Max Degree</th><th>Min Degree</th><th>Your Degree</th>';
                      echo '<th>Subject Percentage</th></tr></thead><tbody>';
                      $x = 1;
                      $TotalMaxDegree  = 0;
                      $TotalMinDegree  = 0;
                      $TotalYourDegree = 0;
                      for ($i=0; $i <$counter ; $i++) 
                      { 
                        echo '<tr>';
                        echo '<td>'.$x.'</td>';
                        echo '<td>'.$ResultsTerm2[$i]['SubjectNameEN'].'</td>';
                        echo '<td>'.$ResultsTerm2[$i]['MaxDegree'].'</td>';
                        $TotalMaxDegree += $ResultsTerm2[$i]['MaxDegree'];
                        echo '<td>'.$ResultsTerm2[$i]['MinDegree'].'</td>';
                        $TotalMinDegree += $ResultsTerm2[$i]['MinDegree'];
                        echo '<td>'.$ResultsTerm2[$i]['StudentDegree'].'</td>';
                        $TotalYourDegree += $ResultsTerm2[$i]['StudentDegree'];
                        $Percentageshow = ($ResultsTerm2[$i]['StudentDegree']/$ResultsTerm2[$i]['MaxDegree'])*100;
                        $Percentage = round($Percentageshow, 2);
                        echo '<td><div class="progress"><div class="progress-bar progress-bar-info wow animated progress-animated animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="background-color: #5A795A; width: '.$Percentage.'%; visibility: visible; animation-name: animationProgress;">'.$Percentage.'%</div></div></td>';
                        echo '</tr>';
                        $x++;
                      }
                      echo '<tr style="background-color: rgba(68, 128, 68, 0.24);">';
                      echo '<td></td><td>Total</td>';
                      echo '<td>'.$TotalMaxDegree.'</td>';
                      echo '<td>'.$TotalMinDegree.'</td>';
                      echo '<td>'.$TotalYourDegree.'</td>';
                      $overallPercentage  = ($TotalYourDegree/$TotalMaxDegree)*100;
                      $allPercentage = round($overallPercentage, 2);
                      
                      echo '<td></td></tr>';
                      echo '</tbody></table>';
                      echo '<div class="progress progress-lg style=""><div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="background-color: rgba(2, 150, 2, 0.59);box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4), 0 5px 10px rgba(0,0,0,0.4);width: '.$allPercentage.'%;">'.$allPercentage.'%</div></div>';
                      echo '</div></div></div></div></div></div>';

                    }
                  ?> 
                    
                   
                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       