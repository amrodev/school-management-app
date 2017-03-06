<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) 
{
  
  
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
    <title>SSMS - Edit FAQ</title>
    
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
                  <a href="FAQ.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5">Add FAQ</a>
                  <br><br>
                    <!-- Pls Remove -->
                    <div class="panel">
                      <div class="panel-body">
                        
                        <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          
                            <div class="row">
                              <div class="col-sm-6">
                                <table class="table table-bordered table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 229px;">English Question</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">English Answer</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">Category</th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 275px;">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    require 'lib/faq.php';

  $_faq  = new Faq();
  $_enc    = new Encryption();

  $faqs  = $_faq->get_all();
  $counter = count($faqs);
                                      for ($i=0; $i <$counter ; $i++) 
                                      {

                                        $enc_id = $_enc->encode($faqs[$i]['id']); 

                                        echo '<tr class="gradeA odd" role="row">';
                                        echo '<td class="sorting_1">'.$faqs[$i]['english_question'].'</td>';
                                        echo '<td>'.$faqs[$i]['english_answer'].'</td>';
                                        echo '<td>'.$faqs[$i]['category'].'</td>';
                                        
                                        echo '<td class="actions">';
                                        echo '<a href="update_faq.php?faq_name='.$enc_id.'"><i class="fa fa-pencil"></i></a>';
                                        echo '<a href="funcs/faq_functions.php?del_name='.$enc_id.'" ><i class="fa fa-trash-o"></i></a>';
                                        echo '</td>';
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
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       