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
    <title>SSMS - MailBox</title>
    
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
                    <div class="col-lg-3 col-md-4">
                      <a href="email-compose.php" class="btn btn-danger waves-effect waves-light btn-block">Compose</a>
                      <div class="panel panel-default p-0 m-t-20">
                        <div class="panel-body p-0">
                          <div class="list-group mail-list">
                            <a href="#" class="list-group-item no-border active">
                              <i class="fa fa-download m-r-5"></i>Inbox <b>(8)</b>
                            </a> 
                            <a href="#" class="list-group-item no-border">
                              <i class="fa fa-star-o m-r-5"></i>History
                            </a>
                            <a href="#" class="list-group-item no-border">
                              <i class="fa fa-trash-o m-r-5"></i>Trash <b>(354)</b>
                            </a>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-9 col-md-8">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="btn-toolbar" role="toolbar">
                            
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-trash-o"></i>
                              </button>
                            </div>
                            
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-folder"></i> <b class="caret"></b>
                              </button>
                             
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#fakelink">Action</a></li>                                
                              </ul>
                            </div>

                            

                            

                          </div>
                        </div>
                      </div>
                      
                      <div class="panel panel-default m-t-20">
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-hover mails">
                              <tbody>
                                

                                <tr>
                                  <td class="mail-select">
                                    <div class="checkbox checkbox-primary">
                                      <input id="checkbox1" type="checkbox" checked="checked">
                                      <label for="checkbox1"></label>
                                    </div>
                                  </td>
                                  <td class="mail-rateing"><i class="fa fa-star"></i></td>
                                  <td><a href="email-read.html">Google Inc</a></td>
                                  <td><a href="email-read.html">
                                    <i class="fa fa-circle text-info m-r-15"></i>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                  </td>
                                  <td><i class="fa fa-paperclip"></i></td>
                                  <td class="text-right">07:23 AM</td>
                                </tr>
                        
                      
                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-7">Showing 1 - 20 of 289</div>
                    <div class="col-xs-5">
                      <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default waves-effect">
                          <i class="fa fa-chevron-left"></i>
                        </button> 
                        <button type="button" class="btn btn-default waves-effect">
                          <i class="fa fa-chevron-right"></i>
                        </button>
                      </div>
                    </div>
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