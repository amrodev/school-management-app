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
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                 <div class="col-md-11">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Time Table</h3>
                      <?php                          
                        $tomorrow = date("l",strtotime("tomorrow"));
                      ?>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <?php 
                            require_once 'lib/timetable.php';
                            $_time          = new Timetable();
                            $table2         = 'classes';
                            $table3         = 'subjects';
                            $table4         = 'teachers';
                            $table5         = 'days';
                            $selects        = ' classes.ClassName,subjects.SubjectName,teachers.TeacherName,days.DayNameEn,timetable.LessonId';
                            $OnStatement1   = 'classes.ClassID = timetable.ClassID';
                            $OnStatement2   = 'subjects.SubjectID = timetable.SubjectID';
                            $OnStatement3   = 'teachers.TeacherId = timetable.TeacherId';
                            $OnStatement4   = 'days.Dayid = timetable.DayId';
                            
                            $WhereStatement1     = 'timetable.ClassID=5 and days.Dayid=1';
                            $Timetable_Sunday    = $_time->TimeTableInnerTables($table2,$table3,$table4,$table5,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$WhereStatement1);
                           
                            $WhereStatement2     = 'timetable.ClassID=5 and days.Dayid=2';
                            $Timetable_Monday    = $_time->TimeTableInnerTables($table2,$table3,$table4,$table5,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$WhereStatement2);
                            
                            $WhereStatement3     = 'timetable.ClassID=5 and days.Dayid=3';
                            $Timetable_Tuesday   = $_time->TimeTableInnerTables($table2,$table3,$table4,$table5,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$WhereStatement3);
                           
                            $WhereStatement4     = 'timetable.ClassID=5 and days.Dayid=4';
                            $Timetable_Wednesday = $_time->TimeTableInnerTables($table2,$table3,$table4,$table5,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$WhereStatement4);
                            
                            $WhereStatement5     = 'timetable.ClassID=5 and days.Dayid=5';
                            $Timetable_Thursday  = $_time->TimeTableInnerTables($table2,$table3,$table4,$table5,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$WhereStatement5);

 
                          ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr style="background-color: rgba(158, 158, 158, 0.14);">                                
                                <th>Day</th>
                                <th>Lesson 1</th>
                                <th>Lesson 2</th>
                                <th>Lesson 3</th>
                                <th>Lesson 4</th>
                                <th>Lesson 5</th>
                                <th>Lesson 6</th>
                                <th>Lesson 7</th>
                                <th>Lesson 8</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                <?php
                                  if ($tomorrow == $Timetable_Sunday[0]['DayNameEn']) 
                                  {
                                    echo '<tr style="background-color: rgb(198, 232, 191);">';
                                  }
                                  else
                                  {
                                    echo '<tr>';
                                  }
                                  
                                  echo '<td style="background-color: rgba(158, 158, 158, 0.14);">'.$Timetable_Sunday[0]['DayNameEn'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[0]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[1]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[2]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[3]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[4]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[5]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Sunday[6]['SubjectName'].'</td>';
                                  if (isset($Timetable_Sunday[7]['SubjectName'])) {
                                    echo '<td>'.$Timetable_Sunday[7]['SubjectName'].'</td>';
                                  } 
                                   echo '</tr>';                                
                                ?>

                                <?php
                                  if ($tomorrow == $Timetable_Monday[0]['DayNameEn']) 
                                  {
                                    echo '<tr style="background-color: rgb(198, 232, 191);">';
                                  }
                                  else
                                  {
                                    echo '<tr>';
                                  }
                                  echo '<tr>';
                                  echo '<td style="background-color: rgba(158, 158, 158, 0.14);">'.$Timetable_Monday[0]['DayNameEn'].'</td>';
                                  echo '<td>'.$Timetable_Monday[0]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[1]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[2]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[3]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[4]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[5]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Monday[6]['SubjectName'].'</td>';
                                  if (isset($Timetable_Monday[7]['SubjectName'])) {
                                    echo '<td>'.$Timetable_Monday[7]['SubjectName'].'</td>';
                                  } 
                                   echo '</tr>';                                
                                ?>

                                <?php
                                  if ($tomorrow == $Timetable_Tuesday[0]['DayNameEn']) 
                                  {
                                    
                                    echo '<tr style="background-color: rgb(198, 232, 191);">';
                                  }
                                  else
                                  {
                                    echo '<tr>';
                                  }
                                  echo '<tr>';
                                  echo '<td style="background-color: rgba(158, 158, 158, 0.14);">'.$Timetable_Tuesday[0]['DayNameEn'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[0]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[1]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[2]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[3]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[4]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[5]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Tuesday[6]['SubjectName'].'</td>';
                                  if (isset($Timetable_Tuesday[7]['SubjectName'])) {
                                    echo '<td>'.$Timetable_Tuesday[7]['SubjectName'].'</td>';
                                  }
                                   echo '</tr>';                                 
                                ?>


                                <?php
                                  if ($tomorrow == $Timetable_Wednesday[0]['DayNameEn']) 
                                  {
                                    echo '<tr style="background-color: rgb(198, 232, 191);">';
                                  }
                                  else
                                  {
                                    echo '<tr>';
                                  }
                                  echo '<tr>';
                                  echo '<td style="background-color: rgba(158, 158, 158, 0.14);">'.$Timetable_Wednesday[0]['DayNameEn'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[0]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[1]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[2]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[3]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[4]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[5]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Wednesday[6]['SubjectName'].'</td>';
                                  if (isset($Timetable_Wednesday[7]['SubjectName'])) {
                                    echo '<td>'.$Timetable_Wednesday[7]['SubjectName'].'</td>';
                                  } 
                                   echo '</tr>';                                 
                                ?>

                                <?php
                                  if ($tomorrow == $Timetable_Thursday[0]['DayNameEn']) 
                                  {
                                    echo '<tr style="background-color: rgb(198, 232, 191);">';
                                  }
                                  else
                                  {
                                    echo '<tr>';
                                  }
                                  echo '<tr>';
                                  echo '<td style="background-color: rgba(158, 158, 158, 0.14);">'.$Timetable_Thursday[0]['DayNameEn'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[0]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[1]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[2]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[3]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[4]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[5]['SubjectName'].'</td>';
                                  echo '<td>'.$Timetable_Thursday[6]['SubjectName'].'</td>';
                                  if (isset($Timetable_Thursday[7]['SubjectName'])) {
                                    echo '<td>'.$Timetable_Thursday[7]['SubjectName'].'</td>';
                                  }
                                  echo '</tr>';
                                                                    
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