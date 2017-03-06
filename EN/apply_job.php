<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>

    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>

    <title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>


    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $banners = $_ban->GetBanners('page', 'Career');
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
            <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8"
                     style="background: url(<?php echo '../' . $bann[0]['image']; ?>) 50% 0 fixed;">

                <div class="nicdark_filter greydark" style=" background: url(img/border.png) 50% 0 fixed; ">

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
    <section class="nicdark_section" style="background-color: #d1e8b2">
        <div class="nicdark_container nicdark_clearfix">
            <div class="nicdark_space50"></div>
            <div class="grid grid_12">
                <h1 class="subtitle greydark">Apply</h1>

                <h3 class="subtitle grey">Job title: English Teacher</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
                <div class="nicdark_space10"></div>
            </div>


            <div class="grid grid_9 nicdark_bg_grey nicdark_shadow nicdark_radius nicdark_relative">
                <div class="nicdark_textevidence" style="height: 420px;">
                    <div
                        class="nicdark_margin1820 nicdark_marginleft100 nicdark_marginleft20_iphoneland nicdark_marginleft20_iphonepotr">

                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="First Name" value="" size="500">

                        </div>
                        <label style="color:red;">* </label>
                        <br> <br> <br>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="Last Name" value="" size="500">
                        </div>
                        <br> <br> <br>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="Email" value="" size="500">
                        </div>
                        <label style="color:red;">* </label>
                        <br> <br> <br>

                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="Phone" value="" size="500">
                        </div>
                        <label style="color:red;">* </label>
                        <br> <br> <br>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="file" placeholder="Phone" value="" size="500">
                            <label style="color:red;">* </label>

                            <br> <br>
                            <textarea rows="3"
                                      class="nicdark_bg_grey2 nicdark_radius nicdark_shadow white small subtitle"
                                      placeholder="Other Details"></textarea>
                            <br> <br> <br>
                            <div class="nicdark_space20"></div>
                            <div class="nicdark_focus nicdark_width_percentage80">
                                <a href="submit-message.html"
                                   class="nicdark_mpopup_ajax nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_press"
                                   style="  padding:10px 50px;color:#f9f9f9">SEND</a>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="nicdark_space10"></div>


    </section>

    <div class="nicdark_space10"></div>

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