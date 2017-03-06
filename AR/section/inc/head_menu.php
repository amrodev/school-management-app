<?php 
$section= $_GET['section'];
$color = $_GET['color'];
require_once '../../admin/lib/params.php';
$_params  = new Params();
$params   = $_params->get_data('type','FAQ');
if ($params[0]['content'] == 0) {
    $FAQ = false;
}
else
$FAQ = true;
?>
<meta name="description" content="nicdark Framework"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--START CSS--> 
    <link rel="stylesheet" href="css/<?php echo $style; ?>"> <!--style-->
    <link rel="stylesheet" href="css/nicdark_responsive.css"> <!--nicdark_responsive-->

    <!--revslider-->
    <link rel="stylesheet" href="css/revslider/settings.css"> <!--revslider-->

    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
    
    
</head>  
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix">




    <div class="nicdark_section nicdark_navigation">
    
        <div class="nicdark_menu_boxed">

        

                    
        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom fade-down">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">
                        
                        

                        

                        
                        <nav>
                            <ul style="margin: 0px 10px;" class="nicdark_menu nicdark_margin010 nicdark_padding50">                             
                               
                                

                                

                                

                                 

                               

                                

                                 <li class="red">
                                    <a href="../../admin_ar/index.php">تسجيل الدخول</a>
                                </li>

                                 <?php
                                 if ($FAQ) {
                                     echo '<li class="red">
                                    <a href="">الاسئلة المتكرة</a>
                                </li>';
                                 }
                                ?> 

                                <li class="red">
                                    <a href="gallery.php?<?php echo 'color='.$color.'&section='.$section; ?>">معرض الصور</a>
                                </li>

                                <li class="red">
                                    <a href="">الدرجات</a>
                                </li>

                                 <?php
                                   switch ($section) {
                                       case 'KG':
                                           $section_ar = 'تمهيدي';
                                           break;
                                        case 'Primary':
                                           $section_ar = 'إبتدائي';
                                           break;
                                        case 'Preparatory':
                                           $section_ar = 'إعدادى';
                                           break;
                                        case 'Secondary':
                                           $section_ar = 'ثانوى';
                                           break;         
                                       
                                       default:
                                           # code...
                                           break;
                                   }
                                 ?>

                                
                                <li class="red">
                                    <a href="index.php?<?php echo 'color='.$color.'&section='.$section; ?>"><?php echo $section_ar; ?></a>
                                </li>
                                <li class="red">
                                    <a href="../index.php">الصفحة الرئيسية</a>
                                </li>



                                
                            </ul>
                        </nav>
    
    


                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>
<!--start-->


