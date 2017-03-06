<?php
require '../admin/lib/sections.php';
require '../admin/lib/colors.php';
$_sections = new Sections();
$_color = new Colors();

$sections = $_sections->get_all();
$colors = $_color->get_all();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Salam Academy - Home Page</title> <!--insert your title here-->
    <meta name="description" content="nicdark Framework"> <!--insert your description here-->
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    <!--START CSS-->
    <link rel="stylesheet" href="css/nicdark_style.css"> <!--style-->
    <link rel="stylesheet" href="css/nicdark_responsive.css"> <!--nicdark_responsive-->

    <!--revslider-->
    <link rel="stylesheet" href="css/revslider/settings.css"> <!--revslider-->

    <!--END CSS-->

    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Montserrat', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
    <style type="text/css">
        .news {
            box-shadow: inset 0 -15px 30px rgba(0, 0, 0, 0.4), 0 5px 10px rgba(0, 0, 0, 0.5);
            height: 30px;
            overflow: hidden;
            border-radius: 4px;
            -webkit-user-select: none
        }

        .news span {
            float: left;
            color: #fff;
            padding: 6px;
            position: relative;
            top: 1%;
            border-radius: 4px;
            box-shadow: inset 0 -15px 30px rgba(0, 0, 0, 0.4);
            font: 16px;
            -webkit-font-smoothing: antialiased;
            -webkit-user-select: none;
            cursor: pointer
        }

        .news ul {
            float: left;
            padding-left: 20px;
            animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
            -webkit-user-select: none
        }

        .news ul li {
            line-height: 30px;
            list-style: none
        }

        .news ul li a {
            color: #fff;
            text-decoration: none;
            font: 14px;
            -webkit-font-smoothing: antialiased;
            -webkit-user-select: none
        }

        .news ul:hover {
            animation-play-state: paused
        }

        .news span:hover + ul {
            animation-play-state: paused
        }

        @keyframes ticker {
            0% {
                margin-top: 0
            }
            25% {
                margin-top: -30px
            }
            50% {
                margin-top: -60px
            }
            75% {
                margin-top: -90px
            }
            100% {
                margin-top: 0
            }
        }
    </style>

