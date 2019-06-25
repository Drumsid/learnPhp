<?php 

	require_once '../include/header2.php';
	require_once '../include/functions.php';

 ?>
 <div class="main-wrap">
 	<h2 class = "center">Задачи связаные с функциями PHP</h2>
 <?php 

 //debug($_GET);

  ?>

	<h2 class = "center">Математические функции</h2>
		<div class="card-task">
			<div class="card-header">
				<h3>Задачи по работе с %</h3>
			</div>
			<div class="card-body">
				<h5>Задача №1</h5>
				<p>Даны переменные <b>$a=10</b> и <b>$b=3</b>. Найдите остаток от деления <b>$a</b> на <b>$b</b>.</p>
			</div>
			<div class="card-task-blok">
				<h3>Решение:</h3>
				<?php  
					highlight_string('<?php

	$a = 10;
	$b = 3;
	echo $a % $b;

?>') 

				?>
				<p>В результате: <b>echo $a % $b;</b> выдаст: <b><?php 
				$a = 10;
				$b = 3;

					echo $a % $b;

				 ?> </b></p>
				
			</div>
		</div>

				<div class="card-task">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5>Задача №2</h5>
				<p>Даны переменные <b>$a</b> и <b>$b</b>. Проверьте, что <b>$a</b> делится без остатка на <b>$b</b>. Если это так - выведите '<b>Делится</b>' и результат деления, иначе выведите '<b>Делится с остатком</b>' и остаток от деления..</p>
			</div>
			<div class="card-task-blok">
				<h3>Решение:</h3>
				<?php  
					highlight_string('<?php

	 $a = 10;
	 $b = 4;
	 if ($a % $b == 0) {
	 	echo "Делится";
	 } else {
	 	echo "Делится с остатком " . $a % $b;
	 }

?>') 

				?>
				<p>В результате: <b>echo $a % $b;</b> выдаст: <b><?php 
				 $a = 10;
 $b = 4;
 if ($a % $b == 0) {
 	echo "Делится";
 } else {
 	echo "Делится с остатком " . $a % $b;
 }

				 ?> </b></p>
				
			</div>
		</div> <!-- card-task -->

		<div class="card-task">
			<div class="card-header">
				<h3>Работа со степенью и корнем</h3>
			</div>
			<div class="card-body">
				<h5>Задача №1</h5>
				<p>Возведите <b>2</b> в <b>10</b> степень. Результат запишите в переменную <b>$st</b>.</p>
			</div>
			<div class="card-task-blok">
				<h3>Решение:</h3>
				<?php  
					highlight_string('<?php

	$a = 2;
	$st = pow($a, 10);
	echo $st;

?>') 

				?>
				<p>В результате: <b>pow(2, 10);</b> выдаст: <b><?php 
				 $a = 2;
	$st = pow($a, 10);
	echo $st;

				 ?> </b></p>
				
			</div>
		</div> <!-- card-task -->

		<div class="card-task">
			<div class="card-header">
				<h3>Работа со степенью и корнем</h3>
			</div>
			<div class="card-body">
				<h5>Задача №2</h5>
				<p>Найдите квадратный корень из <b>245</b>.</p>
			</div>
			<div class="card-task-blok">
				<h3>Решение:</h3>
				<?php  
					highlight_string('<?php

	$a = 245;
	$sqrt = sqrt($a);
	echo $sqrt;

?>') 

				?>
				<p>В результате: <b>sqrt(245);</b> выдаст: <b><?php 
				$a = 245;
				$sqrt = sqrt($a);
				echo $sqrt;

				 ?> </b></p>
				
			</div>
		</div> <!-- card-task -->

		<div class="card-task">
			<div class="card-header">
				<h3>Работа со степенью и корнем</h3>
			</div>
			<div class="card-body">
				<h5>Задача №3</h5>
				<p> Дан массив с элементами <b>4, 2, 5, 19, 13, 0, 10</b>. Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом <b>foreach.</b>.</p>
			</div>
			<div class="card-task-blok">
				<h3>Решение:</h3>
				<?php  
					highlight_string('<?php

	$arr = [4, 2, 5, 19, 13, 0, 10];
	$sumArray = 0;
	foreach ($arr as $val) {
		$sumArray += pow($val, 2);
		}
	echo sqrt($sumArray);

?>') 

				?>
				<p>В результате: <b>sqrt($sumArray);</b> выдаст: <b><?php 
				$arr = [4, 2, 5, 19, 13, 0, 10];
				$sumArray = 0;
				foreach ($arr as $val) {
						$sumArray += pow($val, 2);
					}
				echo sqrt($sumArray);
				 ?> </b></p>
				
			</div>
		</div> <!-- card-task -->
</div>
<?php 

	require_once '../include/footer.php';

 ?>

 <?php 



  ?>