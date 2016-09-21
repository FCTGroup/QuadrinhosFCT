<?php

	require_once("connection.php");

	class EditoraDAO{


		public function insert($name, $description, $address){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO editora (nome,descricao,endereco) VALUES (?,?,?)');

			$sql->bindValue(1,$name);
			$sql->bindValue(2,$description);
			$sql->bindValue(3,$address);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($editora){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO editora (nome,descricao,endereco) VALUES (?,?,?)');

			$sql->bindValue(1,$editora->getName());
			$sql->bindValue(2,$editora->getDescription());
			$sql->bindValue(3,$editora->getAddress());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM editora WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$house = new Editora($row[0], $row[1], $row[2], $row[3]);

			$connection->disconnect();

			return $house;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM editora WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$houseArray = array();

			while($row = $sql->fetch()){
				$houseArray[] = new Editora($row[0], $row[1], $row[2], $row[3]);
			}

			$connection->disconnect();

			return $houseArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM editora');
			$sql->execute();

			$houseArray = array();

			while($row = $sql->fetch()){
				$houseArray[] = new Editora($row[0], $row[1], $row[2], $row[3]);
			}

			$connection->disconnect();

			return $houseArray;	
		}

		public function update($editora){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE editora SET nome=?, descricao=?, endereco=? WHERE id = ?');

			$sql->bindValue(1,$editora->getName());
			$sql->bindValue(2,$editora->getDescription());
			$sql->bindValue(3,$editora->getAddress());
			$sql->bindValue(4,$editora->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM editora WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>