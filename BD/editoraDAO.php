<?php

	include_once("connection.php");

	class EditoraDAO{


		public function insert($nome, $descricao, $endereco){

			$connection = new Connection;
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO editora (nome,descricao,endereco) VALUES (?,?,?)');

			$sql->bindValue(1,$nome);
			$sql->bindValue(2,$descricao);
			$sql->bindValue(3,$endereco);
			$sql->execute();

			$connection->disconnect();

		}

		public function delete(){

		}

	}

?>