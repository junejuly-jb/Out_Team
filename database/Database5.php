<?php
class Database5{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'out_team';
    private $con;

    public function __construct(){
        $this->con = mysqli_connect($this->servername,$this->username,$this->password, $this->dbname);
    }
    public function execute($sql){
        return mysqli_query($this->con,$sql);
    }
	public function __destruct(){
		mysqli_close($this->con);
	}
    
}
?>