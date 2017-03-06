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
    <title>SSMS - Events</title>
    
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
                    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add New Event</h3>
            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="add_event" name="add_event" method="post" enctype="multipart/form-data" action="funcs/events_functions.php" novalidate="novalidate">
                    
                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Title *</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="English text .." id="title_english" name="title_english" type="text" required="" aria-required="true"></div>
                        </div>

                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Arabic text .." id="title_arabic" name="title_arabic" type="text" required="" aria-required="true"></div>
                  </div>

                  <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Event Link *</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Event Link English" id="linkEN" name="linkEN" type="text" required="" aria-required="true"></div>
                  </div>
                   <div class="form-group">
                        <label for="cname" class="control-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Event Link Arabic " id="linkAR" name="linkAR" type="text" required="" aria-required="true"></div>
                  </div>
                        
                       

                 

                  


                   <div class="form-group">
                        <label for="cname" class="control-label col-lg-2">Event Date</label>
                        <div class="col-lg-10">
                            <select class="btn btn-success waves-effect waves-light" id="day" name="day">
                             <option value="">Day</option>
                            <?php
                              $maxDays = date('t');
                              for ($i=1; $i <$maxDays+1 ; $i++) 
                              {
                                if ($i < 10) 
                                {
                                  echo '<option value="0'.$i.'">0'.$i.'</option>';
                                }
                                else{
                                  echo '<option value="'.$i.'">'.$i.'</option>';
                                } 
                                
                              }
                             ?>
                            </select>

                            <select class="btn btn-success waves-effect waves-light" id="month" name="month">
                              <option value="">Month</option>
                              <option value="01">01</option>
                              <option value="02">02</option>   
                              <option value="03">03</option> 
                              <option value="04">04</option>
                              <option value="05">05</option>  
                              <option value="06">06</option>  
                              <option value="07">07</option>  
                              <option value="08">08</option>  
                              <option value="09">09</option>  
                              <option value="10">10</option>  
                              <option value="11">11</option>  
                              <option value="12">12</option>
                            </select>        
                        </div>                        
                  </div>


                     

                             

                            
                        
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success waves-effect waves-light" name="add_event" id="add_event" type="submit">Save</button>
                                     <button class="btn btn-default waves-effect" type="cancel">Cancel</button>
                                 </div>
                             </div>
                            


















                          

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>







                    <!-- Pls Remove -->
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       