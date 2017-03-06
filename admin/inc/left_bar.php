<?php
//$_SESSION['admin_id'],$_SESSION['admin_username'],$_SESSION['admin_email']
//$_SESSION['admin_level'] 
//$_SESSION['admin_arabic_name']  
//$_SESSION['admin_english_name']
?>
<!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <?php
                                if ($_SESSION['admin_level']==3) {
                                     echo '<img src="../wp_uploads/students/'.$_SESSION['StudentID'].'.jpg'.''.'" alt="user-img" class="img-circle">';
                                 } 
                                 ?>
                        </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['admin_english_name']; ?> </a>
                            
                        </div>
                        <p class="text-muted m-0">
                            <?php
                             $levelID = $_SESSION['admin_level'];
                             switch ($levelID) {
                             	case '0':
                                  $level = 'mips';
                                  break;
                                case '1':
                                  $level = 'Super Admin';
                                  break;
                                case '2':
                                  $level = 'Website Admin';
                                  break;
                                case '3':
                                  $level = 'Student';
                                  break;
                                case '4':
                                  $level = 'Parent';
                                  break;
                                case '5':
                                  $level = 'Teacher';
                                  break;        
                             }
                            ?>
                            <?php echo $_SESSION['admin_username'].' ( '.$level.' )'; ?></p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        
                        <li>
                            <a href="dashboard.php" class="waves-effect">
                                <i class="md md-home"></i><span>Dashboard</span></a>
                        </li>
                        <?php
                        //( ! ) Notice: Undefined variable: level in C:\wamp\www\salam academy\admin\inc\left_bar.php on line 34

                        $level = $_SESSION['admin_level'];
                          switch ($level) {
                               
                               case '0':
                                   echo '<li>
                                         <a href="edit_users.php" class="waves-effect">
                                         <i class="md ion-android-social-user"></i>
                                         <span>Users</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="sms.php" class="waves-effect">
                                         <i class="md ion-android-social-user"></i>
                                         <span>SMS</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="banners2.php" class="waves-effect">
                                         <i class="md ion-images"></i>
                                         <span>Banners</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="mailbox.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                                <a href="Sections.php" class="waves-effect">
                                               <i class=" md-view-list"></i>
                                               <span>Sections</span></a>
                                              </li>';


                                        echo '<li> 
                                         <a href="edit_FAQ.php" class="waves-effect">
                                         <i class="md-border-color"></i>
                                          <span>FAQ</span></a>
                                            </li>';
                                         echo '<li>
                                         <a href="website_data.php" class="waves-effect">
                                         <i class="md  md-web"></i>
                                         <span>Website Data</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="jobs.php" class="waves-effect">
                                         <i class="md  ion-android-social"></i>
                                         <span>jobs</span></a>
                                         </li>';
                                         
                                         echo '<li>
                                         <a href="ads_news.php" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>Events</span></a>
                                         </li>';

                                         echo '<li>
                                         <a href="news.php" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>News</span></a>
                                         </li>';

                                         echo '<li>
                                         <a href="gallery.php" class="waves-effect">
                                         <i class="md  md-image"></i>
                                         <span>Gallery</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="videos.php" class="waves-effect">
                                         <i class="md  md-play-circle-fill"></i>
                                         <span>Videos</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="reports.php" class="waves-effect">
                                         <i class="md  md-report"></i>
                                         <span>Reports</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="settings.php" class="waves-effect">
                                         <i class="md md-settings"></i>
                                         <span>Settings </span></a>
                                         </li>';
                                   break;

                               case '1':
                                   echo '<li>
                                         <a href="edit_users.php" class="waves-effect">
                                         <i class="md ion-android-social-user"></i>
                                         <span>Users</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="sms.php" class="waves-effect">
                                         <i class="md ion-android-social-user"></i>
                                         <span>SMS</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="banners2.php" class="waves-effect">
                                         <i class="md ion-images"></i>
                                         <span>Banners</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="mailbox.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                                <a href="Sections.php" class="waves-effect">
                                               <i class=" md-view-list"></i>
                                               <span>Sections</span></a>
                                              </li>';


                                        echo '<li> 
                                         <a href="edit_FAQ.php" class="waves-effect">
                                         <i class="md-border-color"></i>
                                          <span>FAQ</span></a>
                                            </li>';
                                         echo '<li>
                                         <a href="website_data.php" class="waves-effect">
                                         <i class="md  md-web"></i>
                                         <span>Website Data</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="jobs.php" class="waves-effect">
                                         <i class="md  ion-android-social"></i>
                                         <span>jobs</span></a>
                                         </li>';
                                         
                                         echo '<li>
                                         <a href="ads_news.php" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>Events</span></a>
                                         </li>';

                                         echo '<li>
                                         <a href="news.php" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>News</span></a>
                                         </li>';

                                         echo '<li>
                                         <a href="gallery.php" class="waves-effect">
                                         <i class="md  md-image"></i>
                                         <span>Gallery</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="videos.php" class="waves-effect">
                                         <i class="md  md-play-circle-fill"></i>
                                         <span>Videos</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="reports.php" class="waves-effect">
                                         <i class="md  md-report"></i>
                                         <span>Reports</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="settings.php" class="waves-effect">
                                         <i class="md md-settings"></i>
                                         <span>Settings </span></a>
                                         </li>';
                                   break;
                               
                               case '2':                                         
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md ion-images"></i>
                                         <span>Banners</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-web"></i>
                                         <span>Website Data</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  ion-android-social"></i>
                                         <span>jobs</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-message"></i>
                                         <span>Received Messages</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>Events</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="news.php" class="waves-effect">
                                         <i class="md  md-leak-add"></i>
                                         <span>News</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-image"></i>
                                         <span>Gallery</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-play-circle-fill"></i>
                                         <span>Vedios</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md md-settings"></i>
                                         <span>Website Settings </span></a>
                                         </li>';
                                   break;

                                   case '3':                                         
                                         echo '<li>
                                         <a href="mailbox.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="timetable.php" class="waves-effect">
                                         <i class="md ion-calendar"></i>
                                         <span>Time Table</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="exams.php" class="waves-effect">
                                         <i class="md ion-android-storage"></i>
                                         <span>Tests Results</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-event-note"></i>
                                         <span>Events</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-description"></i>
                                         <span>Sheets</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-grade"></i>
                                         <span>Grades</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-public"></i>
                                         <span>Online Tests</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="attendence.php" class="waves-effect">
                                         <i class="md   ion-android-user-menu"></i>
                                         <span>My Attendance</span></a>
                                         </li>';                                         
                                   break;

                                   case '4':                                         
                                         echo '<li>
                                         <a href="mailbox.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md ion-calendar"></i>
                                         <span>Time Table</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-description"></i>
                                         <span>Sheets</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-view-list"></i>
                                         <span>Students List</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   ion-android-user-menu"></i>
                                         <span>My Attendance</span></a>
                                         </li>';
                                                                                  
                                   break;


                                   case '5':                                         
                                         echo '<li>
                                         <a href="mailbox.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="exams_list.php" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Exams</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md ion-calendar"></i>
                                         <span>Time Table</span></a>
                                         </li>';                                        
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   ion-android-user-menu"></i>
                                         <span>Attendance</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md   md-description"></i>
                                         <span>Sheets</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-verified-user"></i>
                                         <span>Student Status</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md  md-grade"></i>
                                         <span>Student Grades</span></a>
                                         </li>';
                                                                                  
                                   break;                                
                               
                               default:
                                   # code...
                                   break;
                           } 
                        ?>
                        
                    </ul>

                    <div class="clearfix">

                    </div>
                </div>
                <div class="clearfix">

                </div>
                
            </div>
        </div>
        