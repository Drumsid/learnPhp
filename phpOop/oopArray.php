<?php 
  require_once '../include/bootstrapHeader.php';
  require_once "classes.php";
 ?>
<h2 class = "center">Объекты в массиве</h2>

<div class="code_block">
	<p>Создим пять обектов класса <b>City используя</b>  <b>__construct</b></p>
	<div class="code_block_php">
		<?php highlight_string('<?php $city1 = new City ("Moscow", 500000); ?>');?><br>
		<?php highlight_string('<?php $city2 = new City ("Piter", 100000); ?>');?><br>
		<?php highlight_string('<?php $city3 = new City ("London", 20000); ?>');?><br>
		<?php highlight_string('<?php $city4 = new City ("Dolgopa", 10000); ?>');?><br>
		<?php highlight_string('<?php $city5 = new City ("Dmitrov", 20000); ?>');?><br>
		<?php $city1 = new City ('Moscow', 100000); ?>
		<?php $city2 = new City ("Piter", 100000); ?>
		<?php $city3 = new City ("London", 20000); ?>
		<?php $city4 = new City ("Dolgopa", 10000); ?>
		<?php $city5 = new City ("Dmitrov", 20000); ?>
	</div>
		<p>Добавим все наши объкты в массив <b>cityArray</b></p>
	<div class="code_block_php">
		<?php highlight_string('<?php $cityArray = [
					$city1,
					$city2,
					$city3,
					$city4,
					$city5
						]; ?>');?><br>
		<?php 
			$cityArray = [
				$city1,
				$city2,
				$city3,
				$city4,
				$city5
			];
		?>
	</div>
	<p>Выведем значения свойств наших объектов в массиве с помощью цикла <b>foreach</b></p>
	<div class="code_block_php">
		<?php highlight_string('<?php foreach ($cityArray as $value) {
		echo "<b>" . $value->name . "</b> - <b>" . $value->population . "</b><br>";
	} ?>');?><br>
	</div>
</div>
<p>В итоге получим: </p>
<?php 
	foreach ($cityArray as $value) {
		echo "<b>" . $value->name . "</b> - <b>" . $value->population . "</b><br>";
	}
 ?>
<hr>
<div></div>




<?php 
  require_once '../include/bootstrapFooter.php';
 ?>