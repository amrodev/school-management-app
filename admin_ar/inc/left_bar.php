<?php
//$_SESSION['admin_id'],$_SESSION['admin_username'],$_SESSION['admin_email']
//$_SESSION['admin_level'] 
//$_SESSION['admin_arabic_name']  
//$_SESSION['admin_english_name']
?>
<!-- ========== Left Sidebar Start ========== -->
        <div class="right side-menu" style='font-size: large;'>
            <div class="sidebar-inner slimscrollright">
                <div class="user-details">
                    <div class="pull-right">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle"></div>
                    <div class="user-info">
                        <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['admin_arabic_name']; ?> </a>
                            
                        </div>
                        
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul align="right" >
                        
                        <li>
                            <a href="dashboard.php" class="waves-effect">
                               
                                 <span>لوحة التحكم</span>
                                 <i class="md md-home"></i>
                            </a>
                        </li>
                        <?php
                        //( ! ) Notice: Undefined variable: level in C:\wamp\www\salam academy\admin\inc\left_bar.php on line 34

                        $level = $_SESSION['admin_level'];
                          switch ($level) {
                               case '1':
                                   echo '<li>
                                         <a href="edit_users.php" class="waves-effect">
                                         
                                         <span>المستخدمين</span>
                                         <i class="md ion-android-social-user"></i>
                                         </a>
                                         </li>';

                                         echo '<li>
                                         <a href="banners2.php" class="waves-effect">
                                         <span>البنرات</span>
                                         <i class="md ion-images"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         
                                         <span>الايميل</span>
                                         <i class="md ion-android-mail"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                                <a href="Sections.php" class="waves-effect">
                                                <span>المراحل الدراسية</span>
                                               <i class=" md-view-list"></i>
                                               </a>
                                              </li>';


                                        echo '<li> 
                                         <a href="edit_FAQ.php" class="waves-effect">
                                          <span>الاسئلة المتكررة</span>
                                         <i class="md-border-color"></i>
                                         </a>
                                            </li>';
                                         echo '<li>
                                         <a href="website_data.php" class="waves-effect">
                                         <span>بيانات الموقع</span>
                                         <i class="md  md-web"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="jobs.php" class="waves-effect">
                                         <span>الوظائف</span>
                                         <i class="md  ion-android-social"></i>
                                         </a>
                                         </li>';
                                         
                                         echo '<li>
                                         <a href="ads_news.php" class="waves-effect">
                                         <span>الاخبار</span>
                                         <i class="md  md-leak-add"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="gallery.php" class="waves-effect">
                                         <span>البومات الصور</span>
                                         <i class="md  md-image"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="all_Videos.php" class="waves-effect">
                                         <span>الفيديوهات</span>
                                         <i class="md  md-play-circle-fill"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="reports.php" class="waves-effect">
                                         <span>التقارير</span>
                                         <i class="md  md-report"></i>
                                         </a>
                                         </li>';
                                         echo '<li>
                                         <a href="settings.php" class="waves-effect">
                                         <span>الاعدادات </span>
                                         <i class="md md-settings"></i>
                                         </a>
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
                                         <span>Adds and News</span></a>
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
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>البريد</span>
                                         <i class="md ion-android-mail"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>جدول الحصص</span>
                                         <i class="md ion-calendar"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="exams.php" class="waves-effect">
                                         <span>نتائج الامتحانات</span>
                                         <i class="md ion-android-storage"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>الانشطة</span>
                                         <i class="md  md-event-note"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>الواجبات المدرسية</span>
                                         <i class="md   md-description"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>امتحانات اونلاين</span>
                                         <i class="md   md-public"></i>
                                         </a></li>';
                                         echo '<li>
                                         <a href="dashboard.php" class="waves-effect">
                                         <span>الحضور والانصراف</span>
                                         <i class="md   ion-android-user-menu"></i>
                                         </a></li>';
                                                                              
                                   break;

                                   case '4':                                         
                                         echo '<li>
                                         <a href="index.html" class="waves-effect">
                                         <i class="md ion-android-mail"></i>
                                         <span>Mailbox</span></a>
                                         </li>';
                                         echo '<li>
                                         <a href="timetable.php" class="waves-effect">
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
                                         <a href="index.html" class="waves-effect">
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
        