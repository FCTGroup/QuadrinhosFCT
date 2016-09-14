<?php

class Connection {

	private $connection;
	private $host = "localhost";
	private $dbname = "quadrinhosfct";
	private $user = "root";
	private $password = "";

	public function connect(){
		try{
			$this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password);
			return $this->connection;
		}catch(PDOExcetion $e){
			return $e;
		}
	}

	public function disconnect(){
		$this->connection = null;
	}

	public function getConnection(){
		return $this->connection;
	}

}

?>