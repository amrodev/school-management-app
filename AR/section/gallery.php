<?php require 'inc/head.php' ?>      
<title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->  
<link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8" /> 

<?php require 'inc/head_menu.php' ?>
<?php
  require 'inc/head_menu.php';
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
<section id="nicdark_parallax_title" class="" style="background: url(<?php echo '../../'.$banners[0]['image']; ?>) 50% 0 fixed;">
    
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


        <div class="nicdark_space50"></div>


        <div class="grid grid_12" align="right">
            <h3 class="subtitle greydark">معرض الصور</h3>
            <div class="nicdark_divider right small"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        
        <?php
          require '../../admin/lib/Encryption.php';
          require '../../admin/lib/gallery.php';

          $_gallery = new Gallery();
          $_enc     = new Encryption();
          
          $albums = $_gallery->get_by_where('section','KG');
          $counter = count($albums);
          if (isset($albums)) 
          {
            for ($i=0; $i <$counter ; $i++) 
            {
               $enc_id = $_enc->encode($albums[$i]['id']); 
                echo '<div class="grid grid_3">
                <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">';
                echo '<a href="photos.php?album=" >';
                echo '<img alt="" src="../../'.$albums[$i]['photo'].'">';
                echo '<div class="nicdark_margin20" style="">';
                echo '<h4 class="white">'.$albums[$i]['title_arabic'].'</h4>';
                echo '</a>';
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