</head>
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix">
        <div class="nicdark_overlay"></div>


        <!--START SIDEBAR-->
        <div class="nicdark_right_sidebar nicdark_bg_greydark nicdark_nicescrool">

            <a class="nicdark_right_sidebar_btn_close nicdark_btn_icon small nicdark_bg_red nicdark_radius white nicdark_absolute_right10 nicdark_shadow"><i
                    class="icon-power"></i></a>

            <!--start CART-->
            <div class="nicdark_margin020">
                <div class="nicdark_space20"></div>
                <h4 class="white">YOUR CART</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
            </div>
            <div class="nicdark_textevidence">
                <div class="nicdark_margin20">
                    <ul class="nicdark_list nicdark_relative">
                        <li>
                            <a href="single-product.html"><img alt=""
                                                               class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60"
                                                               src="img/shop/img1.jpg"></a>
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey subtitle">BOOK CHILDREN</h5>
                                <div class="nicdark_space10"></div>
                                <p>1 x $ 254,00</p>
                            </div>
                            <div class="nicdark_space30"></div>
                        </li>
                        <li>
                            <a href="single-product.html"><img alt=""
                                                               class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60"
                                                               src="img/shop/img2.jpg"></a>
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey subtitle">BOOK FOR KIDS</h5>
                                <div class="nicdark_space10"></div>
                                <p>1 x $ 254,00</p>
                            </div>
                            <div class="nicdark_space10"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nicdark_margin020">
                <h5 class="grey">SUBTOTAL: <span class="white subtitle">$ 754,00</span></h5>
                <div class="nicdark_space20"></div>
                <div class="nicdark_focus">
                    <a href="shop-cart.html"
                       class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i
                            class="icon-basket-1"></i>&nbsp;&nbsp;VIEW CART</a>
                </div>
            </div>
            <!--end CART-->

            <!--start FILTER-->
            <div class="nicdark_margin020">
                <div class="nicdark_space60"></div>
                <h4 class="white">FILTER PRICE</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
            </div>
            <div class="nicdark_margin020 nicdark_block">
                <div class="nicdark_space20"></div>
                <div class="nicdark_radius nicdark_bg_greydark2 nicdark_slider_range"></div>
                <div class="nicdark_space20"></div>
            </div>
            <div class="nicdark_margin020">
                <input class="nicdark_bg_greydark white subtitle small nicdark_padding0 nicdark_slider_amount"
                       type="text">
                <div class="nicdark_space20"></div>
                <a href="shop.html" class="nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white"><i
                        class="icon-money-1"></i>&nbsp;&nbsp;FILTER</a>
            </div>
            <!--END FILTER-->

            <!--start PRODUCTS-->
            <div class="nicdark_margin020">
                <div class="nicdark_space60"></div>
                <h4 class="white">BEST BOOKS</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
            </div>
            <div class="nicdark_textevidence">
                <div class="nicdark_margin20">
                    <ul class="nicdark_list nicdark_relative">
                        <li>
                            <a href="single-product.html"><img alt=""
                                                               class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60"
                                                               src="img/shop/img3.jpg"></a>
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey subtitle">BOOK STUDENT</h5>
                                <div class="nicdark_space10"></div>
                                <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star-half-alt yellow"></i></p>
                            </div>
                            <div class="nicdark_space30"></div>
                        </li>
                        <li>
                            <a href="single-product.html"><img alt=""
                                                               class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60"
                                                               src="img/shop/img4.jpg"></a>
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey subtitle">BOOK EDUCATION</h5>
                                <div class="nicdark_space10"></div>
                                <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star-half-alt yellow"></i></p>
                            </div>
                            <div class="nicdark_space30"></div>
                        </li>
                        <li>
                            <a href="single-product.html"><img alt=""
                                                               class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60"
                                                               src="img/shop/img5.jpg"></a>
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey subtitle">BOOK PRIMARY</h5>
                                <div class="nicdark_space10"></div>
                                <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star yellow"></i><i class="icon-star yellow"></i><i
                                        class="icon-star-half-alt yellow"></i></p>
                            </div>
                            <div class="nicdark_space10"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end PRODUCTS-->

            <!--start SEARCH-->
            <div class="nicdark_margin020">
                <div class="nicdark_space40"></div>
                <h4 class="white">SEARCH YOUR BOOKS</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
            </div>
            <div class="nicdark_margin20">
                <input class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow grey small subtitle" type="text"
                       value="" placeholder="KEYWORD">
                <div class="nicdark_space20"></div>
                <a href="shop.html" class="nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white"><i
                        class="icon-search-outline"></i>&nbsp;&nbsp;SEARCH</a>
            </div>
            <!--end SEARCH-->

            <!--start TAGS-->
            <div class="nicdark_margin020">
                <div class="nicdark_space40"></div>
                <h4 class="white">PRODUCTS TAGS</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
            </div>
            <div class="nicdark_margin10">
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
                <a href="shop.html"
                   class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
            </div>
            <!--end TAGS-->

        </div>
        <!--END SIDEBAR-->
        <div class="nicdark_section nicdark_navigation">

            <div class="nicdark_menu_boxed">

                <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
                    <div class="nicdark_container nicdark_clearfix">


                        <div id="nicdark_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide">

                            <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                                <div class="nicdark_margin20">
                                    <h4 class="white">LANGUAGES</h4>
                                </div>
                            </div>

                            <div class="nicdark_margin20">

                                <ul class="nicdark_list border">

                                    <li class="nicdark_border_grey">
                                        <p><a class="grey" href="index-2.html">ENGLISH</a><a href="index-2.html"
                                                                                             class="nicdark_btn right nicdark_opacity"><img
                                                    alt="" width="30" src="img/flag/img1.png"></a></p>
                                        <div class="nicdark_space15"></div>
                                    </li>


                                    <li class="nicdark_border_grey">
                                        <div class="nicdark_space15"></div>
                                        <p><a class="grey" href="index-2.html">ARABIC</a><a href="index-2.html"
                                                                                            class="nicdark_btn right nicdark_opacity"><img
                                                    alt="" width="30" src="img/flag/img3.png"></a></p>
                                        <div class="nicdark_space15"></div>
                                    </li>


                                </ul>

                            </div>
                        </div>
                        <!--end window-->

                    </div>
                </div>


                <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom fade-down">
                    <div class="nicdark_container nicdark_clearfix">

                        <div class="grid grid_12 percentage">


                            <nav>
                                <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                    <li class="yellow">
                                        <a href="index.html">HOME</a>

                                    </li>
                                    <li class="orange">
                                        <a href="mission.php">Mission & Vission</a>

                                    </li>

                                    <li class="blue nicdark_megamenu">
                                        <a href="careers.php">Careers</a>

                                    </li>
                                    <li class="blue nicdark_megamenu">
                                        <a href="proposals.php">Proposals</a>

                                    </li>
                                    <li class="blue nicdark_megamenu">
                                        <a href="contact_us.php">Contact us </a>

                                    </li>
                                    <li class="blue nicdark_megamenu">
                                        <a href="news.php">news</a>

                                    </li>

                                    <li class="blue nicdark_megamenu">
                                        <a href="events.php">Events</a>

                                    </li>

                                    <li class="blue nicdark_megamenu">
                                        <a href="../admin/index.php">Login</a>

                                    </li>

                                    <li class="blue nicdark_megamenu">
                                        <a href="#">Arabic</a>

                                    </li>


                            </nav>


                        </div>

                    </div>
                    <!--end container-->

                </div>
                <!--end header-->

            </div>

        </div>
        <!--start-->
        <!--start section-->
        <section class="nicdark_section">

            <div class="tp-banner-container">
                <div class="nicdark_slide1">

                    <ul>


                        <!--start first-->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                            data-title="">
                            <img src="img/slide/img4.jpg">
                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                            data-title="">
                            <img src="img/slide/img4.jpg">
                        </li>

                    </ul>

                </div>
            </div>

        </section>
        <!--end section--><!--start section-->
        <section class="nicdark_section nicdark_margintop45_negative">

            <img src="img/wm.png" align="right">
            <img src="img/logo.png" align="left" style="margin-left:-110px;">
            <br><br><br><br>
            <div class="news red">
                <span>Latest News</span>
                <ul>
                    <?php
                    require_once '../admin/lib/news.php';
                    $_news = new News();
                    $nrecords = 3;
                    $OrderBy = 'id';
                    $sort = 'DESC';
                    $news = $_news->GetXRecords($nrecords, $OrderBy, $sort);
                    //var_dump($news);
                    for ($i = 0; $i < $nrecords; $i++) {
                        if (isset($news[$i]['id'])) {
                            echo '<li><a href="">' . $news[$i]['title_english'] . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <br><br>

            <?php
            //$sections ,$colors
            $sections_counter = count($sections);
            for ($i = 0; $i < $sections_counter; $i++) {
                $theme = $sections[$i]['theme'];
                $color = $_color->get_color('colore', 'btn_' . $theme);

                if ($sections[$i]['enabled'] == 1) {
                    if ($i == 1) {
                        echo '<div style="margin-left:150px; margin-right:5px;  background-color: ' . $color[0]['code'] . ';" class="nicdark_textevidence nicdark_width_percentage25  nicdark_shadow nicdark_radius_right" >
                            <div class="nicdark_textevidence" align="center" >
                              <div class="nicdark_margin30"  >
                                 <h2  class="white subtitle" "><a style="color: white; class="white" href="section/index.php?color=' . $theme . '&section=' . $sections[$i]['section_name_english'] . '" >' . $sections[$i]['section_name_english'] . '</a></h2>
                              </div>
                            </div>
                          </div>';
                    } else {
                        echo '<div style="margin-right:5px; margin-left:5px; background-color: ' . $color[0]['code'] . ';" class="nicdark_textevidence nicdark_width_percentage25  nicdark_shadow nicdark_radius_right" >
                            <div class="nicdark_textevidence" align="center" style="" >
                              <div class="nicdark_margin30"  >
                                 <h2  class="white subtitle" "><a style="color: white; class="white" href="section/index.php?color=' . $theme . '&section=' . $sections[$i]['section_name_english'] . '" >' . $sections[$i]['section_name_english'] . '</a></h2>
                              </div>
                            </div>
                          </div>';
                    }
                }
            }

            ?>


            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">


                <div class="grid grid_12 percentage nomargin">

                    <div class="nicdark_textevidence center">


                        <div class="nicdark_space5"></div>
                    </div>
                </div>

            </div>
            <!--end nicdark_container-->
        </section>
        <!--end section--><!--start section-->

        <!--end section--><!--start section-->


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


        //START SLIDE
        jQuery('.nicdark_slide1').show().revolution(
            {
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 450,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview2",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",

                hideTimerBar: "on",

                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });
        //END SLIDE


        //START PARALLAX SECTIONS
        $('#nicdark_parallax_big_image').parallax("50%", 0.3);
        $('#nicdark_parallax_2_btns').parallax("50%", 0.3);
        $('#nicdark_parallax_countdown').parallax("50%", 0.3);
        $('#nicdark_parallax_counter').parallax("50%", 0.3);
        //END PARALLAX SECTIONS


        //START COUNTDOWN GRID SECTION
        //variables
        var endDate = "June 06, 2016 10:30:00";
        var grid = "grid_3";
        //insert the class nicdark_displaynone in the var if you wnat to hide the visualization
        var display_years = "nicdark_displaynone";
        var display_days = "";
        var display_hours = "";
        var display_minutes = "";
        var display_seconds = "";
        //call
        $(".nicdark_countdown").countdown({
            date: endDate,
            render: function (data) {
                $(this.el).html("<div class=\"grid " + grid + " " + display_years + " \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">" + this.leadingZeros(data.years, 4) + "</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid " + grid + " " + display_days + "  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">" + this.leadingZeros(data.days, 3) + "</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid " + grid + " " + display_hours + "  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">" + this.leadingZeros(data.hours, 2) + "</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid " + grid + " " + display_minutes + "  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">" + this.leadingZeros(data.min, 2) + "</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid " + grid + " " + display_seconds + "  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">" + this.leadingZeros(data.sec, 2) + "</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
            }
        });
        //END COUNTDOWN GRID SECTION

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


</body>

<!-- Mirrored from www.nicdarkthemes.com/themes/baby-kids/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 24 Jan 2016 15:05:54 GMT -->
</html>