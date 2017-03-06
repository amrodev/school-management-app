<?php
  
  require_once('database.php');
   
  class Tests{
  	public $con_state;
  	public $data = array();
    public $table_name  = 'tests';
    public $table_name2 = 'test_questions';
    public $table_name3 = 'tests_answer';
    public $table_name4 = 'tests_rsults';

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

  	public function GetAllTests()
  	{
  		$this->con_state = $this->connect();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name);  		    
  		}
      $this->close_Connection();
      return $r;
  	}

    public function GettestQuestions()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name2);          
      }
      $this->close_Connection();
      return $r;
    }

    public function GetAlltestsAnswer()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name3);          
      }
      $this->close_Connection();
      return $r;
    }

    public function GetAlltestsResults()
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->get_all($this->table_name4);          
      }
      $this->close_Connection();
      return $r;
    }

    
    public function GetTestData($search_by,$value)
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

    public function GetUserAnswers($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name3,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

     public function GetTestUsers($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name4,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

    public function CheckStudentTest($search_by,$value)
    {
        $this->con_state = $this->connect();
        $TestUser = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $TestUser = $db->Get_all_ByWhere($this->table_name4,$search_by,$value);
          if (count($TestUser) > 0) 
          {
            return true;
          }
          else
          {
            return false;
          }
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
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

    public function GetAllQuestionsByWhere($select,$where)
    {

        $this->con_state = $this->connect();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->Get_all_ByWhere($this->table_name2,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $userdata;
        //var_dump($userdata);
    }

    public function get_by_whereTXT($select,$where)
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
    
    

    public function SaveAnswer($QuestionAnswer,$StudentUserName,$QuestionID,$TestID)
  	{
        $message ='';
  	    $this->con_state = $this->connect();
  		  if ($this->con_state) {
  			$db = new Database();
  		        $sign_up_date = date("Y-m-d");
              $fields = "(QuestionAnswer,StudentUserName,QuestionID,TestID)";
              $values = '( "'.$QuestionAnswer.'" ,  "'.$StudentUserName.'" ,  "'.$QuestionID.'" ,  "'.$TestID.'"   )';
              $db->insert($this->table_name3 , $fields , $values );
              echo $message = 'added Successful';
  		    	    
  		}
      $this->close_Connection();
      return $message;  		
  	}


    public function DoneTest($id2,$TestID,$UserName,$FullMark,$Mark,$Percentage,$Done)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) {
        $db = new Database();
        if($id == NULL)
        { // Insert
          $sign_up_date = date("Y-m-d");
          $fields = "(TestID,UserName,FullMark,Mark,Percentage,Done)";
          $values = "( '".$TestID."' , '".$UserName."'  , '".$FullMark."'  , '".$Mark."'  , '".$Percentage."'  , '".$Done."')";
          $db->insert($this->table_name4 , $fields , $values );
          echo $message = 'added Successful';
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

    public function QuestionTable_Inner_AnswerTable($selects,$OnStatement,$WhereStatement)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $newTable = $_db->InnerJoin($this->table_name2,$this->table_name3,$selects,$OnStatement,$WhereStatement);
        } 
        return $newTable;      
    }



    /*
      SELECT test_questions.QuestionID, test_questions.TestID, test_questions.QuestionType, test_questions.Question, test_questions.ModelAnswer,tests_answer.QuestionAnswer
      FROM test_questions
      INNER JOIN tests_answer ON test_questions.QuestionID = tests_answer.QuestionID
      WHERE StudentUserName =  'S1' 
    */

  	
    
  } 
?>