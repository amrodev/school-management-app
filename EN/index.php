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
    <link rel="stylesheet" href="../lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" href="../lib/css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8"/>

    <title>Baby Kids - Home Page</title> <!--insert your title here-->
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

<?php require 'inc/head_menu.php' ?>

    <!--start section-->
<?php
require '../admin/lib/banners.php';
$_ban = new Banners();
$banners = $_ban->GetBanners('page', 'HomePage');
$counter = count($banners);
echo '<div id="maximage">';
for ($i = 0; $i < $counter; $i++) {
    echo '<img src="../' . $banners[$i]['image'] . '" alt=""  />';
}
echo '</div>';
?>

    <!--start section-->
    <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8" style="">

        <div class="nicdark_filter greydark" style="background: url(img/border.png) 100% ">

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
    <section class="nicdark_section" style="background-color: #d1e8b2 ">
    <br><br>


    <section class="nicdark_section nicdark_margintop45_negative" style="">

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