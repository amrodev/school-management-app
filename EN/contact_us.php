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
    $banners = $_ban->GetBanners('page', 'Contact_us');
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
    <section class="nicdark_section" style="background-color: #d1e8b2">
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>


            <div class="grid grid_4">

                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                    <div class="nicdark_margin20 nicdark_relative">
                        <a href="#"
                           class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_yellow extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i
                                class="icon-location-outline nicdark_rotate"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4>MAIN SCHOOL</h4>
                            <div class="nicdark_space20"></div>
                            <?php
                            require '../admin/lib/params.php';
                            $_params = new Params();
                            $data = $_params->get_data('id', 7);
                            //var_dump($data);
                            echo '<p>Times Square 58, New York<br/>' . $data[0][2] . '</p>';
                            ?>

                        </div>
                    </div>
                </div>

                <div class="nicdark_space20"></div>


                <div class="nicdark_space20"></div>


                <div class="nicdark_archive1 nicdark_bg_greydark nicdark_radius nicdark_shadow">
                    <div class="nicdark_margin20 nicdark_relative">
                        <a href="#"
                           class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i
                                class="icon-paper-plane-empty nicdark_rotate"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4 class="white">M@IL US</h4>
                            <div class="nicdark_space20"></div>
                            <p class="white">info@babykids.com <br/>registration@babykids.com</p>
                        </div>
                    </div>
                </div>


            </div>


            <div class="grid grid_8">

                <div class="nicdark_textevidence">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13813.688372919718!2d31.336996199999998!3d30.053433300000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1457435834722"
                        width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>


            <div class="nicdark_space50"></div>


        </div>
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