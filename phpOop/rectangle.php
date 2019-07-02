<?php 
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
 ?>