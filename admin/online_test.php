<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
   require 'lib/tests.php';
}
else{
  header("Location: index.php");
  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>SSMS - Online Test</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4>
                          <?php 
                            $_test   = new Tests();
                            $_enc    = new Encryption();
                            $_TestID = $_enc->decode($_GET['ID']);
                            $Test  = $_test->GetTestData('TestID',$_TestID);
                            echo  $Test[0]['TestSubject'].' - '.$Test[0]['TestName'];
                            echo ' ( '.$_SESSION['admin_username']. ' )';
                          ?>
                        </h4>
                      </div>
                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="width:50%">Question </th>
                              <th>Answer </th>
                            </tr>
                          </thead>
                          <tbody>
                            <form class="cmxform form-horizontal tasi-form" id="answer_exam" name="answer_exam" method="post" enctype="multipart/form-data" action="funcs/exam_functions.php" novalidate="novalidate">
                            <?php

                             
                              
                              $_questions = new Tests();
                              $_enc       = new Encryption();

                              $TestID     = $_enc->decode($_GET['ID']);
                              $_SESSION['TestID'] = $TestID;
                              $Questions  = $_questions->GetAllQuestionsByWhere('TestID',$TestID);
                              $_SESSION['Questions'] = $Questions;
                              $counter    = count($Questions);

                              for ($i=0; $i <$counter ; $i++) 
                              {
                                $x= $i+1; 
                                echo '<tr>';
                                echo '<td>'.'('.$x.') '.$Questions[$i]['Question'].'</td>';

                                switch ($Questions[$i]['QuestionType']) {
                                  case 'Choice':
                                    echo '<td>';
                                    echo '<input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="'.$Questions[$i]['AnswerChoice1'].'" > '.$Questions[$i]['AnswerChoice1'].'<br>
                                          <input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="'.$Questions[$i]['AnswerChoice1'].'" > '.$Questions[$i]['AnswerChoice2'].'<br>
                                          <input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="'.$Questions[$i]['AnswerChoice1'].'" > '.$Questions[$i]['AnswerChoice3'].'<br>
                                          <input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="'.$Questions[$i]['AnswerChoice1'].'" > '.$Questions[$i]['AnswerChoice4'].'';  
                                    echo '</td>';
                                    break;

                                  case 'text':
                                    echo '<td>';
                                    echo '<textarea  id="'.$Questions[$i]['QuestionID'].'"  name="'.$Questions[$i]['QuestionID'].'" style="width:480px;height: 142px;"></textarea> ';  
                                    echo '</td>';
                                    break; 

                                  case 'yes_or_no':
                                     echo '<td>';
                                    echo '<input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="Yes" >Yes<br>
                                          <input type="radio" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" value="No"  >No<br>';  
                                    echo '</td>';
                                    break;

                                  case 'fill':
                                    echo '<td>';
                                    echo '<input type="text" id="'.$Questions[$i]['QuestionID'].'" name="'.$Questions[$i]['QuestionID'].'" style="width:480px;" />';  
                                    echo '</td>';
                                    break;  
                                  
                                  
                                }
                                echo '</tr>';
                              }

                              
                            ?>
                          </tbody>
                        </table>
                        <br><br><br><br>
                        <input type="submit" name="answer_exam" id="answer_exam" value="Finish " class="btn btn-block btn-lg btn-primary">
                      </form>
                      </div>
                    </div>
                   
                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       