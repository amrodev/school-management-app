<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>


    <title>مدرسة السلام - الاخبار</title> <!--insert your title here-->
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


            <div class="grid grid_12">
                <h1 class="subtitle greydark">OUR News</h1>
                <div class="nicdark_space20"></div>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
                <div class="nicdark_space10"></div>
            </div>

            <?php
            require '../admin/lib/news.php';
            require '../admin/lib/Encryption.php';

            $_news = new News();
            $_enc = new Encryption();

            $all_news = $_news->get_all();
            $counter = count($all_news);
            if (isset($all_news)) {
                for ($i = 0; $i < $counter; $i++) {
                    $enc_id = $_enc->encode($all_news[$i]['id']);
                    echo '<div class="grid grid_3" align="right">
            <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">';
                    echo '<img style="height:200px;" alt="" src="../' . $all_news[$i]['photo'] . '">';
                    echo '<div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 style="color:#f9f9f9;" class="white nicdark_margin20">' . $all_news[$i]['title_arabic'] . '</h4>
                </div>';
                    echo ' <div class="nicdark_margin20">
                    <p class="white">' . $all_news[$i]['short_description_arabic'] . '</p>
                    <div class="nicdark_space20"></div>
                    <a href="news_details.php?news=' . $enc_id . '" class=" nicdark_press nicdark_btn nicdark_bg_greendark white nicdark_radius nicdark_shadow medium">مزيد من التفاصيل</a>
                </div>';
                    echo '</div></div>';
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