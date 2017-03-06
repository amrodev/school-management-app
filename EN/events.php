<!DOCTYPE html>
<html lang="en">
<head>
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="css/responsive-calendar.css" rel="stylesheet">

    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>

    <meta charset="utf-8">

    <title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

    <!--start section-->
    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $banners = $_ban->GetBanners('page', 'Events');
    $counter = count($banners);
    echo '<div id="maximage">';
    for ($i = 0; $i < $counter; $i++) {
        echo '<img src="../' . $banners[$i]['image'] . '" alt=""  />';
    }
    echo '</div>';
    ?>
    <!--start section-->
    <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8" style="">

        <div class="nicdark_filter greydark" style=" background: url(img/border.png) 100% ">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12" style="width: 400px;margin-left: -10px;">

                    <div class="nicdark_space10"></div>
                    <div class="nicdark_space10"></div>
                    <div class="nicdark_space10"></div>
                    <a href="index-2.html"><img height="300" alt="" src="img/logo.png"></a>
                    <div class="nicdark_space40"></div>
                    <div class="nicdark_space50"></div>
                </div>

            </div>
            <!--end nicdark_container-->

        </div>


    </section>
    <!--end section-->


    <!--start section-->


    <!--start section-->
    <section class="nicdark_section nicdark_bg_yellow nicdark_shadow">

    </section>
    <!--end section-->


    <!--start section-->
    <section class="nicdark_section" style="background-color: #d1e8b2">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_space50"></div>


            <div class="grid grid_12">
                <h1 class="subtitle greydark">OUR Events</h1>
                <div class="nicdark_space20"></div>
            </div>


            <div class="nicdark_archive1 nicdark_bg_grey2 nicdark_radius nicdark_shadow">


            </div>


            <div class="container">
                <div class="responsive-calendar">
                    <div class="controls">
                        <a class="pull-left" data-go="prev">
                            <div style="background-color: #009688;
    border-color: #416D07;" class="btn btn-primary">Prev
                            </div>
                        </a>
                        <h4><span data-head-year></span> <span data-head-month></span></h4>
                        <a class="pull-right" data-go="next">
                            <div style="background-color: #009688;
    border-color: #416D07;" class="btn btn-primary">Next
                            </div>
                        </a>
                        <br>
                    </div>
                    <hr/>
                    <div class="day-headers"
                         style="    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.1), 0 5px 10px rgba(0, 0, 0, 0.68);">
                        <div class="day header">Mon</div>
                        <div class="day header">Tue</div>
                        <div class="day header">Wed</div>
                        <div class="day header">Thu</div>
                        <div class="day header">Fri</div>
                        <div class="day header">Sat</div>
                        <div class="day header">Sun</div>
                    </div>
                    <div class="days" data-group="days" style="background-color: rgba(0,0,0,0.15);
    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.1), 0 5px 10px rgba(0,0,0,0.5);">

                    </div>
                </div>
                <!-- Responsive calendar - END -->
            </div>


            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

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
                    <div class="nicdark_margin10">
                        <a href="#"
                           class="nicdark_facebook nicdark_press right nicdark_btn_icon small nicdark_radius white"><i
                                class="icon-facebook-1"></i></a>
                    </div>
                    <div class="nicdark_margin10">
                        <a href="#"
                           class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i
                                class="icon-gplus"></i></a>
                    </div>
                    <div class="nicdark_margin10">
                        <a href="#"
                           class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i
                                class="icon-twitter-1"></i></a>
                    </div>
                    <div class="nicdark_margin10">
                        <a href="#start_nicdark_framework"
                           class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i
                                class="icon-up-outline"></i></a>
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
        jQuery(document).ready(function () {

            //START PARALLAX SECTIONS
            $('#nicdark_parallax_title').parallax("50%", 0.3);
            //END PARALLAX SECTIONS

        });
    </script>
    <!--custom js-->

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-49425562-7', 'auto');
        ga('send', 'pageview');

    </script>


    <script src="js/jquery.js"></script>
    <script src="js/responsive-calendar.js"></script>
    <?php
    require '../admin/lib/events.php';
    $_event = new Events();

    $month = date("m");
    $year = date("Y");
    $search_by = 'Month';
    $value = $month;
    $events = $_event->Get_BYWhere($search_by, $value);
    $counter = count($events);
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".responsive-calendar").responsiveCalendar({

                <?php echo "time: '" . $year . "-" . $month . "',"; ?>


                events: {

                    <?php
                    for ($i = 0; $i < $counter; $i++) {
                        echo '"' . $events[$i]['Year'] . '-' . $events[$i]['Month'] . '-' . $events[$i]['Day'] . '":{"number": "' . $events[$i]['title_english'] . '" , "' . $events[$i]['linkEN'] . '": ""}, ';
                    }
                    ?>

                }
            });
        });
    </script>

    <script src="../lib/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
    <script src="../lib/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" charset="utf-8">
        $(function () {
            jQuery('#maximage').maximage();
        });
    </script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-733524-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>


    </body>

    <!-- Mirrored from www.nicdarkthemes.com/themes/baby-kids/html/demo/components-focus.php by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 24 Jan 2016 15:11:16 GMT -->
</html>