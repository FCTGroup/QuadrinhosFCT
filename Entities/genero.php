<?php

class Genero{

	private $name;
	private $address;
	private $id;

	function Genero($name, $id=-1){
		$this->name = $name;
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getId(){
		return $this->id;
	}

}

?>