<?php

class Status{

	private $name;
	private $id;

	function Status($name, $id=-1){
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

	public function setId($id){
		$this->id = $id;
	}

}

?>