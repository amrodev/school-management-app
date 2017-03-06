<!--start section-->
<div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <div class="nicdark_space20"></div>
            <p class="white">© Copyright 2016 by MIPS
        </div>


        <div class="grid grid_6">
            <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <?php
                  require_once '../admin/lib/params.php';
                  $_param = new Params();
                  $facebook_url = $_param->get_data('type','facebook_url');
                  $twitter_url  = $_param->get_data('type','twitter_url' );
                  $youtube_url  = $_param->get_data('type','youtube_url' );
                ?>
                <div class="nicdark_margin10">
                    <a href="<?php echo $facebook_url[0]['content']; ?>" class="nicdark_facebook nicdark_press right nicdark_btn_icon small nicdark_radius white"><i class="icon-facebook-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="<?php echo $youtube_url[0]['content']; ?>" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i class="icon-gplus"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="<?php echo $twitter_url[0]['content']; ?>" class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i class="icon-twitter-1"></i></a>
                </div><div class="nicdark_margin10">
                    <a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i class="icon-up-outline"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section-->        </div>
    </div>

    <!--main-->
    <script src="js/main/jquery.min.js"></script> <!--Jquery-->
    <script src="js/main/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/main/excanvas.js"></script> <!--canvas need for ie-->

    <!--plugins-->
    <script src="js/plugins/revslider/jquery.themepunch.tools.min.js"></script> <!--revslider-->
    <script src="js/plugins/revslider/jquery.themepunch.revolution.min.js"></script> <!--revslider-->

    <!--menu-->
    <script src="js/plugins/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/plugins/menu/tinynav.min.js"></script> <!--tinynav-->

    <!--other-->
    <script src="js/plugins/isotope/isotope.pkgd.min.js"></script> <!--isotope-->
    <script src="js/plugins/mpopup/jquery.magnific-popup.min.js"></script> <!--mpopup-->
    <script src="js/plugins/scroolto/scroolto.js"></script> <!--Scrool To-->
    <script src="js/plugins/nicescrool/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/plugins/inview/jquery.inview.min.js"></script> <!--inview-->
    <script src="js/plugins/parallax/jquery.parallax-1.1.3.js"></script> <!--parallax-->
    <script src="js/plugins/countto/jquery.countTo.js"></script> <!--jquery.countTo-->
    <script src="js/plugins/countdown/jquery.countdown.js"></script> <!--countdown-->
    
    <!--settings-->
    <script src="js/settings.js"></script> <!--settings-->
<!--custom js-->
<script type="text/javascript">
	jQuery(document).ready(function() {

		//START PARALLAX SECTIONS
		$('#nicdark_parallax_title').parallax("50%", 0.3);
		//END PARALLAX SECTIONS

	});
</script>
<!--custom js-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>

 <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
        <script src="../lib/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
        <script src="../lib/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
        
        <script type="text/javascript" charset="utf-8">
            $(function(){
                jQuery('#maximage').maximage();
            });
        </script>
        
        <script type="text/javascript">
            
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-733524-1']);
          _gaq.push(['_trackPageview']);
            
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>


</body>  

<!-- Mirrored from www.nicdarkthemes.com/themes/baby-kids/html/demo/components-focus.php by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 24 Jan 2016 15:11:16 GMT -->
</html>