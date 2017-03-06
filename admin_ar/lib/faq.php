<?php
  
  require_once('database.php');
   
  class Faq{
  	public $con_state;
  	public $data = array();
    public $table_name = 'faq';

  	public function Check_Connection(){
  		$db = new Database();
  		$this->con_state = $db->connect(); // return 1 if ture 0 of false
  		return $this->con_state;
  	}

  	public function get_all()
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

    
    public function get_faqdata($search_by,$value)
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

    public function get_by_where($select,$where)
    {

        $this->con_state = $this->Check_Connection();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_by_where($this->table_name,$select,$where);
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

    public function save($id,$english_question,$english_answer,$arabic_question,$arabic_answer,$cat,$filepath)
  	{
        $message ='';
  	    $this->con_state = $this->Check_Connection();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
              $fields = "(english_question,english_answer,arabic_question,arabic_answer,category,Filepath)";
  		    	  $values = "( '".$english_question."' , '".$english_answer."' , '".$arabic_question."' , '".$arabic_answer."' , '".$cat."' , '".$filepath."' )";
              $db->insert($this->table_name , $fields , $values );
              $message = 'User added Successful';
  		    } 
  		    else {//update

            //$this->update_user();
  		    	 
             /*$filed = array(
  		    		  'user_name'  => $user_name,
  		    		  'user_pass'  => $user_pass,
  		    		  'user_email' => $user_email,
  		    		  'level'      => $level,
                'c_vedios'   => $c_vedios,
                'c_projects' => $c_projects,
                'c_lists'    => $c_lists,
                'c_pages'    => $c_pages
  		    		);*/
  		    	//var_dump($filed);
  		    	//$_exist  = $this->is_user($user_name,$user_pass);
  		    	//if($_exist == 1)
  		    	//{ 
  		    	//	$db->update($this->table_name , $filed ,$id);
            //  $message = 'Updating user is Successful';
  		    	//}
  		    	//else{
  		    	//	$message =  'Sorry This user is not exist ';
  		    	//}		    	
  		    } 
  		    //var_dump($ar1);		    
  		}
      return $message;  		
  	}    


    public function update_faq($fileds,$values,$counter,$select,$id)
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
        $where_select = 'id';
        $where_value = $id;
  		 	$db-> delete($this->table_name ,$where_select ,$where_value);
  		 }
  		 else{echo 'Connectio Lost';}  		
  	}

  	

    
  } 
?>