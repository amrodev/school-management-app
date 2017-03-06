<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>


    <title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

    <!--start section-->
    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $banners = $_ban->GetBanners('page', 'News');
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
    <section class="nicdark_section" style="background-color: #d1e8b2">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space50"></div>


            <?php
            require '../admin/lib/encryption.php';
            require '../admin/lib/news.php';

            $_enc = new Encryption();
            $_news = new News();
            $id = $_enc->decode($_GET['news']);
            $news = $_news->get_newsdata('id', $id);
            echo '<div class="grid grid_8" align="right" style="width:100%;">
            <img alt="" class="nicdark_radius nicdark_opacity" style="width:50%;" src="../' . $news[0]['photo'] . '">

            <div class="nicdark_space50"></div>';
            echo '<h1 class="subtitle greydark">' . $news[0]['title_arabic'] . '</h1>';
            echo '<div class="nicdark_space20"></div>
            <div class="nicdark_space20"></div>';
            echo '<p><span class="white nicdark_dropcap nicdark_bg_green nicdark_radius nicdark_shadow">L</span>' . $news[0]['long_description_arabic'] . '</p>';
            ?>


            <div class="nicdark_space50"></div>


            <div class="nicdark_space50"></div>


        </div>

        <!--sidebar-->

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