<?php 
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