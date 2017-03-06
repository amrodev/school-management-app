<?php require 'inc/head.php' ?>    
    <title>Baby Kids - </title> 
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8" /> 
    <!--insert your title here-->  
<?php
  require 'inc/head_menu.php';
  
?>

<?php
  $page = $_GET['section'].'_Gallery';
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
?>

<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8" style="">
    
    <div class="nicdark_filter greydark"  style=" background: url(img/<?php echo $border; ?>) 100%; ">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12" style="width: 400px;margin-left: -10px;">
                
                <div class="nicdark_space10"></div>
                <div class="nicdark_space10"></div>
                <div class="nicdark_space10"></div>
                 <a href="index-2.html"><img height="300" alt="" src=""></a>
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
    <div class="nicdark_container nicdark_clearfix">




        <div class="grid grid_12">
            <h3 class="subtitle greydark">Gallery</h3>
            <div class="nicdark_divider left small"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        
        <?php
          require '../../admin/lib/Encryption.php';
          require '../../admin/lib/gallery.php';

          $_gallery = new Gallery();
          $_enc     = new Encryption();
          
          $sec = $_GET['section'];
          $albums = $_gallery->get_by_where('section',$sec);
          $counter = count($albums);
          if (isset($albums)) 
          {
            for ($i=0; $i <$counter ; $i++) 
            { 
                echo '<div class="grid grid_3">
                <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">';
                $enc_id = $_enc->encode($albums[$i]['id']);
                echo '<a href="photos.php?color='.$_GET['color'].'&section='.$_GET['section'].'&id='.$enc_id.'">';
                echo '<img alt="" src="../../'.$albums[$i]['photo'].'">';
                echo '</a>';
                echo '<div class="nicdark_margin20">';
                echo '<h4 class="white">'.$albums[$i]['title_english'].'</h4>';
                echo '<div class="nicdark_space20"></div>
                </div>
            </div>
        </div>';
            }
          }
        ?>

        
                
                
                    
                    



      


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