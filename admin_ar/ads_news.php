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
    <title>SSMS - News</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                   <a href="edit_news.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5">اضافة خبر<i class="md md-my-library-add"></i></a>
                    <br><br><br>
                    <!-- Page-Title -->
                    <div class="row">
    <div class="col-sm-22" align="right" style=" margin-top:20px; margin-right:0px; ">
        <div class="panel panel-default" style="margin-right: 0px;  height: 2100px;">
            <div class="panel-heading">
                <h3 class="panel-title">الاخبار</h3> 
            </div><div class="panel-body">
            <div class="form">
                <form class="cmxform form-horizontal tasi-form" id="add_news" name="add_news" method="post" enctype="multipart/form-data" action="funcs/news_functions.php" novalidate="novalidate">
                    
                            


<div class="panel-body">
    
    <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        
        <div class="row">
            <div class="col-sm-22">
                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable"
                    role="grid" aria-describedby="datatable-editable_info">
                    <thead>
                        <tr role="row">
                            
                            
                            
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 147px;">
                                Actions
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 321px;">
                                Long Description
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 351px;">
                                Short Description
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1"
                                colspan="1" aria-label="Job Title: activate to sort column descending"
                                aria-sort="ascending" style="width: 283px;">
                                Job Title
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          require 'lib/news.php';
                          require 'lib/Encryption.php';
                          $_news = new News();
                          $_enc  = new Encryption();
                          $all_news = $_news->get_all();
                          $counter = count($all_news);
                          for ($i=0; $i <$counter ; $i++) 
                          {
                            $enc_id = $_enc->encode($all_news[$i]['id']); 
                            echo '<tr class="gradeA odd" role="row">
                            
                            
                            
                            <td class="actions">';
                            echo '<a href="update_news.php?news_name='.$enc_id.'">
                                  <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="funcs/news_functions.php?news_name_del='.$enc_id.'" >
                                  <i class="fa fa-trash-o"></i>
                                  </a>
                                  </td>
                                  <td>';
                            echo $all_news[$i]['long_description_english'];
                            echo '</td>
                            <td>';
                            echo $all_news[$i]['short_description_english'];
                            echo '</td>

                                  <td class="sorting_1">';
                            echo $all_news[$i]['title_english'];
                            echo '</td>
                            
                                  </tr>';
                          }
                        ?> 
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            
            
        </div>
    </div>
</div>















                          

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>







                    <!-- Pls Remove -->
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       