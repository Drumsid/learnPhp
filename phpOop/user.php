<?php 
	//========================= class User =======================================

class User {
	private $name;
	private $surname;
	private $salary;

	public function __construct ($name, $surname, $salary) {
		$this->name = $name;
		$this->surname = $surname;
		$this->salary = $salary;
	}

	public function getName () {
		return $this->name;
	}
	public function getSurename () {
		return $this->surname;
	}
	public function getSalary () {
		return $this->salary;
	}

	public function setSalary ($salary) {
		$this->salary = $salary;
	}


}
 ?>