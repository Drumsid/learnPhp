<?php 
	// ============================= class  Employee ==============================
class Employee {
	private $name;
	private $age;
	private $salary;

	public function __construct ($name, $age, $salary) {
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}

	public function setName ($name) {
		$this->name = $name;
	}
	public function setAge ($age) {
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}
	public function setSalary ($salary) {
		$this->salary = $salary;
	}

	public function getName () {
		return $this->name;
	}
	public function getAge () {
		return $this->age;
	}
	public function getSalary () {
		return $this->salary . "$";
	}
	public function checkAge () {
		if ($this->age > 18) {
			return "true";
		} else {
			return "false";
		}
	}
	public function doubleSolary()
	{
		return $this->salary *= 2;
	}
	private function isAgeCorrect ($age) {
		if ($age < 1 || $age > 100) {
			return false;
		}
		return true;
	}
}
 ?>