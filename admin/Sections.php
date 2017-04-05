<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {

    require_once 'funcs/auth.php';
      if($adminVeiwSec == 0)
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
    <title>SSMS - Sections</title>
    
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
                    <div class="col-md-12">
                            <div class="panel panel-border panel-primary">
                                <div class=" panel-heading">
                                    <h3 class="panel-title">
                                        Check Sections</h3>
                                        <h6> Select Sections with thiere themes</h6>
                                        <br>
                                </div>

                                <?php
                                  require 'lib/sections.php';
                                  $_sections = new Sections();                      
                                  $sections = $_sections->get_all();
                                  //var_dump($sections);
                                  ///////////////////////////////////////////////
                                  if ($sections[0]['enabled'] == 0) 
                                  {
                                    $PreSchool = '';
                                  }
                                  if ($sections[0]['enabled'] == 1) 
                                  {
                                    $PreSchool = 'checked=""';
                                  }
                                  /////////////////////////////////////////////// 

                                  ///////////////////////////////////////////////
                                  if ($sections[1]['enabled'] == 0) 
                                  {
                                    $KG = '';
                                  }
                                  if ($sections[1]['enabled'] == 1) 
                                  {
                                    $KG = 'checked=""';
                                  }
                                  ///////////////////////////////////////////////

                                  ///////////////////////////////////////////////
                                  if ($sections[2]['enabled'] == 0) 
                                  {
                                    $Primary = '';
                                  }
                                  if ($sections[2]['enabled'] == 1) 
                                  {
                                    $Primary = 'checked=""';
                                  }
                                  ///////////////////////////////////////////////

                                  ///////////////////////////////////////////////
                                  if ($sections[3]['enabled'] == 0) 
                                  {
                                    $Preparatory = '';
                                  }
                                  if ($sections[3]['enabled'] == 1) 
                                  {
                                    $Preparatory = 'checked=""';
                                  }
                                  ///////////////////////////////////////////////

                                  ///////////////////////////////////////////////
                                  if ($sections[4]['enabled'] == 0) 
                                  {
                                    $Secondary = '';
                                  }
                                  if ($sections[4]['enabled'] == 1) 
                                  {
                                    $Secondary = 'checked=""';
                                  }
                                  ///////////////////////////////////////////////



                                ?>
     
                                 
                            <form  id="select_section" name="select_section" method="post" enctype="multipart/form-data" action="funcs/section_functions.php" novalidate="novalidate">  

                                <div class="panel-body" style="background:#FFF8DC;">

                                  

                                    <div class="checkbox checkbox-square">
                                        <input id="Pre_School" <?php echo $PreSchool; ?> type="checkbox" name="Pre_School"><label for="checkbox7"><b>PreSchool- رياض اطفال</b></label></div>
                                        
                                            <div class="form-group">
                                               
                                                <div class="col-lg-5">
                                                    <select class="form-control" id="Pre_School_theme" name="Pre-School_theme">
                                                        <option> <?php echo $sections[0]['theme']; ?> </option>
                                                        <option style="background-color:#772929;">Maroon</option>
                                                        <option style="background-color:#f72020;">Red</option> 
                                                        <option style="background-color:#ed1093;">Pink</option> 
                                                        <option style="background-color:#de974b;">Orange</option> 
                                                        <option style="background-color:#669d1e;">Dark Green</option> 
                                                        <option style="background-color:#9ab477;">Green</option> 
                                                        <option style="background-color:#ee865f;">Dark Orange</option> 
                                                        <option style="background-color:#734822;">Brown</option>
                                                        <option style="background-color:#397aba;">Blue</option>
                                                        <option style="background-color:#232323;">Black</option>
                                                        <option style="background-color:#efed5b;">Yellow</option>
                                                        <option style="background-color:#9e9e9e;">Silver</option>
                                                        <option style="background-color:#c994d3;">Plum</option>
                                                        <option style="background-color:#8cd6ce;">Turquoise</option>                                                                                                                  
                                                    </select>
                                                </div>
                                            </div>

                                        
                                        
                                        <button name="show" id="show" class="btn btn-icon waves-effect waves-light btn-primary m-b-5">
                                        <i class="md-pageview"></i>
                                        </button>
                                        <br><br>

                                        <div class="checkbox checkbox-square">
                                        <input id="KG" <?php echo $KG; ?> type="checkbox" name="KG" ><label for="checkbox7"><b>KG- تمهيدي</b></label></div>
                                           <div class="form-group">
                                               
                                                <div class="col-lg-5">
                                                    <select class="form-control" id="KG_theme" name="KG_theme">
                                                        <option> <?php echo $sections[1]['theme']; ?> </option>
                                                        <option style="background-color:#772929;">Maroon</option>
                                                        <option style="background-color:#f72020;">Red</option> 
                                                        <option style="background-color:#ed1093;">Pink</option> 
                                                        <option style="background-color:#de974b;">Orange</option> 
                                                        <option style="background-color:#669d1e;">Dark Green</option> 
                                                        <option style="background-color:#9ab477;">Green</option> 
                                                        <option style="background-color:#ee865f;">Dark Orange</option> 
                                                        <option style="background-color:#734822;">Brown</option>
                                                        <option style="background-color:#397aba;">Blue</option>
                                                        <option style="background-color:#232323;">Black</option>
                                                        <option style="background-color:#efed5b;">Yellow</option>
                                                        <option style="background-color:#9e9e9e;">Silver</option>
                                                        <option style="background-color:#c994d3;">Plum</option>
                                                        <option style="background-color:#8cd6ce;">Turquoise</option>                                                                                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <button name="show" id="show" class="btn btn-icon waves-effect waves-light btn-primary m-b-5">
                                        <i class="md-pageview"></i>
                                        </button>
                                            <br><br>

                                        <div class="checkbox checkbox-square">
                                        <input id="Primary" <?php echo $Primary; ?> type="checkbox" name="Primary"><label for="checkbox7"><b>Primary- ابتدائي</b></label></div>
                                            <div class="form-group">
                                               
                                                <div class="col-lg-5">
                                                    <select class="form-control" id="Primary_theme" name="Primary_theme">
                                                        <option> <?php echo $sections[2]['theme']; ?> </option>
                                                        <option style="background-color:#772929;">Maroon</option>
                                                        <option style="background-color:#f72020;">Red</option> 
                                                        <option style="background-color:#ed1093;">Pink</option> 
                                                        <option style="background-color:#de974b;">Orange</option> 
                                                        <option style="background-color:#669d1e;">Dark Green</option> 
                                                        <option style="background-color:#9ab477;">Green</option> 
                                                        <option style="background-color:#ee865f;">Dark Orange</option> 
                                                        <option style="background-color:#734822;">Brown</option>
                                                        <option style="background-color:#397aba;">Blue</option>
                                                        <option style="background-color:#232323;">Black</option>
                                                        <option style="background-color:#efed5b;">Yellow</option>
                                                        <option style="background-color:#9e9e9e;">Silver</option>
                                                        <option style="background-color:#c994d3;">Plum</option>
                                                        <option style="background-color:#8cd6ce;">Turquoise</option>                                                                                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <button name="show" id="show" class="btn btn-icon waves-effect waves-light btn-primary m-b-5">
                                        <i class="md-pageview"></i>
                                        </button>
                                            <br><br>

                                        <div class="checkbox checkbox-square">
                                        <input id="Preparatory" <?php echo $Preparatory; ?> type="checkbox" name="Preparatory" ><label for="checkbox7"><b>Preparatory- اعدادي</b></label></div>
                                            <div class="form-group">
                                               
                                                <div class="col-lg-5">
                                                    <select class="form-control" id="Preparatory_theme" name="Preparatory_theme">
                                                        <option> <?php echo $sections[3]['theme']; ?> </option>
                                                        <option style="background-color:#772929;">Maroon</option>
                                                        <option style="background-color:#f72020;">Red</option> 
                                                        <option style="background-color:#ed1093;">Pink</option> 
                                                        <option style="background-color:#de974b;">Orange</option> 
                                                        <option style="background-color:#669d1e;">Dark Green</option> 
                                                        <option style="background-color:#9ab477;">Green</option> 
                                                        <option style="background-color:#ee865f;">Dark Orange</option> 
                                                        <option style="background-color:#734822;">Brown</option>
                                                        <option style="background-color:#397aba;">Blue</option>
                                                        <option style="background-color:#232323;">Black</option>
                                                        <option style="background-color:#efed5b;">Yellow</option>
                                                        <option style="background-color:#9e9e9e;">Silver</option>
                                                        <option style="background-color:#c994d3;">Plum</option>
                                                        <option style="background-color:#8cd6ce;">Turquoise</option>                                                                                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <button name="show" id="show" class="btn btn-icon waves-effect waves-light btn-primary m-b-5">
                                        <i class="md-pageview"></i>
                                        </button>
                                            <br><br>

                                       <div class="checkbox checkbox-square">
                                        <input id="Secondary" <?php echo $Secondary; ?> type="checkbox" name="Secondary" ><label for="checkbox7"><b>Secondary- ثانوي</b></label></div>
                                   <div class="form-group">
                                               
                                                <div class="col-lg-5">
                                                    <select class="form-control" id="Secondary_theme" name="Secondary_theme">
                                                        <option> <?php echo $sections[4]['theme']; ?> </option>
                                                        <option style="background-color:#772929;">Maroon</option>
                                                        <option style="background-color:#f72020;">Red</option> 
                                                        <option style="background-color:#ed1093;">Pink</option> 
                                                        <option style="background-color:#de974b;">Orange</option> 
                                                        <option style="background-color:#669d1e;">Dark Green</option> 
                                                        <option style="background-color:#9ab477;">Green</option> 
                                                        <option style="background-color:#ee865f;">Dark Orange</option> 
                                                        <option style="background-color:#734822;">Brown</option>
                                                        <option style="background-color:#397aba;">Blue</option>
                                                        <option style="background-color:#232323;">Black</option>
                                                        <option style="background-color:#efed5b;">Yellow</option>
                                                        <option style="background-color:#9e9e9e;">Silver</option>
                                                        <option style="background-color:#c994d3;">Plum</option>
                                                        <option style="background-color:#8cd6ce;">Turquoise</option>                                                                                                                  
                                                    </select>
                                                </div>
                                            </div>
                                           <button name="show" id="show" class="btn btn-icon waves-effect waves-light btn-primary m-b-5">
                                        <i class="md-pageview"></i>
                                        </button>

                                            <br><br><br><br>
                                               <?php 
                                               if($adminAddSec == 1)
                                               {
                                                echo '<button class="btn btn-success waves-effect waves-light" name="select_section" id="select_section" type="submit">Save</button>';
                                               }
                                               
                                               ?>
                                                

                                </div>
                            </div>
                        </form>
                        </div>
                    <!-- Pls Remove -->
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       