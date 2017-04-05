<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {
  require_once 'funcs/auth.php';
      if($adminEditGal == 0)
      {
        header("Location: dashboard.php");
      }
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
    <title>SSMS - Dashboard</title>
    
    <?php
      require "inc/head.php";
      require "inc/top_bar.php";
      require "inc/left_bar.php";
    ?>
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Albums</h3>
                      </div>
                      <div class="panel-body">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                              
                              
                              
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 157px;">
                                        Album ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">
                                          Album Name</th>
                                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 114px;">
                                            Album Photo</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 57px;">
                                              Action</th>
                                              
                                                
                                              </thead>
                                              <tbody>
                                                <?php
                                                  require 'lib/gallery.php';

                                                  $_album  = new Gallery();
                                                  $_enc    = new Encryption(); 

                                                  $albums  = $_album->get_all_albums();
                                                  $counter = count($albums);
                                                  for ($i=0; $i <$counter ; $i++) 
                                                  {
                                                    $id = $_enc->encode($albums[$i]['id']); 
                                                    echo '<tr role="row" class="odd">';
                                                    echo '<td class="sorting_1">'.$albums[$i]['id'].'</td>';
                                                    echo '<td>'.$albums[$i]['title_english'].'</td>';
                                                    echo '<td><img width="100" height="80" src="../'.$albums[$i]['photo'].'" /></td>';
                                                    echo '<td><a href="e_album.php?name='.$id.'" class="on-default edit-row"><i class="fa fa-pencil"></i></a> '; 
                                                    if($adminDeleteGal == 1)
                                                    {
                                                      echo '<a href="funcs/gallery_functions.php?delete_gallery='.$id.'" class="on-default remove-row"><i class="fa fa-trash-o"></i></a></td>';
                                                    }
                                                    
                                                    echo '</tr>';
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
                    <!-- Pls Remove -->
                    <div style="height: 600px">
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       