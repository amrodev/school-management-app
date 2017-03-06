<?php
  
  require_once('database.php');
   
  class SMS{
  	public $con_state;
  	private $data = array();
    private $table_name = 'sms_event';
    private $table_name_types = 'sms_types';
    private $table_name_messages = 'sms_messages';
    private $table_name_smsHistory = 'sms_history';

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

    public function get_allTypes()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name_types);          
      }
      $this->close_Connection();
      return $r;
    }

    public function get_allMessages()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name_messages);          
      }
      $this->close_Connection();
      return $r;
    }

    public function get_smsHistory()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name_smsHistory);          
      }
      $this->close_Connection();
      return $r;
    }

    
    public function get_eventdata($search_by,$value)
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

    public function get_SmsMessageData($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name_messages,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

    public function get_SmsTypes($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name_types,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

    public function get_SmsMessages($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name_messages,$search_by,$value);
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

    public function get_by_where($select,$where)
    {

        $this->con_state = $this->connect();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_by_where($this->table_name,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $userdata;
        //var_dump($userdata);
    }


    public function Get_BYWhere($search_by,$value)
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
    
    

    public function save($id,$EventTitle,$EventMessage,$EventDay,$EventMonth,$EventYear)
  	{
        $message ='';
  	    $this->con_state = $this->connect();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
  		        $sign_up_date = date("Y-m-d");
              $fields = "(EventTitle,EventMessage,EventDay,EventMonth,EventYear)";
  		    	  $values = "( '".$EventTitle."' , '".$EventMessage."' , '".$EventDay."' , '".$EventMonth."' , '".$EventYear."'   )";
              $db->insert($this->table_name , $fields , $values );
              echo $message = 'Job added Successful';
  		    } 
  		    	    
  		}
      $this->close_Connection();
      return $message;  		
  	}


    public function saveSMSType($id,$sms_type)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(type)";
              $values = "( '".$sms_type."')";
              $db->insert($this->table_name_types , $fields , $values );
              echo $message = 'sms type added Successful';
          } 
                
      }
      $this->close_Connection();
      return $message;      
    }


    public function saveSmsMessage($id,$type,$message)
    {
        $this->con_state = $this->connect();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(sms_type,sms_message)";
              $values = "( '".$type."' , '".$message."' )";
              $db->insert($this->table_name_messages , $fields , $values );
              echo $message = 'sms message added Successful';
          } 
                
      }
      $this->close_Connection();
      return $message;      
    }


    public function saveSmsHistory($id,$to,$details,$num,$date,$by)
    {
        $this->con_state = $this->connect();
        if ($this->con_state) {
        $db = new Database();
          if($id == NULL){ // Insert
              $fields = "(smsto,details,num,date,smsby)";
              $values = "( '".$to."' , '".$details."'   , '".$num."'  , '".$date."'  , '".$by."' )";
              $db->insert($this->table_name_smsHistory , $fields , $values );
              echo $message = 'sms message addedto History Successful';
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

    public function delete_SmsMessage($where_select ,$where_value)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $db = new Database();
          $db->delete($this->table_name_messages ,$where_select ,$where_value);       
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

    public function update_SmsMessage($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name_messages,$fileds,$values,$counter,$select,$id);
        } 
        return $message;      
    }

  	
    
  } 
?>