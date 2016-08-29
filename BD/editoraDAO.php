<?php

	include_once("connection.php");

	class EditoraDAO{


		public function insert($nome, $descricao, $endereco){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO editora (nome,descricao,endereco) VALUES (?,?,?)');

			$sql->bindValue(1,$nome);
			$sql->bindValue(2,$descricao);
			$sql->bindValue(3,$endereco);
			$sql->execute();

			$connection->disconnect();


		}

		public function fetchById($id){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM editora WHERE id=?');
			$sql->bindValue(1,$id);
			$sql->execute();

			while($row = $sql->fetch()){
				echo $row[0]."</br>".$row[1]."</br>".$row[2]."</br>";
			}

			$connection->disconnect();
		}

		public function fetchByName($name){

			echo "Entrou";

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM editora WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			while($row = $sql->fetch()){
				echo $row[0]."</br>".$row[1]."</br>".$row[2]."</br>";
			}

			$connection->disconnect();
		}

		public function delete(){

		}

	}

?>