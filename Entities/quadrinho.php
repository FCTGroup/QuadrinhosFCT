<?php

	class Quadrinho{

		private $nome;
		private $numero;
		private $data;
		private $editora;
		private $licenciador;
		private $categoria;
		private $genero;
		private $status;
		private $num_paginas;
		private $formato;
		private $preco;
		private $capa;
		private $descricao;

		function Quadrinho($nome, $numero, $data, $editora, $licenciador, $categoria, $genero, $status, $num_paginas, $formato, $preco, $capa, $descricao){

			$this->nome = $nome;
			$this->numero = $numero;
			$this->data = $data;
			$this->editora = $editora;
			$this->licenciador = $licenciador;
			$this->categoria = $categoria;
			$this->genero = $genero;
			$this->status = $status;
			$this->num_paginas = $num_paginas;
			$this->formato = $formato;
			$this->preco = $preco;
			$this->capa = $capa;
			$this->descricao = $descricao;

		}

		public function getNome(){
			return $this->nome;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function getData(){
			return $this->data;
		}

		public function getEditora(){
			return $this->editora;
		}

		public function getLicenciador(){
			return $this->licenciador;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function getGenero(){
			return $this->genero;
		}

		public function getStatus(){
			return $this->status;
		}

		public function getNumPaginas(){
			return $this->num_paginas;
		}

		public function getFormato(){
			return $this->formato;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getCapa(){
			return $this->capa;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		
	}
?>