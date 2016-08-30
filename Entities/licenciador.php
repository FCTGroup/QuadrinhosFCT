<?php

class Licenciador{

	private $name;
	private $address;
	private $id;

	function Licenciador($name, $address, $id=-1){
		$this->name = $name;
		$this->address = $address;
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
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