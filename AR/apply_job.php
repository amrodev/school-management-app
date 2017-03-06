<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Baby Kids </title> <!--insert your title here-->
    <?php require 'inc/head_menu.php' ?>

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
            <div class="grid grid_12" align="right">
                <h1 class="subtitle greydark">التقدم للوظيفة</h1>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider right big" align="right"><span
                        class="nicdark_bg_green nicdark_radius"></span></div>
                <div class="nicdark_space10"></div>
            </div>


            <div align="right" class="grid grid_12 nicdark_bg_grey nicdark_shadow nicdark_radius nicdark_relative">
                <div class="nicdark_textevidence" style="height: 420px;">
                    <div
                        class="nicdark_margin1820 nicdark_marginright100 nicdark_marginright20_iphoneland nicdark_marginright20_iphonepotr">

                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input style="" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="الاسم الاول" value="" size="500">
                            <br>
                        </div>
                        <label style="color:red;">* </label>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input style="" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="الاسم الاخير" value="" size="500">
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input style="margin-top: 20px;"
                                   class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="البريد الالكترونى" value="" size="500">
                        </div>

                        <label style="color:red;">* </label>

                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input style="" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="text" placeholder="هاتف محمول" value="" size="500">
                        </div>
                        <label style="color:red;">* </label>
                        <div class="nicdark_focus nicdark_width_percentage80">
                            <input style="" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey medium subtitle"
                                   type="file" placeholder="هاتف" value="" size="500">
                            <label style="color:red;">* </label>

                            <textarea style="" rows="3"
                                      class="nicdark_bg_grey2 nicdark_radius nicdark_shadow white small subtitle"
                                      placeholder="بيانات اخرى"></textarea>
                            <br> <br> <br>
                            <div class="nicdark_space20"></div>
                            <div align="right" class="nicdark_focus nicdark_width_percentage80">
                                <a href="submit-message.html"
                                   class="nicdark_mpopup_ajax nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_press"
                                   style="  padding:10px 50px;color:#f9f9f9">ارسال</a>
                            </div>

                        </div>
                    </div>

                </div>


    </section>
    <div class="nicdark_space10"></div>
    <div class="nicdark_space10"></div>
    <div class="nicdark_space10"></div>
    <div class="nicdark_space10"></div>

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