<?php

class Person
{
	private $name;
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function show()
	{
		echo $this->name.' decorator<br>';
	}
}

class Finery extends Person
{
	public $person_obj;
	public function setComponent($obj)
	{
		$this->person_obj = $obj;
	}

	public function show()
	{
		$this->person_obj->show();
	}
}

class Tshirts extends Finery
{
	public function show(){
		echo 'big Tshirtes<br>';
		parent::show();
	}
}

class Shoes extends Finery
{
	public function show()
	{
		echo 'pi shoes<br>';
		parent::show();
	}
}
