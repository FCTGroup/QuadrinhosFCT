<?php

class Editora{

	private $name;
	private $description;
	private $address;
	private $id;

	function Editora($name, $description, $address, $id=-1){
		$this->name = $name;
		$this->description = $description;
		$this->address = $address;
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

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getId(){
		return $this->id;
	}

}

?>