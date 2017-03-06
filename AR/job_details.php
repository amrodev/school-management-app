<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Baby Kids - NicDarkThemes.com</title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

    <!--start section-->
    <?php
    require '../admin/lib/banners.php';
    $_ban = new Banners();
    $bann = $_ban->get_by_where('page', 'Career');
    $bann[0]['image'];
    ?>

    <!--start section-->
    <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8"
             style="background: url(<?php echo '../' . $bann[0]['image']; ?>) 50% 0 fixed;">

        <div class="nicdark_filter greydark" style=" background: url(img/border.png) 100%; ">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix" style=" background: url(img/border.png) 50% 0 fixed; ">

                <div class="grid grid_12"
                     style="background-image: url(img/png.png);    width: 400px;margin-left: -10px;">
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


            <div class="grid grid_8">
                <h3 class="subtitle greydark">Job Details</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
                <?php
                require '../admin/lib/jobs.php';
                require '../admin/lib/Encryption.php';

                $_enc = new Encryption();
                $_job = new Jobs();

                $enc_id = $_GET['job'];
                $id = $_enc->decode($enc_id);
                $job = $_job->get_jobdata('id', $id);
                echo '<p>' . $job[0]['long_description_english'] . '</p>';
                session_start();
                $_SESSION['job_title'] = $job[0]['title_english'];
                ?>
                <br>
                <a href="apply_job.php"
                   class="nicdark_zoom nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white">Apply</a>
                <br><br><br>

            </div>


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