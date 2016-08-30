<?php

	require_once("connection.php");
	require_once('../Entities/categoria.php');

	class CategoriaDAO{


		public function insert($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO categoria (nome) VALUES (?)');

			$sql->bindValue(1,$name);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($categoria){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO categoria (nome) VALUES (?)');

			$sql->bindValue(1,$categoria->getName());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM categoria WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			$row = $sql->fetch();

			$categoria = new Categoria($row[0], $row[1]);

			$connection->disconnect();

			return $categoria;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM categoria WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$categoriaArray = array();

			while($row = $sql->fetch()){
				$categoriaArray[] = new Categoria($row[0], $row[1]);
			}

			$connection->disconnect();

			return $categoriaArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM categoria');
			$sql->execute();

			$categoriaArray = array();

			while($row = $sql->fetch()){
				$categoriaArray[] = new Categoria($row[0], $row[1]);
			}

			$connection->disconnect();

			return $categoriaArray;	
		}

		public function update($categoria){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE categoria SET nome=? WHERE id = ?');

			$sql->bindValue(1,$categoria->getName());
			$sql->bindValue(2,$categoria->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($id){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM categoria WHERE id = ?');

			$sql->bindValue(1,$id);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>