<?php

	require_once("connection.php");

	class UsuarioDAO{


		public function insert($login, $senha){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO usuario (usuario, senha) VALUES (?,?)');

			$sql->bindValue(1,$login);
			$sql->bindValue(2,md5($senha));
			$sql->execute();

			$connection->disconnect();

		}

		public function validate($login, $senha){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT usuario FROM usuario WHERE usuario=? AND senha=?');
			$sql->bindValue(1,$login);
			$sql->bindValue(2,md5($senha));
			$sql->execute();

			$usuario = $sql->fetch()[0];

			$connection->disconnect();

			return $usuario;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT usuario FROM usuario');
			$sql->execute();

			$usuarioArray = array();

			while($row = $sql->fetch()){
				$usuarioArray[] = $row[0];
			}

			$connection->disconnect();

			return $usuarioArray;	
		}

		public function update($login, $senha){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE usuario SET senha=? WHERE usuario = ?');

			$sql->bindValue(1,md5($senha));
			$sql->bindValue(2,$login);
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($login){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM usuario WHERE usuario = ?');

			$sql->bindValue(1,$login);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>