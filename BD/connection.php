<?php

class Connection {

	private $connection;

	public function connect($host, $dbname, $user, $password){
		try{
			$this->connection = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
			return $this->connection;
		}catch(PDOExcetion $e){
			print "Erro: <code>" . $e->getMessage() . "</code>";
		}
	}

	public function desconnect(){
		$this->connection = null;
	}

	public function getConnection(){
		return $this->connection;
	}

}

?>