<?php 
error_reporting(0);

	require_once '../include/header2.php';
	require_once '../include/functions.php';

 ?>
 <div class="main-wrap">
 <h2 class = "center">Разные формы PHP</h2>
 <?php 

 //debug($_GET);

  ?>

<form action="" method="get">
	<input type="text" name = "name"><br>
	<select name="fst[]" multiple size="3">
		<option value="1">first</option>
		<option value="2">second</option>
		<option value="3">third</option>
	</select><br>
	<input type="radio" name="marrk" value="1">1
	<input type="radio" name="marrk" value="2">2
	<input type="radio" name="marrk" value="3">3<br>
	<input type="checkbox" name= "checkbox1" >checkbox1
	<input type="checkbox" name= "checkbox2" >checkbox2<br>
	<textarea name="textarea" id="textarea" cols="30" rows="10"></textarea><br>
	<input type="submit" value="submit">
</form>
<hr>
<?php 
debug($_GET);



	$point_x_1 = $_GET['point_x_1'];
	$point_y_1 = $_GET['point_y_1'];
	$point_z_1 = $_GET['point_z_1'];
	$point_x_2 = $_GET['point_x_2'];
	$point_y_2 = $_GET['point_y_2'];
	$point_z_2 = $_GET['point_z_2'];

	

	function sumPoint ($a = 0, $b = 0, $c = 0, $x = 0, $y = 0, $z = 0) {
		
		$result = $a + $b + $c + $x + $y + $z;
		return $result;
	}
$result = sumPoint($point_x_1, $point_y_1, $point_z_1, $point_x_2, $point_y_2, $point_z_2);



 ?>
<div class="form-point">
	<h3>Расстояние между двумя точками в пространстве</h3>
	<p>Задайте координаты двух точек в пространстве и нажмите отправить. Вы получите расстояние между этими точками.</p>
	<form action="" method="get">
		<h4>Введите координаты первой точки:</h4>
		<div class="input-block">
			<p>ось Х</p>
			<input type="text" name="point_x_1"><br>
		</div>
		<div class="input-block">
			<p>ось Y</p>
			<input type="text" name="point_y_1"><br>
		</div>
		<div class="input-block">
			<p>ось Z</p>
			<input type="text" name="point_z_1"><br>
		</div>
		<h4>Введите координаты второй точки:</h4>
		<div class="input-block">
			<p>ось Х</p>
			<input type="text" name="point_x_2"><br>
		</div>
		<div class="input-block">
			<p>ось Y</p>
			<input type="text" name="point_y_2"><br>
		</div>
		<div class="input-block">
			<p>ось Z</p>
			<input type="text" name="point_z_2"><br>
		</div>
		<div class="input-block">
			<input type="submit" value="рассчитать">
			<p>Результат: </p> <?php echo $result; ?>
		</div>
	</form>
</div>
</div>
<?php 

	require_once '../include/footer.php';

 ?>


