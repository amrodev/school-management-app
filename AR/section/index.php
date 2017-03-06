<?php require 'inc/head.php' ?>    
    <title>Baby Kids - NicDarkThemes.com</title> 
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8" /> 
    <!--insert your title here-->  
<?php
  require 'inc/head_menu.php';
  $page = $_GET['section'].'_Home';
  require '../../admin/lib/banners.php';
  $_ban = new Banners();
  $banners = $_ban->GetBanners('page',$page);
  $counter = count($banners);
  echo '<div id="maximage">';
  for ($i=0; $i <$counter ; $i++) 
  { 
    echo '<img src="../../'.$banners[$i]['image'].'" alt=""  />';
  }
  echo '</div>';
  $_params  = new Params();
  $params   = $_params->get_data('type','best_grades');
  if ($params[0]['content'] == 0) 
  {
    $best_grades = false;
  }
  else
    $best_grades = true;

  $params   = $_params->get_data('type','STAR');
  if ($params[0]['content'] == 0) 
  {
    $STAR = false;
  }
  else
    $STAR = true;

  $params   = $_params->get_data('type','videos');
  if ($params[0]['content'] == 0) 
  {
    $VideosShow = false;
  }
  else
    $VideosShow = true;

  $params   = $_params->get_data('type','Galleries');
  if ($params[0]['content'] == 0) 
  {
    $Galleries = false;
  }
  else
    $Galleries = true;
?>

<!--start section-->
<section id="nicdark_parallax_title" class="" >
    
    <div class="nicdark_filter greydark"  style=" background: url(img/<?php echo $border; ?>) 100%; ">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12" style="width: 400px;margin-left: -10px;">
                
                <div class="nicdark_space10"></div>
                <div class="nicdark_space10"></div>
                <div class="nicdark_space10"></div>
                <img height="300" alt="" src="">
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section" style="background-color: <?php echo $color_code ?>">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix" align="right">




       <div class="nicdark_container nicdark_clearfix">




        

     
       


     

        
        

   </div>


   </div>



   
        
        

        
                
                
                    
                    



      


        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section> 








<section class="nicdark_section" style="background-color: <?php echo $color_code ?>">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix" align="right">


        <div class="nicdark_space50"></div>


       <div class="nicdark_container nicdark_clearfix">


        <?php 
          if ($best_grades) 
          {
            echo '<div class="grid grid_12">
            <h1 class="subtitle greydark">الطالب المثالى</h1>            
        </div>

        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img1.jpg">
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="single-teacher.html">JULIETTE LIGHT</a> <p class="white">Class : A </p> </h4>                        
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <br><br><br>
                     <h2 style="font-size: 90px; color: white;">90%</h2>
                    </div>
                </div>
            </div>
        </div>
       <br><br><br>';
          }
        ?>
        





   <div class="nicdark_space50"></div>

        <?php 
          if ($STAR) 
          {
            echo '<div class="grid grid_12">
            <h1 class="subtitle greydark">نجم الاسبوع - الشهر</h1>            
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img5.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img6.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img7.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img8.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img4.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img3.jpg">
                </div>
            </div>
        </div>
        <div class="grid grid_4" style="margin-right: -240px;">
            <div class="nicdark_archive1 ">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt="" class="nicdark_radius_left nicdark_opacity" src="img/team/img2.jpg">
                </div>
            </div>
        </div>';
          }
        ?>
        





  </div>




   <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


         


        <?php
          require_once '../../admin/lib/videos.php'; 
          $_videos   = new Videos();
          $search_by = 'section';
          $value     = $section;
          $videos    = $_videos->get_videodata($search_by,$value);
          $counter   = count($videos);

          $search_by1 = 'section';
          $value1     = 'All Sections';
          $videos1    = $_videos->get_videodata($search_by,$value);
          $counter1   = count($videos1);

          if ($VideosShow) 
          {
            echo '<div class="grid grid_12">
               <h1 class="subtitle greydark">احدث الفديوهات</h1>            
               </div>';

          if (isset($videos)) 
          {
            for ($i=0; $i <$counter1 ; $i++) 
            { 
               echo '<div class="nicdark_margin100" style=" margin-right: 10px;">
                      <a href="'.$videos[$i]['embaded_code'].'" class="nicdark_zoom nicdark_mpopup_iframe nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white">
                        <img src="'.$videos[$i]['img'].'"  width="300" height="150" />
                      </a>
                     </div>';
            }
          }
          }
          

        ?>

        


        








         <div class="nicdark_space50"></div>


        
        

 <?php
    require_once '../../admin/lib/gallery.php'; 
    $_gall   = new Gallery();
   
   $search_by = 'section';
   $value     = $section;
   $Gall    = $_gall->get_albumdata($search_by,$value);
   $counter   = count($Gall);

   if ($Galleries) 
   {
     echo '<div class="grid grid_12">
            <h1 class="subtitle greydark">احدث الالبومات</h1>            
        </div><br><br><br><br>';

          if (isset($Gall)) 
          {
            for ($i=0; $i <$counter ; $i++) 
            { 
               echo '<div class="nicdark_margin100" style=" margin-right: 10px;">
                      <a href="" >
                        <img src="../../'.$Gall[$i]['photo'].'"  width="300" height="150" />
                      </a>
                     </div>';
            }
          }
   }

   

?>


  </div>
        
        

        
   </div>



   
        
        

        
                
                
                    
                    



      


        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section> 



<!--start section-->
<section class="nicdark_section nicdark_bg_yellow nicdark_shadow">
</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">
</section>
<!--end section-->



<!--end-->


<!--start section-->
<section class="nicdark_section nicdark_bg_greydark">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        

        
        

         


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->


<?php require 'inc/footer.php' ?>