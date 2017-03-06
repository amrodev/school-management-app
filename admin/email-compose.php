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
                      <a href="mailbox.php" class="btn btn-danger waves-effect waves-light btn-block">Back to Inbox</a>
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
                    
                    <div class="col-md-8 col-lg-9">
                    	<div class="row">
                    		<div class="col-lg-12">
                    			<div class="btn-toolbar" role="toolbar">
                    				
                    			</div>
                    		</div>
                    	</div>
                    	<div class="panel panel-default m-t-20">
                    		<div class="panel-body p-t-30">
                    			<form role="form">
                    				<div class="form-group">
                    					<script type="text/javascript">
                    				  $(document).ready(function()
                    				  	{
                    				  		$(".search").keyup(function()
                    				  		{
                    				  			var searchbox = $(this).val();
                    				  			var dataString = 'searchword='+ searchbox;
                    				  			if(searchbox=='')
                    				  			{

                    				  			}
                    				  			else
                    				  			{
                    				  				$.ajax({
                    				  					type: "POST",
                    				  					url: "search.php",
                    				  					data: dataString,
                    				  					cache: false,
                    				  					success: function(html)
                    				  					{
                    				  						$("#display").html(html).show();
                    				  					}
                    				  				});
                    				  			}return false; 
                    				  		});
                    				  	});
                    				  </script>

                                      <?php
                                        
                                        require 'lib/admin.php';
                                        $_user = new Admin();
                                        $users = $_user->get_allST();
                                        $counter = count($users);
                                        $search = '';
                                        $MessageFrom = $_SESSION['AdminUsername']; 
                                        for ($i=0; $i <$counter ; $i++) 
                                        { 
                                           $search  .= $users[$i]['FirstName'].' '.$users[$i]['LastName'].', ';
                                        }

                                        echo '<input style="width:600px;" type="text" id="to" name="to" class="form-control" placeholder="To" 
                                        data-list="'.$search.'" data-multiple data-minchars="1"/>';
                                        echo '';
                                      ?>

                                      
                                      <script>
                                        new Awesomplete($('input[data-multiple]'), {
                                        filter: function(text, input) {
                                        return Awesomplete.FILTER_CONTAINS(text, input.match(/[^,]*$/)[0]);
                                        },
                                        replace: function(text) {
                                        var before = this.input.value.match(/^.+,\s*|/)[0];
                                        this.input.value = before + text + ", ";                                                                                }
                                        });
                                      </script>

                    				</div><div class="form-group">
                    				
                    			</div>
                    			<div class="form-group">
                    				<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                    			</div>
                    			<div class="form-group">
                    				<ul class="wysihtml5-toolbar" style="display:none">
                    					
                    						
                    					<li>
                    						<div class="btn-group">
                    							<a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1">
                    								<i class="fa fa-list-ul"></i></a>
                    								<a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1">
                    									<i class="fa fa-list-ol"></i></a>
                    									<a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1">
                    										<i class="fa fa-indent"></i></a>
                    										<a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1">
                    											<i class="fa fa-dedent"></i></a>
                    										</div>
                    									</li>
                    									<li>

                    										<div class="bootstrap-wysihtml5-insert-link-modal modal fade"> 
                    											<div class="modal-dialog"> 
                    												<div class="modal-content">
                    													<div class="modal-header">
                    														<a class="close" data-dismiss="modal"></a>
                    														<h4 class="modal-title">Insert link</h4>
                    													</div>
                    													<div class="modal-body">
                    														<input type="text" value="http://" class="bootstrap-wysihtml5-insert-link-url1 form-control large">
                    														<label style="margin-top:5px;"> 
                    															<input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">
                    															Open link in new window
                    														</label>
                    													</div>
                    													<div class="modal-footer">
                    														<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    														<a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
                    													</div>
                    												</div>
                    											</div>
                    										</div>
                    										<a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1"><i class="fa fa-share-square-o"></i></a>
                    									</li>
                    									<li>
                    										<div class="bootstrap-wysihtml5-insert-image-modal modal fade"> 
                    											<div class="modal-dialog"> 
                    												<div class="modal-content">
                    													<div class="modal-header">
                    														<a class="close" data-dismiss="modal"></a>
                    														<h4 class="modal-title">Insert image</h4>
                    													</div>
                    													<div class="modal-body">
                    														<input type="text" value="http://" class="bootstrap-wysihtml5-insert-image-url form-control large">
                    													</div>
                    													<div class="modal-footer">
                    														<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    														<a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a>
                    													</div>
                    												</div>
                    											</div>
                    										</div>
                    										<a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1">
                    											<i class="fa fa-picture-o"></i>
                    										</a>
                    									</li>
                    								</ul>
                    								<textarea id="message" name="message" class="wysihtml5 form-control" placeholder="Message body" style="height: 200px"></textarea>
                    							</div>

                    							<div class="pull-right"> 
                    				 <button class="btn btn-purple waves-effect waves-light">
                    					<span>Send</span> <i class="fa fa-send m-l-10"></i>
                    				 </button>
                    				</div>
                    						</form>
                    					</div>
                    				</div>
                    			</div>
          </div>


                    
                   
                </div>
                <!-- container -->
            </div>
            <!-- content -->
<?php require "inc/footer.php" ?>       