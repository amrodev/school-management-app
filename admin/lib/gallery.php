<?php
  
  require_once('database.php');
   
  class Gallery{
  	public $con_state;
  	public $data = array();
    public $table_name  = 'albums';
    public $table_name2 = 'photos';

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

  	public function get_all_albums()
  	{
  		$this->con_state = $this->connect();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name);  		    
  		}
      $this->close_Connection();
      return $r;
  	}


    public function get_all_photos()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name2);          
      }
      $this->close_Connection();
      return $r;
    }

    
    public function get_albumdata($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

    public function get_photosdata($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name2,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
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

    public function get_by_where($search_by,$value)
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
    
    

    public function save_album($id,$title_english,$title_arabic,$pic,$section,$FacebookLink)
  	{
        $message ='';
  	    $this->con_state = $this->connect();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($user_id == NULL){ // Insert
  		        $sign_up_date = date("Y-m-d");
              $fields = "(title_english,title_arabic,photo,section,FacebookLink)";
  		    	  $values = "( '".$title_english."' , '".$title_arabic."' , '".$pic."' , '".$section."' , '".$FacebookLink."' )";
              $db->insert($this->table_name , $fields , $values );
              echo $message = 'Album added Successful';
  		    } 
  		    	    
  		}
      $this->close_Connection();
      return $message;  		
  	}


    public function save_photo($id,$AlbumID,$album_section,$photo)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $sign_up_date = date("Y-m-d");
              $fields = "(AlbumID,album_section,photo)";
              $values = "( '".$AlbumID."' , '".$album_section."' , '".$photo."' )";
              $db->insert($this->table_name2 , $fields , $values );
              echo $message = 'photo added Successful';
          } 
                
      }
      $this->close_Connection();
      return $message;      
    }    



    public function delete($where_select ,$where_value)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $db = new Database();
          $db->delete($this->table_name ,$where_select ,$where_value);       
          $this->close_Connection();
        }

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

     public function updatePhoto($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name2,$fileds,$values,$counter,$select,$id);
        } 
        return $message;      
    }

  	
    
  } 
?>