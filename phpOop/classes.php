<?php 

	require_once '../include/header2.php';
	require_once '../include/functions.php';

 ?>
 <!-- <p>Классы описаны в файле classes.php тут ничего нет))</p> -->
<?php 

// ============================= class  Employee ==============================
class Employee {
	public $name;
	public $age;
	public $salary;

	public function __construct ($name, $age, $salary) {
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}

	public function getName () {
		return $this->name;
	}
	public function getAge () {
		return $this->age;
	}
	public function getSalary () {
		return $this->salary;
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
}

//========================= class User =======================================

class User {
	public $name;
	public $age;


	public function setAge ($age) {
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	public function addAge($age)	
	{
		$newAge = $this->age + $age;

		if ($this->isAgeCorrect($newAge)) {
			return $this->age = $newAge;
		}

	}

		public function subAge($age)	
	{
		$newAge = $this->age - $age;

		if ($this->isAgeCorrect($newAge)) {
			return $this->age = $newAge;
		}

	}

		private function isAgeCorrect($age)
	{
		if ($age >= 18 && $age <= 60) {
			return true;
		} else {
			return false;
		}
	}

}

//===================== Rectangle ===========================================

class Rectangle {
	public $width;
	public $height;

	public function getSquare()
	{
		return $this->width * $this->height;
	}

	public function getPerimeter() 
	{
		return ($this->width * 2) + ($this->height * 2);
	}
}

//===================== Rectangle ===========================================

class Student {
	public $name;
	public $course;

	public function transferToNextCourse () {
		if ($this->isCourseCorrect()) {
			$this->course += 1;
		} else {
			echo "Перевод не возможен! Студент уже на последнем курсе!";
			exit();
		}
	}


	private function isCourseCorrect () {
		if ($this->course < 5) {
			return true;
		} else {
			return false;
		}
	}
}
?>
<?php 

	require_once '../include/footer.php';

 ?>

