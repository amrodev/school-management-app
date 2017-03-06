<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Baby Kids - NicDarkThemes.com</title>
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>

    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>


    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $banners = $_ban->GetBanners('page', 'Mission');
    $counter = count($banners);
    echo '<div id="maximage">';
    for ($i = 0; $i < $counter; $i++) {
        echo '<img src="../' . $banners[$i]['image'] . '" alt=""  />';
    }
    echo '</div>';
    ?>


    <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">

        <div class="nicdark_filter greydark" style=" background: url(img/border.png) 100% ">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12" style="background-image:width: 400px;margin-left: -10px;">
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

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div
                class="grid grid_4 nomargin nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow nicdark_radius_left">

                <div class="nicdark_focus">
                    <div class="nicdark_margin10">
                        <h4 class="white">Mission</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">
                            <?php
                            require '../admin/lib/params.php';
                            $_params = new Params();
                            $params = $_params->get_all();

                            //var_dump($params);
                            echo $params[1][2];
                            ?>
                        </p>
                    </div>
                </div>

            </div>

            <div
                class="grid grid_4 nomargin nicdark_bg_orange nicdark_bg_orangedark_hover nicdark_transition nicdark_shadow">

                <div class="nicdark_focus">
                    <div class="nicdark_margin10">
                        <h4 class="white">Vission</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">
                            <?php

                            echo $params[3][2];
                            ?>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!--end nicdark_container-->
        <br><br><br>
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