<?php
  
  require_once('database.php');
   
  class Params{
  	public $con_state;
  	public $data = array();
    public $table_name = 'params';

  	public function connect(){
  		$db = new Database();
  		$this->con_state = $db->connect(); // return 1 if ture 0 of false
  		return $this->con_state;
  	}

    public function close_Connection(){
      $db = new Database();
      $this->con_state = $db->close_connection(); // return 1 if ture 0 of false
      return $this->con_state;
    }

  	public function get_all()
  	{
  		$this->con_state = $this->connect();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name);  		    
  		}
      $this->close_Connection();
      return $r;
  	}

    
    public function get_data($search_by,$value)
    {

        $this->con_state = $this->connect();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
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
      $this->close_Connection();
  		return $value;

  	}

    public function get_by_where($select,$where)
    {

        $this->con_state = $this->connect();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_name,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $userdata;
        //var_dump($userdata);
    }
    
    

    public function save($user_id,$user_name,$user_email,$user_password,$user_bdate,$users_sq,$users_sa,$country_id,$city_id,$fname,$lname,$gender)
  	{
        $message ='';
  	    $this->con_state = $this->Check_Connection();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($user_id == NULL){ // Insert
  		        $sign_up_date = date("Y-m-d");
              $fields = "(user_id,user_name,user_email,user_password,user_bdate,users_sq,users_sa,country_id,city_id,fname,lname,gender)";
  		    	  $values = "( '".$user_id."' , '".$user_name."' , '".$user_email."' , '".$user_password."' , '".$user_bdate."' , '".$users_sq."' , '".$users_sa."' , '".$country_id."' , '".$city_id."' , '".$fname."' , '".$lname."' , '".$gender."'  )";
              $db->insert($this->table_name , $fields , $values );
              echo $message = 'User added Successful';
  		    } 
  		    	    
  		}
      $this->close_Connection();
      return $message;  		
  	}    


    public function update($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name,$fileds,$values,$counter,$select,$id);
        } 
        return $message;      
    }

  	public function delete($id){
  	      $this->con_state = $this->Check_Connection();
  		 if ($this->con_state) 
       {
  		 	$db = new Database();
        $where = ' WHERE id ="'.$id.'"';
  		 	$db->delete($this->table_name ,$where);
        $this->close_Connection();
  		 }
  		 else{
        echo 'Connectio Lost';
        $this->close_Connection();
      }  		
  	}
    
  } 
?>