<?php

	require_once("quadrinho.php");

	class QuadrinhoApresentacao extends Quadrinho{

		private $editoraNome;
		private $licenciadorNome;
		private $categoriaNome;
		private $generoNome;
		private $statusNome;
		private $formatoNome;
		private $formatoDescricao;

		public function QuadrinhoApresentacao($nome, $numero, $data, $editora, $editoraNome, $licenciador, $licenciadorNome, $categoria, $categoriaNome, $genero, $generoNome, $status, $statusNome, $num_paginas, $formato, $formatoNome, $formatoDescricao, $preco, $capa, $descricao){
			$this->Quadrinho($nome, $numero, $data, $editora, $licenciador, $categoria, $genero, $status, $num_paginas, $formato, $preco, $capa, $descricao);
			$this->editoraNome = $editoraNome;
			$this->licenciadorNome = $licenciadorNome;
			$this->categoriaNome = $categoriaNome;
			$this->generoNome = $generoNome;
			$this->statusNome = $statusNome;
			$this->formatoNome = $formatoNome;
			$this->formatoDescricao;
		}

		public function getEditoraNome(){
			return $this->editoraNome;
		}

		public function getLicenciadorNome(){
			return $this->licenciadorNome;
		}

		public function getCategoriaNome(){
			return $this->categoriaNome;
		}

		public function getGeneroNome(){
			return $this->generoNome;
		}

		public function getStatusNome(){
			return $this->statusNome;
		}

		public function getFormatoNome(){
			return $this->formatoNome;
		}

		public function getFormatoDescricao(){
			return $this->formatoDescricao;
		}

	}

?>