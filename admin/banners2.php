<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require 'lib/banners.php';
  $_ban = new Banners();
  $banners = $_ban->get_all();
      require_once 'funcs/auth.php';
      if($adminVeiwBan == 0)
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
    <title>SSMS - Banners</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                  <div class="row" align="">
                      <div class="col-sm-11">
                        <div class="panel panel-default">
                          
                            <?php 
                              $_enc = new Encryption();
                              $HomePage =$_enc->encode('HomePage');
                              $Mission =$_enc->encode('Mission');
                              $Vission =$_enc->encode('Vission');
                              $Career =$_enc->encode('Career');
                              $Proposals =$_enc->encode('Proposals');
                              $Contact_us =$_enc->encode('Contact_us');
                              $News =$_enc->encode('News');
                              $KG_Home =$_enc->encode('KG_Home');
                              $Primary_Home =$_enc->encode('Primary_Home');
                              $Preparatory_Home =$_enc->encode('Preparatory_Home');
                              $Secondary_Home =$_enc->encode('Secondary_Home');
                              $KG_Subjects =$_enc->encode('KG_Subjects');
                              $Primary_Subjects =$_enc->encode('Primary_Subjects');
                              $Preparatory_Subjects =$_enc->encode('Preparatory_Subjects');
                              $Secondary_Subjects =$_enc->encode('Secondary_Subjects');
                              $KG_Grades =$_enc->encode('KG_Grades');
                              $Primary_Grades =$_enc->encode('Primary_Grades');
                              $Preparatory_Grades =$_enc->encode('Preparatory_Grades');
                              $Secondary_Grades =$_enc->encode('Secondary_Grades');
                              $KG_Gallery =$_enc->encode('KG_Gallery');
                              $Primary_Gallery =$_enc->encode('Primary_Gallery');
                              $Preparatory_Gallery =$_enc->encode('Preparatory_Gallery');
                              $Secondary_Gallery =$_enc->encode('Secondary_Gallery');
                              $KG_Birthdays =$_enc->encode('KG_Birthdays');
                              $Primary_Birthdays =$_enc->encode('Primary_Birthdays');
                              $Preparatory_Birthdays =$_enc->encode('Preparatory_Birthdays');
                              $Secondary_Birthdays =$_enc->encode('Secondary_Birthdays');
                              $FAQ =$_enc->encode('FAQ');
                            ?>
                             
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Home Page                    </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $HomePage ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Mission Page                 </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Mission ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Vission Page                 </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Vission ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Career Page                  </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Career ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Proposals Page               </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Proposals ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Contact US Page              </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Contact_us ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">News Page                    </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $News ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG Home Page                 </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Home ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary Home Page            </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Home ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory Home Page        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Home ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary Home Page          </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Home ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG Subjects Page             </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Subjects ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary Subjects Page        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Subjects ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory Subjects Page    </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Subjects ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary Subjects Page      </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Subjects ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG Grades Page               </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Grades ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary Grades Page          </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Grades ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory Grades Page      </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Grades ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary Grades Page        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Grades ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG Gallery Page              </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Gallery ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary Gallery Page         </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Gallery   ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory Gallery Page     </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Gallery ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary Gallery Page       </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Gallery ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG Birthdays Page            </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Birthdays ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary Birthdays Page       </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Birthdays ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory Birthdays Page   </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Birthdays ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary Birthdays Page     </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Birthdays ?>">Add Banners</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">FAQ Page                     </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $FAQ ?>">Add Banners</a></div></div>
                          
                      </div>
                     </div>

                    
                    
                    
                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       