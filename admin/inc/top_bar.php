<div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="md md-terrain"></i><span>MIPS</span></a></div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">

                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle profile" data-toggle="dropdown"
                                aria-expanded="true">
                                <?php
                                if ($_SESSION['admin_level']==3) {
                                     echo '<img src="../wp_uploads/students/'.$_SESSION['StudentID'].'.jpg'.''.'" alt="user-img" class="img-circle">';
                                 } 
                                ?></a><ul
                                    class="dropdown-menu">
                                    <?php
                                     require_once 'lib/Encryption.php';
                                     $_enc = new Encryption();
                                     $username = $_SESSION['admin_username'];
                                     $enc_username = $_enc->encode($username);
                                    ?>
                                    <li><a href="profile.php?id=<?php echo $enc_username; ?>"><i class="md md-face-unlock"></i>Profile</a></li><li>
                                        <a href="website_settings.php"><i class="md md-settings"></i>Settings</a></li><li><a
                                            href="javascript:void(0)"><i class="md md-lock"></i>Lock screen</a></li><li><a href="javascript:void(0)">
                                                <i class="md md-settings-power"></i>Logout</a></li></ul>
                            </li>
                            <div class="pull-right">
                            <button class="button-menu-mobile open-right">
                               <i class=" md-email"></i>
                               <span class="badge badge-xs badge-danger">3</span>
                            </button>
                            </div>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    