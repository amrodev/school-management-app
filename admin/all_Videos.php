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



                  <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable"
                    role="grid" aria-describedby="datatable-editable_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                colspan="1" aria-label="Job Title: activate to sort column descending"
                                aria-sort="ascending" style="width: 283px;">
                                English Title
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 351px;">
                                Arabic Title
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                English Description
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                Arabic Description
                            </th>
                           
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 147px;">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          require 'lib/videos.php';
                          $_videos = new Videos();
                          $_enc  = new Encryption();
                          $all_videos = $_videos->get_all();
                          $counter = count($all_videos);
                          for ($i=0; $i <$counter ; $i++) 
                          {
                            $enc_id = $_enc->encode($all_videos[$i]['id']); 
                            echo '<tr class="gradeA odd" role="row"><td class="sorting_1">';
                            echo $all_videos[$i]['title_english'];
                            echo '</td><td>';
                            echo $all_videos[$i]['title_arabic'];
                            echo '</td><td>';
                            echo $all_videos[$i]['description_english'];
                            echo '</td>';
                            echo '<td>';
                            echo $all_videos[$i]['description_arabic'];
                            echo '</td>';  
                            echo '<td class="actions">';
                            echo '<a href="edit_video.php?video_name='.$enc_id.'">
                                  <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="funcs/videos_functions.php?v_del='.$enc_id.'" >
                                  <i class="fa fa-trash-o"></i>
                                  </a>
                                  </td>
                                  </tr>';
                          }
                        ?> 
                        
                    </tbody>
                </table>
            </div>
        </div>
                    



                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       