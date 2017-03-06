<? 
ob_start();
?>
<?php 
require('../lib/admin.php');
require('../lib/user_actions.php');
require('../lib/Encryption.php');
session_start();

ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);


if( !empty($_POST['username']) && !empty($_POST['password']))
{
	date_default_timezone_set('Africa/Cairo');

	$username      = $_POST['username'];
	$password      = $_POST['password'];
	$_enc          = new Encryption();
	$user_password = $_enc->encode($password);
	$user_data     = array();
	$_user         = new Admin();
	$_user_log     = new User_Actions();
	$_user_action  = new User_Actions();

	// if Admin
	$exist    = $_user->is_username($username);
	if ($exist == true) 
	{
		$user_data = $_user->get_userdata('admin_username',$username);
		if ($user_data[0]['suspended'] == 1) 
	    {
	       header("Location: ../index.php");
	    }
	    if($user_data[0]['admin_password'] == $user_password) 
	    {
	    	
	    	$_SESSION['login']                   = true;
	    	$_SESSION['admin_id']                = $user_data[0]['id'];
			$_SESSION['admin_username']          = $user_data[0]['admin_username'];
			$_SESSION['admin_email']             = $user_data[0]['admin_email'];
			$_SESSION['admin_level']             = $user_data[0]['level'];
			$_SESSION['admin_arabic_name']       = $user_data[0]['arabic_name'];
			$_SESSION['admin_english_name']      = $user_data[0]['english_name'];
			
			$user = $_user_log->get_by_where_log('username',$_SESSION['admin_username']);
			$num_login = $user[0]['number_of_logins']+1;
			$date = date("j-n-Y h:i A ");
			$fileds = array(
				 0=> 'number_of_logins',
				 1=> 'last_login_date'
				);
			$values = array(
				 0=> $num_login,
				 1=> $date
				);
			$counter = count($fileds);
			$select  = 'username';
			$id      = $_SESSION['admin_username'];
			$_user_log->update_user_log($fileds,$values,$counter,$select,$id);
	    	header("Location: ../dashboard.php");
		    }
	    else
	    {
		    //header("Location: ../index.php");
		    echo $_SESSION['admin_login_message'] = 'Password is not vaild';
	    }
		
	}
/////////////////////////////////////////////////////////////////////////////////

// if Student //////////////////////////////////////////////////////////////////
	$exist_st    = $_user->is_student($username);
	echo '<br>'.'Check User name and password'.'<br>';
	if ($exist_st == true) 
	{
		echo '<br>'.'User name is Exist'.'<br>';
		$user_data = $_user->get_userdataST('Username',$username);
		echo '<br>'.'Get User Data'.'<br>';
		date_default_timezone_set('Africa/Cairo');
		echo '<br>'.'Check user password'.'<br>';
	    if($user_data[0]['Password'] == $user_password) 
	    {
	    	echo '<br>'.'Password Is OK'.'<br>';
	    	$_SESSION['login']            = true;
	    	$_SESSION['StudentID']        = $user_data[0]['StudentID'];
			$_SESSION['admin_level']      = $user_data[0]['Level'];			
			$_SESSION['AdminFirstName'] = $user_data[0]['FirstName'];
			$_SESSION['AdminFirstNameAR'] = $user_data[0]['FirstNameAR'];
			$_SESSION['AdminLastName']  = $user_data[0]['LastName'];
			$_SESSION['AdminLastNameAR']  = $user_data[0]['LastNameAR'];			// /MiddleName
			$_SESSION['AdminMiddleName']  = $user_data[0]['MiddleName'];
			$_SESSION['AdminMiddleNameAR']  = $user_data[0]['MiddleNameAR'];
			$_SESSION['AdminBirthDate'] = $user_data[0]['BirthDate'];
			$_SESSION['admin_username']  = $user_data[0]['Username'];
			$_SESSION['AdminPIC']       = $user_data[0]['StudentPIC'];
			$_SESSION['AdminEmail']     = $user_data[0]['Email'];
			$_SESSION['admin_english_name'] = $user_data[0]['FirstName'].' '.$user_data[0]['LastName'];
			$_SESSION['AdminArabicName']  = $user_data[0]['FirstNameAR'].' '.$user_data[0]['LastNameAR'];
			$_SESSION['StudentClassID']  = $user_data[0]['ClassID'];
			$_SESSION['StudentCode']  = $user_data[0]['StudentCode'];

			$user = $_user_log->get_by_where_log('username',$_SESSION['StudentUsername']);
			if (isset($user)) 
			{
				echo '<br>'.' User is exist in Log table'.'<br>';
				$num_login = $user[0]['number_of_logins']+1;
			    $date = date("j-n-Y h:i A ");
			    $fileds = array(
				 0=> 'number_of_logins',
				 1=> 'last_login_date'
				);
			    $values = array(
				 0=> $num_login,
				 1=> $date
				);
			    $counter = count($fileds);
			    $select  = 'username';
			    $id      = $_SESSION['admin_username'];
			    $_user_log->update_user_log($fileds,$values,$counter,$select,$id);
			    echo '<br>'.' User is updated in Log table'.'<br>';
			}
			else
			{
			  echo '<br>'.' User is not in Log table'.'<br>';
			  echo '<br>'.' Create user Log in table'.'<br>';              
              $id = NULL;
              $username_log = $username;
              $number_of_logins = 1;
              $umber_of_actions = 0;
              $last_login_date  = date("j-n-Y h:i A ");
              $level = 3;
              $_user_action->save_user_log($id,$username,$number_of_logins,$umber_of_actions,$last_login_date,$level);
			}
			
	    	header("Location: ../dashboard.php");
		    }
	    else
	    {
		    //header("Location: ../index.php");
		    echo $_SESSION['admin_login_message'] = 'Password is not vaild';
	    }
		
	}
/////////////////////////////////////////////////////////////////////////////////////

// if Teacher //////////////////////////////////////////////////////////////////
	$exist_st    = $_user->is_teacher($username);
	echo '<br>'.'Check User name and password'.'<br>';
	if ($exist_st == true) 
	{
		echo '<br>'.'User name is Exist'.'<br>';
		$user_data = $_user->get_userdataTE('Username',$username);
		echo '<br>'.'Get User Data'.'<br>';
		date_default_timezone_set('Africa/Cairo');
		echo '<br>'.'Check user password'.'<br>';
	    if($user_data[0]['Password'] == $user_password) 
	    {
	    	echo '<br>'.'Password Is OK'.'<br>';
	    	$_SESSION['login']                  = true;
	    	$_SESSION['TeacherID']              = $user_data[0]['StudentID'];
			$_SESSION['admin_level']            = $user_data[0]['Level'];			
			$_SESSION['admin_english_name']     = $user_data[0]['TeacherName'];
			$_SESSION['AdminTeacherNameAR']     = $user_data[0]['TeacherNameAR'];
			$_SESSION['admin_username']         = $user_data[0]['Username'];
			$_SESSION['AdminEmail']             = $user_data[0]['Email'];

			$user = $_user_log->get_by_where_log('username',$_SESSION['StudentUsername']);
			if (isset($user)) 
			{
				echo '<br>'.' User is exist in Log table'.'<br>';
				$num_login = $user[0]['number_of_logins']+1;
			    $date = date("j-n-Y h:i A ");
			    $fileds = array(
				 0=> 'number_of_logins',
				 1=> 'last_login_date'
				);
			    $values = array(
				 0=> $num_login,
				 1=> $date
				);
			    $counter = count($fileds);
			    $select  = 'username';
			    $id      = $_SESSION['admin_username'];
			    $_user_log->update_user_log($fileds,$values,$counter,$select,$id);
			    echo '<br>'.' User is updated in Log table'.'<br>';
			}
			else
			{
			  echo '<br>'.' User is not in Log table'.'<br>';
			  echo '<br>'.' Create user Log in table'.'<br>';              
              $id = NULL;
              $username_log = $username;
              $number_of_logins = 1;
              $umber_of_actions = 0;
              $last_login_date  = date("j-n-Y h:i A ");
              $level = 3;
              $_user_action->save_user_log($id,$username,$number_of_logins,$umber_of_actions,$last_login_date,$level);
			}
			
	    	header("Location: ../dashboard.php");
		    }
	    else
	    {
		    //header("Location: ../index.php");
		    echo $_SESSION['admin_login_message'] = 'Password is not vaild';
	    }
		
	}
/////////////////////////////////////////////////////////////////////////////////////	


	
}
else{
	   //header("Location: ../index.php");
	   echo $_SESSION['admin_login_message'] = 'empty ';
}

?>

<? ob_flush(); ?>