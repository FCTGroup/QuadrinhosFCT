<?php

class Formato{

	private $name;
	private $description;
	private $id;

	function Formato($name, $description, $id=-1){
		$this->name = $name;
		$this->description = $description;
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getId(){
		return $this->id;
	}

}

?>