<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>


    <title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

    <!--start section-->
    <?php require 'inc/head_menu.php' ?>

    <!--start section-->
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

    </section>
    <!--end section-->


    <!--start section-->
    <section class="nicdark_section" style="background-color: #d1e8b2">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_space50"></div>


            <div class="grid grid_12" align="right">
                <h1 class="subtitle greydark">الوظائف الحالية</h1>
                <div class="nicdark_space20"></div>
            </div>


            <div align="right" class="nicdark_archive1 nicdark_bg_grey2 nicdark_radius nicdark_shadow">

                <?php
                require '../admin/lib/jobs.php';
                require '../admin/lib/Encryption.php';

                $_jobs = new Jobs();
                $_enc = new Encryption();

                $jobs = $_jobs->get_all();
                if (isset($jobs)) {
                    $counter = count($jobs);
                    for ($i = 0; $i < $counter; $i++) {
                        $enc_id = $_enc->encode($jobs[$i]['id']);
                        echo '<div class="nicdark_margin20 nicdark_relative">
                        <a href="apply_job.php" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-file-pdf"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <div class="nicdark_space20"></div>
                            <h4 class="white">' . $jobs[$i]['title_arabic'] . '</h4>                        
                            <p class="white">' . $jobs[$i]['short_description_arabic'] . '</p>
                            <div class="nicdark_space20"></div>

                        </div>
                </div>';
                    }
                } else {
                    echo 'Sorry No Jobs Available Now';
                }
                ?>


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


<?php require 'inc/footer.php' ?>