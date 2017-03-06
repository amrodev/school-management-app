<?php
  
  require_once('database.php');
   
  class User_Actions{
  	public $con_state;
  	public $data = array();
    public $table_name  = 'user_actions';
    public $table_name2 = 'user_log';

  	public function Check_Connection(){
  		$db = new Database();
  		$this->con_state = $db->connect(); // return 1 if ture 0 of false
  		return $this->con_state;
  	}

  	public function get_all_users()
  	{
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name2);  		    
  		}
      return $r;
  	}

    public function get_all_actions()
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name);          
      }
      return $r;
    }

    public function get_random_user($num_users)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
          $n_records = $num_users;
          $r= $db->get_random_record($this->table_name,$n_records);          
      }
      return $r;
    }

    public function get_numbers_of_users($number,$order_by)
    {
        //$order_by = ' food_id DESC '; // ASC
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
            $db = new Database();
            $r= $db->get_number_records($this->table_name,$number,$order_by);            
        }
      return $r;
    }

    public function get_userdata($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function get_actions($search_by,$value)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_one_record($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

    public function search($searchword)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->search($this->table_name,$searchword);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }
    
    public function get_my_friends($my_account)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $db_select = 'friend_array';
          $where = " username='".$my_account."' and online='1'";
          $userdata= $db->get_by_where($this->table_name,'',$db_select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }

  	
  	public function get_by($username,$select)
  	{
  		$ar1 = array();
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		    $value = $db->get_by($this->table_name,$username,$select);  
  		}

  		return $value;

  	}

    public function get_by_where_log($select,$where)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_name2,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        return $userdata;
        //var_dump($userdata);
    }
    
    public function check_login($username,$password)
    {
      $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
             $db = new Database();
             echo $_exist = $db->check_user($this->tablename,$username,$password);
             return $_exist;                       
        }
    }

    public function save_user_log($id,$username,$number_of_logins,$umber_of_actions,$last_login_date,$level)
  	{
        $message ='';
  	    $this->con_state = $this->Check_Connection();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
              $fields = "(username,number_of_logins,number_of_actions,last_login_date,level)";
  		    	  $values = "( '".$username."' , '".$number_of_logins."' , '".$umber_of_actions."' , '".$last_login_date."' , '".$level."' )";
              $db->insert($this->table_name2 , $fields , $values );
              $message = 'User added Successful';
  		    } 
  		    
  		}
      return $message;  		
  	}

    public function save_action($id,$username,$function_name,$function_date,$function_type,$function_content,$function_name_arabic,$function_type_arabic,$function_content_arabic)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(username,function_name,function_date,function_type,function_content,function_name_arabic,function_type_arabic,function_content_arabic)";
              $values = "( '".$username."' , '".$function_name."' , '".$function_date."' , '".$function_type."' , '".$function_content."'  , '".$function_name_arabic."' , '".$function_type_arabic."' , '".$function_content_arabic."' )";
              $db->insert($this->table_name , $fields , $values );
              $message = 'User added Successful';
          } 
          
      }
      return $message;      
    }    


    public function update_user_log($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name2,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

    public function update_user_action($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->Check_Connection();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name,$fileds,$values,$counter,$select,$id);
        } 
         
        return $message;      
    }

  	public function delete($id){
  	      $this->con_state = $this->Check_Connection();
  		 if ($this->con_state) {
  		 	$db = new Database();
        //$where = ' WHERE admin_id ="'.$id.'"';
        $where_select = 'admin_id';
        $where_value = $id;
  		 	$db-> delete($this->table_name ,$where_select ,$where_value);
  		 }
  		 else{echo 'Connectio Lost';}  		
  	}

  	public function is_user($username)
  	{
      echo $username;
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		  $_is = $db->is_admin($this->table_name,$username);
  		  if($_is == 1){
  		    	return true;

  		  }
  		  else{
  		    	return false;
  		  }  		    
  		}
  		else{
  			echo 'Connection Lost';
  		}
  		return $_is;
  	}

    public function is_username($username)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_admin($this->table_name,$username);
        echo  $_is;     
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }


    public function is_exist($search_by , $value)
    {
      $this->con_state = $this->Check_Connection();
      if ($this->con_state) {
        $db = new Database();
        $_is = $db->is_exist($this->table_name, $search_by , $value);
        if($_is == 1){
            //echo 'welccome ';
        }
        else{
            //echo 'tru again ';
        }         
      }
      else{
        echo 'Connection Lost';
      }
      return $_is;
    }


  } 
?>