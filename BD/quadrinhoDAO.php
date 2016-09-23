<?php

	require_once("connection.php");
	//require_once('../Entities/quadrinho.php');

	class QuadrinhoDAO{


		public function insert($name,$numero,$data,$editora,$licenciador,$categoria,$genero,$status,$num_paginas,$formato,$preco,$capa,$descricao){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO quadrinho (nome,numero,data,editora,licenciador,categoria,genero,status,num_paginas,formato,preco,capa,descricao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');

			$sql->bindValue(1,$name);
			$sql->bindValue(2,$numero);
			$sql->bindValue(3,$data);
			$sql->bindValue(4,$editora);
			$sql->bindValue(5,$licenciador);
			$sql->bindValue(6,$categoria);
			$sql->bindValue(7,$genero);
			$sql->bindValue(8,$status);
			$sql->bindValue(9,$num_paginas);
			$sql->bindValue(10,$formato);
			$sql->bindValue(11,$preco);
			$sql->bindValue(12,$capa);
			$sql->bindValue(13,$descricao);
			$sql->execute();

			$connection->disconnect();

		}

		public function insertObject($quadrinho){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('INSERT INTO quadrinho (nome,numero,data,editora,licenciador,categoria,genero,status,num_paginas,formato,preco,capa,descricao) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');

			$sql->bindValue(1,$quadrinho->getName());
			$sql->bindValue(2,$quadrinho->getNumero());
			$sql->bindValue(3,$quadrinho->getData());
			$sql->bindValue(4,$quadrinho->getEditora());
			$sql->bindValue(5,$quadrinho->getLicenciador());
			$sql->bindValue(6,$quadrinho->getCategoria());
			$sql->bindValue(7,$quadrinho->getGenero());
			$sql->bindValue(8,$quadrinho->getStatus());
			$sql->bindValue(9,$quadrinho->getNum_paginas());
			$sql->bindValue(10,$quadrinho->getFormato());
			$sql->bindValue(11,$quadrinho->getPreco());
			$sql->bindValue(12,$quadrinho->getCapa());
			$sql->bindValue(13,$quadrinho->getDescricao());
			$sql->execute();

			$connection->disconnect();

		}

		public function fetchById($nome, $numero){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM quadrinho WHERE nome=? AND numero=?');
			$sql->bindValue(1,$nome);
			$sql->bindValue(2,$numero);
			$sql->execute();

			$row = $sql->fetch();

			$quadrinho = new Quadrinho($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12]);

			$connection->disconnect();

			return $quadrinho;
		}

		public function fetchByName($name){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM quadrinho WHERE nome like ?');
			$sql->bindValue(1,'%'.$name.'%');
			$sql->execute();

			$quadrinhoArray = array();

			while($row = $sql->fetch()){
				$quadrinhoArray[] = new Quadrinho($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12]);
			}

			$connection->disconnect();

			return $quadrinhoArray;
		}

		public function fetchAll(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM quadrinho');
			$sql->execute();

			$quadrinhoArray = array();

			while($row = $sql->fetch()){
				$quadrinhoArray[] = new Quadrinho($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12]);
			}

			$connection->disconnect();

			return $quadrinhoArray;	
		}

		public function fetchLast(){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('SELECT * FROM quadrinho order by preco desc limit 2');
			$sql->execute();

			$quadrinhoArray = array();

			while($row = $sql->fetch()){
				$quadrinhoArray[] = new Quadrinho($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12]);
			}

			$connection->disconnect();

			return $quadrinhoArray;		
		}

		public function update($quadrinho){

			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('UPDATE quadrinho SET nome=?, numero=?, data=?, editora=?, licenciador=?
			categoria=?, genero=?, status=?,num_paginas=?,formato=?,preco=?,capa=?,descricao=? WHERE id = ?');

			$sql->bindValue(1,$quadrinho->getName());
			$sql->bindValue(2,$quadrinho->getNumero());
			$sql->bindValue(3,$quadrinho->getData());
			$sql->bindValue(4,$quadrinho->getEditora());
			$sql->bindValue(5,$quadrinho->getLicenciador());
			$sql->bindValue(6,$quadrinho->getCategoria());
			$sql->bindValue(7,$quadrinho->getGenero());
			$sql->bindValue(8,$quadrinho->getStatus());
			$sql->bindValue(9,$quadrinho->getNum_paginas());
			$sql->bindValue(10,$quadrinho->getFormato());
			$sql->bindValue(11,$quadrinho->getPreco());
			$sql->bindValue(12,$quadrinho->getCapa());
			$sql->bindValue(13,$quadrinho->getDescricao());
			$sql->bindValue(14,$quadrinho->getId());
			$sql->execute();

			$connection->disconnect();

		}

		public function delete($nome, $numero){
			$connection = new Connection();
			$connection->connect();

			$sql = $connection->getConnection()->prepare('DELETE FROM quadrinho WHERE nome = ? AND numero = ?');

			$sql->bindValue(1,$nome);
			$sql->bindValue(2,$numero);
			$sql->execute();

			$connection->disconnect();
		}

	}

?>