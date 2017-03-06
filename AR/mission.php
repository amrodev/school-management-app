<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title></title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $bann = $_ban->get_by_where('page', 'Mission');
    $bann[0]['image'];
    ?>
    <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8"
             style="background: url(<?php echo '../' . $bann[0]['image']; ?>) 50% 0 fixed;">

        <div class="nicdark_filter greydark" style=" background: url(img/border.png) 100%; ">

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


    <!--start section-->
    <section class="nicdark_section nicdark_bg_yellow nicdark_shadow">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div
                class="grid grid_4 nomargin nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow nicdark_radius_left">

                <div class="nicdark_focus">
                    <div class="nicdark_margin10">
                        <h4 class="white">الرسالة</h4>
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
                        <h4 class="white">الرؤية</h4>
                        <div class="nicdark_space20"></div>
                        <p class="white">
                            <?php

                            echo $params[10][2];
                            ?>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <!--end nicdark_container-->

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