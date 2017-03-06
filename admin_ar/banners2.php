<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  require 'lib/banners.php';
  $_ban = new Banners();
  $banners = $_ban->get_all();
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

                  <div class="row" align="right">
                      <div class="col-sm-11" style="">
                          
                            <?php
                              require 'lib/Encryption.php'; 
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
                             
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">الصفحة الرئيسية                    </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $HomePage ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة الرسالة                 </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Mission ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة الرؤية                 </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Vission ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة الوظائف                  </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Career ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة الشكاوى والاقتراحات               </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Proposals ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة  اتصل بنا             </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Contact_us ?>">ااضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة صفحة الاخبار                   </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $News ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG صفحة                  </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Home ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">الصفحة الرئيسية للمرحلة الابتدائية           </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Home ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">الصفحة الرئيسية للمرحلة الاعدادية        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Home ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">الصفحة الرئيسية للمرحلة الثانوية          </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Home ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG صفحة المواد             </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Subjects ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary صفحة المواد         </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Subjects ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory صفحة المواد     </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Subjects ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary صفحة المواد       </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Subjects ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG صفحة الدرجات                </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Grades ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary صفحة الدرجات          </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Grades ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory صفحة الدرجات      </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Grades ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary صفحة الدرجات        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Grades ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">KG صفحة معرض الصور               </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $KG_Gallery ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Primary صفحة معرض الصور          </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Primary_Gallery   ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Preparatory صفحة معرض الصور      </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Preparatory_Gallery ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">Secondary صفحة معرض الصور        </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $Secondary_Gallery ?>">اضافة بانر جديدة</a></div></div>
                              <div class="col-sm-6 col-md-6 col-lg-3"><div class="price_card text-center"><div class="pricing-header bg-pink"><br><span class="name">صفحة الاسئلة المتكررة                     </span> </div><br><a class="btn btn-pink w-md waves-effect waves-light" href="add_banners.php?b=<?php echo $FAQ ?>">اضافة بانر جديدة</a></div></div>
                          
                     </div>

                    
                    
                    
                    
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       