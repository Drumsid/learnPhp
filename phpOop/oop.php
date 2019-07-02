<?php 
  require_once '../include/bootstrapHeader.php';
  require_once "classes.php";
 ?>
<h2 class = "center">Задачи по объктно ориентированому програмированию PHP</h2>

<div class="code_block">
	<p>Создаем обект класса Employee используя  __construct</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $employee1 = new Employee ("Ivan", 40, 1000); ?>');?>
		<?php $employee1 = new Employee ('Ivan', 40, 1000); ?>
	</div>
</div>
<?php 
	$employee1->setName('test');
	$employee1->setAge(15);
	$employee1->setSAlary(80000);

 ?>
<hr>
<div></div>
<div class="code_block">
	<p>Создаем второй обект класса Employee используя  __construct</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $employee2 = new Employee ("Maria", 36, 4000); ?>');?>
		<?php $employee2 = new Employee ('Maria', 36, 4000); ?>
	</div>
</div>
<hr>
<div></div>
<div class="code_block">
	<p>Обратимся к свойствам объекта <b>$employee1</b> используя метод <b>$employee1->getName()</b>.</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $employee1->getName(); ?>');?><br>
		<?php highlight_string('<?php $employee1->getAge(); ?>');?><br>
		<?php highlight_string('<?php $employee1->getSalary(); ?>');?><br>
	</div>
</div>
<p>В итоге получим:</p>
<?php 
	echo ' У обекта <b>$employee1</b> свойство <b>name</b> имеет значение: <b>' . $employee1->getName() . "</b><br>";
	echo ' У обекта <b>$employee1</b> свойство <b>age</b> имеет значение: <b>' . $employee1->getAge() . "</b><br>";
	echo ' У обекта <b>$employee1</b> свойство <b>salary</b> имеет значение: <b>' . $employee1->getSalary() . "</b><br><br>";
 ?>
 <hr>
 <div></div>
<div class="code_block">
	<p>Обратимся к свойству <b>age</b> объекта <b>$employee1</b> с помощью метода <b>$employee1->checkAge()</b>.</p> 
	<div class="code_block_php">
		<?php highlight_string('<?php $employee1->checkAge(); ?>');?><br>
	</div>
</div>
 <p>В итоге получим:</p>
<?php 
	echo 'Проверяем у обекта <b>$employee1</b> значение свойства <b>age</b>, больше ли оно 18: <b>' . $employee1->checkAge() . "</b><br>";
 ?>
 <hr>
 <div></div>

 <div class="code_block">
	<p>Попробуем сложить два метода <b>$employee1->getSalary()</b> и <b>$employee2->getSalary()</b>.</p>
	<div class="code_block_php">
		<?php highlight_string('<?php ($employee1->getSalary() + $employee2->getSalary()); ?>');?><br>
		<?php ($employee1->getSalary() + $employee2->getSalary()); ?>
	</div>
</div>
<p>В итоге получим:</p>
<?php 
	echo 'Сумма значений свойств <b>salary</b>, объектов <b>$employee1</b>, и <b>$employee2</b> равна: ' . ($employee1->getSalary() + $employee2->getSalary()) . "<br>";
 ?>
 <hr>
 <div></div>	

<div class="code_block">
	<p>Попробуем удвоить значение <b>salary</b> объекту <b>$employee1</b>, с помощью метода <b>doubleSolary()</b>.</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $employee1->getSalary(); ?>');?><br>
	</div>
</div>
<p>В итоге получим:</p>
<?php 
	echo 'Удвоим значение <b>salary</b> объекту <b>$employee1</b>, с помощью метода <b>doubleSolary()</b> и получим: ' . $employee1->doubleSolary() . "<br><br>";
 ?>
 <hr>
 <div></div>	

 <div class="code_block">
	<p>Создаем объект класса User</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $user1 = new User("John", "Lennon", 1500); ?>');?><br>
		<?php $user1 = new User("John", "Lennon", 1500); ?>
	</div>
	<p>Выводим значения свойств <b>$name</b> , <b>$surname</b> , <b>$salary</b>  объекта <b>$user1</b> 1 с помощью гетеров <b>getName()</b>, <b>getSurename()</b>, <b>getSalary()</b>.</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $user1->getName(); ?>');?><br>
		<?php highlight_string('<?php $user1->getSurename(); ?>');?><br>
		<?php highlight_string('<?php $user1->getSalary(); ?>');?><br>	
	</div>
	<p>В итоге получим:</p>
	<?php 
		echo 'Выведем значение свойства <b>$name</b> с помощью метода <b>getName()</b> получим: <b>' . $user1->getName() . "</b>.<br>";
		echo 'Выведем значение свойства <b>$surname</b> с помощью метода <b>getSurename()</b> получим: <b>' . $user1->getSurename() . "</b>.<br>";
		echo 'Выведем значение свойства <b>$salary</b> с помощью метода <b>getSalary()</b> получим: <b>' . $user1->getSalary() . "</b>.<br>";
 	?>
 	<br>
 	<p>Изменим свойство <b>$salary</b> объекта <b>$user1</b> с помощью сеттера <b>setSalary(50000)</b>.</p>
	<div class="code_block_php">
		<?php highlight_string('<?php $user1->setSalary(50000); ?>');?><br>	
	</div>
		<p>В итоге получим:</p>
	<?php 
		$user1->setSalary(50000);
		echo 'Изменим значение свойства <b>$salary</b> с помощью метода <b>setSalary()</b> получим: <b>' . $user1->getSalary() . "</b>.<br>";
 	?>
 	
</div>
 <hr>
 <div></div>			

<?php 
  require_once '../include/bootstrapFooter.php';
 ?>