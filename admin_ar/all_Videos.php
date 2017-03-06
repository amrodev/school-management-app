<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  
}
else{
  header("Location: index.php");
  
}
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from moltran.coderthemes.com/purple/blank.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 30 Jan 2016 12:08:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>SSMS - Videos</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

<a href="all_Videos.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5">اضافة فيديو<i class="md md-my-library-add"></i></a>
                    <br><br><br>

                  <div class="row">
            <div class="col-sm-22" align="right" style=" margin-top:0px; margin-right:0px;">
               <div class="panel panel-default" style="margin-right: 10px; height: 1000px;"> 
            <div class="panel-heading">
                <h3 class="panel-title">الفيديوهات</h3>
                </div><div class="panel-body" style="margin-top:30px; width: 1000px; margin-left: 30px;">
            <div class="form">
              <div class="panel-body">
    
    <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        
        <div class="row">
            <div class="col-sm-22" style="margin-top: 10px;">
                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable"
                    role="grid" aria-describedby="datatable-editable_info">
                    <thead>
                        <tr role="row">

                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 147px;">
                                نوع العملية
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                الشرح بالعربي
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                الشرح الانجليزي
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 351px;">
                                العنوان بالعربي
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                colspan="1" aria-label="Job Title: activate to sort column descending"
                                aria-sort="ascending" style="width: 283px;">
                                العنوان بالانجليزي
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          require 'lib/videos.php';
                          require 'lib/Encryption.php';
                          $_videos = new Videos();
                          $_enc  = new Encryption();
                          $all_videos = $_videos->get_all();
                          $counter = count($all_videos);
                          for ($i=0; $i <$counter ; $i++) 
                          {
                            $enc_id = $_enc->encode($all_videos[$i]['id']); 
                            echo '<tr class="gradeA odd" role="row">';
                            
                            
                             
                            echo '<td class="actions">';
                            echo '<a href="edit_video.php?video_name='.$enc_id.'">
                                  <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="funcs/videos_functions.php?v_del='.$enc_id.'" >
                                  <i class="fa fa-trash-o"></i>
                                  </a>;
                                  </td>';

                            echo '<td>';
                            echo $all_videos[$i]['description_arabic'];
                            echo '</td>';
                            echo '<td>';
                            echo $all_videos[$i]['description_english'];
                            echo '</td>';
                            echo '<td>';
                            echo $all_videos[$i]['title_arabic'];
                            echo '</td>';
                            echo '<td>';
                            echo $all_videos[$i]['title_english'];
                            echo '</td>';

                          }
                        ?> 
                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>            
 </div>
        </div>
        </div>
        </div>            



                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       