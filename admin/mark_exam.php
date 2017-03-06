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
    <title>SSMS - Exam</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Responsive Table</h3>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>                                  
                                  <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Model Answer</th>
                                    <th>Student Answer</th>
                                    <th>Result</th>
                                    <th>Marks</th>
                                  </tr>
                                </thead>
                                
                                <tbody>


                  <form id="mark_exam" name="mark_exam" method="post" enctype="multipart/form-data" action="funcs/exam_functions.php">
                  <?php
                    require 'lib/tests.php'; 
                    $_enc     = new Encryption();
                    $_Test    = new Tests();
                    $UserName = $_enc->decode($_GET['id' ]);
                    $TestID   = $_enc->decode($_GET['id2']);
                    
                   
                    $selects        = ' test_questions.QuestionID,test_questions.TestID,test_questions.QuestionType,test_questions.Question,test_questions.ModelAnswer,tests_answer.QuestionAnswer ';
                    $OnStatement    = ' test_questions.QuestionID = tests_answer.QuestionID ';
                    $WhereStatement = " StudentUserName =  '".$UserName."' and test_questions.TestID =  '".$TestID."' ";
                    $StudentExam    = $_Test->QuestionTable_Inner_AnswerTable($selects,$OnStatement,$WhereStatement);
                    //var_dump($StudentExam);
                    $counter        = count($StudentExam);
                    $FullMark       = $counter;
                    $answers        = array();
                    $z              = 0;
                    $m              = 0;

                    for ($i=0; $i <$counter ; $i++) 
                    { 
                      echo '<tr>';

                      echo '<td>'.$i.'</td>';
                      echo '<td>'.$StudentExam[$i]['Question'].'</td>';
                      echo '<td>'.$StudentExam[$i]['ModelAnswer'].'</td>';
                      echo '<td>'.$StudentExam[$i]['QuestionAnswer'].'</td>';

                      
                      if ($StudentExam[$i]['QuestionType'] == 'Choice') 
                      {
                          if ($StudentExam[$i]['ModelAnswer'] == $StudentExam[$i]['QuestionAnswer']) 
                          {
                            echo '<td >
                                <i class="fa fa-check" style="color: rgba(2, 150, 2, 0.56);"></i>
                              </td>';
                            $answers[$i] = 'true'; 

                          }
                          else
                          {
                            echo '<td >
                                <i class="fa fa-times" style="color: rgba(150, 2, 8, 0.56);"></i>
                              </td>';
                              $answers[$i] = 'false';
                          }
                        }

                        if ($StudentExam[$i]['QuestionType'] == 'fill') 
                        {
                          if ($StudentExam[$i]['ModelAnswer'] == $StudentExam[$i]['QuestionAnswer']) 
                          {
                            echo '<td >
                                <i class="fa fa-check" style="color: rgba(2, 150, 2, 0.56);"></i>
                              </td>';
                            $answers[$i] = 'true';
                          }
                          else
                          {
                            echo '<td >
                                <i class="fa fa-times" style="color: rgba(150, 2, 8, 0.56);"></i>
                              </td>';
                              $answers[$i] = 'false';
                          }
                        }
 
                        if ($StudentExam[$i]['QuestionType'] == 'yes_or_no') 
                        {
                          if ($StudentExam[$i]['ModelAnswer'] == $StudentExam[$i]['QuestionAnswer']) 
                          {
                              echo '<td >
                                <i class="fa fa-check" style="color: rgba(2, 150, 2, 0.56);"></i>
                                </td>';
                              $answers[$i] = 'true';
                          }
                          else
                          {
                            echo '<td >
                                <i class="fa fa-times" style="color: rgba(150, 2, 8, 0.56);"></i>
                              </td>';
                        }
                        $answers[$i] = 'false';
                      }
                      if ($StudentExam[$i]['QuestionType'] == 'text')
                      {
                         echo '<td>
                          <select id="'.$z.'" name="'.$z.'">
                                <option name="true">True</option>
                                <option name="false">False</option>
                          </select>
                         </td>';
                         $z++;
                      }   
                           
                      echo '<td>
                          <select id="x'.$i.'" name="x'.$i.'">
                              <option name="1">1</option>
                              <option name="2">2</option>
                              <option name="3">3</option>
                              <option name="4">4</option>
                              <option name="5">5</option>
                              <option name="6">6</option>
                              <option name="7">7</option>
                              <option name="8">8</option>
                              <option name="9">9</option>
                              <option name="10">10</option>
                          </select>
                         </td>';

                      echo '<tr>';
                    }

                    $_SESSION['answers']    = $answers;
                    $_SESSION['n_questions']  = $i;

                  ?>
                  <tr>
                    <td></td><td></td><td></td><td></td>
                    <td><input Type="Submit" id="mark_exam" name="mark_exam"></td>
                  </tr> 

                  

                                </tbody>
                              </table>
                              <form>
                            </div>
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