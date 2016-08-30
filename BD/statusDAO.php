<?php

	require_once("connection.php");
	//require_once('../Entities/status.php');

	class StatusDAO{


		public function insert($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO status (nome) VALUES (?)');

			$sql->bindValue(1,$name);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($status){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO status (nome) VALUES (?)');

			$sql->bindValue(1,$status->getName());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM status WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$status = new Status($row[0], $row[1]);

			$connection->disconnect();

			return $status;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM status WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$statusArray = array();

			while($row = $sql->fetch()){
				$statusArray[] = new Status($row[0], $row[1]);
			}

			$connection->disconnect();

			return $statusArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM status');
			$sql->execute();

			$statusArray = array();

			while($row = $sql->fetch()){
				$statusArray[] = new Status($row[0], $row[1]);
			}

			$connection->disconnect();

			return $statusArray;	
		}

		public function update($status){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE status SET nome=? WHERE id = ?');

			$sql->bindValue(1,$status->getName());
			$sql->bindValue(2,$status->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM status WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>