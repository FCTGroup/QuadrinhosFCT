<?php

	require_once("connection.php");

	class LicenciadorDAO{


		public function insert($name, $address){

			$connection = new Connection();
			if($connection->connect() instanceof PDOException)
				return null;

			$sql = $connection->getConnection()->prepare('INSERT INTO licenciador (nome,site) VALUES (?,?)');

			$sql->bindValue(1,$name);
			$sql->bindValue(2,$address);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($licenciador){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO licenciador (nome,site) VALUES (?,?)');

			$sql->bindValue(1,$licenciador->getName());
			$sql->bindValue(2,$licenciador->getAddress());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM licenciador WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$licenciador = new Licenciador($row[0], $row[1], $row[2]);

			$connection->disconnect();

			return $licenciador;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM licenciador WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$licenciadorArray = array();

			while($row = $sql->fetch()){
				$licenciadorArray[] = new Licenciador($row[0], $row[1], $row[2]);
			}

			$connection->disconnect();

			return $licenciadorArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM licenciador');
			$sql->execute();

			$licenciadorArray = array();

			while($row = $sql->fetch()){
				$licenciadorArray[] = new Licenciador($row[0], $row[1], $row[2]);
			}

			$connection->disconnect();

			return $licenciadorArray;	
		}

		public function update($licenciador){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE licenciador SET nome=?, site=? WHERE id = ?');

			$sql->bindValue(1,$licenciador->getName());
			$sql->bindValue(2,$licenciador->getAddress());
			$sql->bindValue(3,$licenciador->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM licenciador WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>