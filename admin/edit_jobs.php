<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  require 'lib/jobs.php';
  require 'lib/Encryption.php';
  
  $_enc = new Encryption(); 
  $_jobs = new jobs();

  $id = $_enc->decode($_GET['job_name']);
  $_SESSION['job_id'] = $_GET['job_name'];
  $search_by = 'id';
  $value = $id; 
  $jobs = $_jobs->get_jobdata($search_by,$value);
  require_once 'funcs/auth.php';
      if($adminVeiwJob == 0)
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
    

    <title>SSMS - Jobs</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                  <a href="jobs.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i class="md md-edit"> </i> Edit Jobs</a>
                  <br><br>
                    <!-- Page-Title -->
                    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Jobs</h3>

            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="add_job" name="add_job" method="post" enctype="multipart/form-data" action="funcs/jobs_functions.php" novalidate="novalidate">
                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Job Title *</label>
                        <div class="col-lg-10">
                            <input class="form-control" value="<?php echo $jobs[0]['title_english'] ?>" placeholder="English text .." id="title_english" name="title_english" type="text" required="" aria-required="true"></div>
                        </div>
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" value="<?php echo $jobs[0]['title_arabic'] ?>" placeholder="Arabic text .." id="title_arabic" name="title_arabic" type="text" required="" aria-required="true"></div>
                        </div>


                     <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Short Description *</label>
                                <div class="col-lg-10"><textarea class="form-control"  placeholder="English text .." id="short_description_english" name="short_description_english" required="" aria-required="true"><?php echo $jobs[0]['short_description_english'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" value="" placeholder="Arabic text .." id="short_description_arabic" name="short_description_arabic" required="" aria-required="true"><?php echo $jobs[0]['short_description_arabic'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Long Description *</label>
                                <div class="col-lg-10"><textarea class="form-control" value="" placeholder="English text .." id="long_description_english" name="long_description_english" required="" aria-required="true"><?php echo $jobs[0]['long_description_english'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" value="" placeholder="Arabic text .." id="long_description_arabic" name="long_description_arabic" required="" aria-required="true"><?php echo $jobs[0]['long_description_arabic'] ?></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2">Skills</label>
                                <div class="col-lg-10"><textarea class="form-control" value="" placeholder="English text .." id="english_skills" name="english_skills" required="" aria-required="true"><?php echo $jobs[0]['english_skills'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ccomment" class="control-label col-lg-2"></label>
                                <div class="col-lg-10"><textarea class="form-control" value="" placeholder="Arabic text .." id="arabic_skills" name="arabic_skills" required="" aria-required="true"><?php echo $jobs[0]['arabic_skills'] ?></textarea>
                                </div>
                            </div>


                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Salary</label>
                        <div class="col-lg-2">
                            <input class="form-control" placeholder="" id="Salary" value="<?php echo $jobs[0]['salary'] ?>" name="Salary" type="text" required="" aria-required="true"></div>
                        </div>

                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Number of Vacancies</label>
                        <div class="col-lg-2">
                            <input class="form-control" placeholder="" value="<?php echo $jobs[0]['Vacancies'] ?>" id="Vacancies" name="Vacancies" type="text" required="" aria-required="true"></div>
                        </div>
                        
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Expiry Date</label>
                        <div class="col-lg-2">
                           <input type="text" id="datepicker" value="<?php echo $jobs[0]['ExpiryDate'] ?>" name="ExpiryDate"></p>
                        </div>  
                        </div>



                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Job Ref.</label>
                        <div class="col-lg-2">
                            <input class="form-control" value="<?php echo $jobs[0]['Ref'] ?>" placeholder="" id="Ref" name="Ref" type="text" required="" aria-required="true">
                        </div>
                        </div>

                      
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="edit_job" id="edit_job" type="submit">Save</button>
                                    <button class="btn btn-default waves-effect" type="cancel">Cancel</button>
                                </div>
                             </div>
                            
                    

                         </form>


                     </div>
                 </div>
             </div>
         </div>
     </div>



 



            <!-- content -->
<?php require "inc/footer.php" ?>       