<? ob_start(); ?>
<?php
session_start();

if ($_SESSION['login']) {

} else {
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
    <title>SSMS - Users</title>

    <?php
    require "inc/head.php";
    ?>
    <?php
    //
    //$_SESSION['User_message'],$_SESSION['User_status']
    if (isset($_SESSION['User_status'])) {
        if ($_SESSION['User_status'] == 'done') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify(' . "'success', 'top right', '','" . $_SESSION['User_message'] . "')" . '">';
            $_SESSION['User_status'] = 'false';
        }

        if ($_SESSION['User_status'] == 'fail') {
            echo '<body class="fixed-left" onload="$.Notification.autoHideNotify(' . "'error', 'top right', '','" . $_SESSION['User_message'] . "')" . '">';
            $_SESSION['User_status'] = 'false';
        }

    } else {
        //
    }

    ?>

    <?php
    require "inc/top_bar.php";
    require "inc/left_bar.php";
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <a href="edit_users.php" class="btn btn-primary waves-effect waves-light btn-lg m-b-5"><i
                        class="md md-edit"> </i>User</a>
                <br><br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">User Privileges</h3>
                            </div>

                            <div class="panel-body" align="left">
                                <div class="form">
                                <?php $id  = $_enc->decode($_GET['u']); ?>
                                    <form class="cmxform form-horizontal tasi-form" id="user_UP" name="user_UP"
                                          method="post" enctype="multipart/form-data" action="funcs/user_functions.php?u=<?php echo $id; ?>"
                                          novalidate="novalidate">

                                          <?php
                                            require_once 'lib/admin.php';
                                            require_once 'lib/database.php';
                                            require_once 'lib/Encryption.php';
                                            $_admin = new Admin();
                                            $_enc = new Encryption();
                                            $_db  = new Database();
                                            
                                            $selects = 'users_privileges.id,fn_name.name,users_privileges.userId,users_privileges.fnId,users_privileges._view,users_privileges._add,
                                                        users_privileges._edit,users_privileges._delete';
                                            $WhereStatement = 'users_privileges.userId='.$id;        
                                            $userUp = $_db->InnerJoin('users_privileges','fn_name',$selects,'users_privileges.fnId = fn_name.id',$WhereStatement);
                                            
                                            
                                            $fns = $_admin->get_allFn();
                                            $UP  = $_admin->get_UPData('userId',$id);
                                            if(count($UP) == 0)
                                            {
                                               for ($i=0; $i <count($fns) ; $i++) { 
                                                   echo '<div class="form-group">
                                                          <label class="control-label col-lg-2">'.$fns[$i]['name'].'</label>
                                                          <div class="col-lg-10">
                                                          <input type=text hidden="" name="'.$fns[$i]['name'].'" value="'.$fns[$i]['id'].'">
                                                          <input type="checkbox" name="V'.$fns[$i]['name'].'" >View
                                                          <input type="checkbox" name="A'.$fns[$i]['name'].'" style="margin-left:15px">Add
                                                          <input type="checkbox" name="E'.$fns[$i]['name'].'" style="margin-left:15px">Edit
                                                          <input type="checkbox" name="D'.$fns[$i]['name'].'" style="margin-left:15px">Delete
                                                           </div>
                                                           </div>';
                                                           echo '<hr>';
                                               }
                                             }
                                             else{
                                                 
                                                 for ($i=0; $i <count($userUp) ; $i++) { 
                                                     echo '<div class="form-group">
                                                          <label class="control-label col-lg-2">'.$userUp[$i]['name'].'</label>
                                                          <div class="col-lg-10">
                                                          <input type=text hidden="" name="'.$userUp[$i]['name'].'" value="'.$userUp[$i]['id'].'">';
                                                          if($userUp[$i]['_view'] == 1){
                                                             echo '<input type="checkbox" checked="" name="V'.$userUp[$i]['name'].'" >View';
                                                          }
                                                          else{
                                                            echo '<input type="checkbox" name="V'.$userUp[$i]['name'].'" >View';
                                                          }

                                                          if($userUp[$i]['_add'] == 1){
                                                               echo '<input type="checkbox" checked="" name="A'.$userUp[$i]['name'].'" style="margin-left:15px">Add';
                                                          }
                                                          else{
                                                               echo '<input type="checkbox" name="A'.$userUp[$i]['name'].'" style="margin-left:15px">Add';
                                                          }

                                                          if($userUp[$i]['_edit'] == 1){
                                                               echo '<input type="checkbox" checked="" name="E'.$userUp[$i]['name'].'" style="margin-left:15px">Edit';
                                                          }
                                                          else{
                                                               echo '<input type="checkbox" name="E'.$userUp[$i]['name'].'" style="margin-left:15px">Edit';
                                                          }

                                                          if($userUp[$i]['_delete'] == 1){
                                                               echo '<input type="checkbox" checked="" name="D'.$userUp[$i]['name'].'" style="margin-left:15px">Delete';
                                                          }
                                                          else{
                                                               echo '<input type="checkbox"name="D'.$userUp[$i]['name'].'" style="margin-left:15px">Delete';                                                              
                                                          }

                                                          echo '</div>
                                                           </div>';
                                                           echo '<hr>';
                                                 }
                                             }  
                                          ?>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light" name="user_UP"
                                                        id="user_UP" type="submit">Save
                                                </button>
                                                </button>
                                            </div>
                                        </div>


                                    </form>
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