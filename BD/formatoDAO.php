<?php

	require_once("connection.php");

	class FormatoDAO{


		public function insert($name,$description){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO formato (nome,descricao) VALUES (?,?)');

			$sql->bindValue(1,$name);
			$sql->bindValue(2,$description);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($formato){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO formato (nome,descricao) VALUES (?,?)');

			$sql->bindValue(1,$formato->getName(),$formato->getDescription);
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM formato WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$formato = new Formato($row[0], $row[1], $row[2]);

			$connection->disconnect();

			return $formato;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM formato WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$formatoArray = array();

			while($row = $sql->fetch()){
				$formatoArray[] = new Formato($row[0], $row[1], $row[2]);
			}

			$connection->disconnect();

			return $formatoArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM formato');
			$sql->execute();

			$formatoArray = array();

			while($row = $sql->fetch()){
				$formatoArray[] = new Formato($row[0],$row[1], $row[2]);
			}

			$connection->disconnect();

			return $formatoArray;	
		}

		public function update($formato){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE formato SET nome=?,descricao=? WHERE id = ?');

			$sql->bindValue(1,$formato->getName());
			$sql->bindValue(2,$formato->getDescription());
			$sql->bindValue(3,$formato->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM formato WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>