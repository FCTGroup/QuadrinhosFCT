<?php

	require_once("connection.php");
	require_once('../Entities/genero.php');

	class GeneroDAO{


		public function insert($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO genero (nome) VALUES (?)');

			$sql->bindValue(1,$name);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($genero){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO genero (nome) VALUES (?)');

			$sql->bindValue(1,$genero->getName());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM genero WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$genero = new Genero($row[0], $row[1]);

			$connection->disconnect();

			return $genero;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM genero WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$generoArray = array();

			while($row = $sql->fetch()){
				$generoArray[] = new Genero($row[0], $row[1]);
			}

			$connection->disconnect();

			return $generoArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM genero');
			$sql->execute();

			$generoArray = array();

			while($row = $sql->fetch()){
				$generoArray[] = new Genero($row[0], $row[1]);
			}

			$connection->disconnect();

			return $generoArray;	
		}

		public function update($genero){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE genero SET nome=? WHERE id = ?');

			$sql->bindValue(1,$genero->getName());
			$sql->bindValue(2,$genero->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM genero WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>