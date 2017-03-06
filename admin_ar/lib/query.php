<?php

class Quiry{


	private $hostname_con = '';
    private $database_con = '';
    private $username_con = '';
    private $password_con = '';
    private $con;
    public $table_name = array(
    	                    0 => 'xxxxxxxxxxxxxxxxxxxxxxx',
    	                  );
    var_dump($table_name);

	//////// Open Connection ///////////////////////////////////////////////////////
    public function connect()
	{	
	    
	    $this->hostname_con ='localhost';
	    $this->database_con ='salam_academy';
	    $this->username_con ='amro';
	    $this->password_con ='123';
        //$this->hostname_con ='localhost';
        //$this->database_con ='mipsso2_salam';
        //$this->username_con ='mipsso2_amro';
        //$this->password_con ='@mroezz123';

        $this->con = mysql_connect($this->hostname_con , $this->username_con, $this->password_con) or die("MySQL Error: " . mysql_error());
        mysql_select_db($this->database_con) or die("MySQL Error: " . mysql_error());
        if ($this->con) {
        	return TRUE;
            
        }
        else { return FALSE; }
	}




}

?>