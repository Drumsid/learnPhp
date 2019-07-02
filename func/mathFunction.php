<?php 
  require_once '../include/bootstrapHeader.php';
 ?>
<h2 class = "center">Математические функции</h2>

<div class="code_block">
  <p>Дан массив в числами, к примеру <b>[1, 2, -1, -2, 3, -3]</b>. Создайте из него новый массив так, чтобы отрицательные числа стали положительными, то есть у нас должен получиться такой массив: <b>[1, 2, 1, 2, 3, 3]</b>.</p>
  <p>Запишем массив и пройдемся по нему циклом.</p>
  <div class="code_block_php">
    <?php highlight_string('<?php $arr = [1, 2, -1, -2, 3, -3]; ?>');?><br>
    <?php highlight_string('<?php   foreach ($arr as $value) {
      $arr2[] = abs($value);
  }; ?>');?><br> 
  </div>
  <p>В итоге получим:</p>
  <div class="code_block_php">
    <?php highlight_string('<?php $arr = [1, 2, 1, 2, 3, 3]; ?>');?><br> 
  </div>
</div>
<?php 


 ?>
<hr>
<div></div>

<?php 
$arr = [1, 2, -1, -2, 3, -3];
  foreach ($arr as $value) {
    $arr2[] = abs($value);

  }
  //debug($arr2);
?>

 <div class="code_block">
  <p>Дано число, например <b>30</b>. У этого числа есть делители - числа, на которое оно делится без остатка. Делители числа <b>30</b> - это <b>1, 2, 3, 5, 6, 10, 15, 30</b>. Задача: сделайте массив делителей нашего числа. Число может быть любым, не обязательно, <b>30</b>.</p>
  <p>Напишем функцию которая ищет все делители любого целого числа.</p>
  <div class="code_block_php">
    <?php highlight_string('<?php function findAllDivider ($num) {
  $out = [];
    for ($i = 1; $i <= $num; $i++) {
      if ($num % $i == 0) {
        $out[] = $i;
      }
    }
    return $out;
  }; ?>');?><br>
    
  </div>
  <p>Вызовим нашу функцию с числом <b>123</b>: (функция <b>debug</b> - пользовательская, для удобнового вывода информации.)</p>
  <div class="code_block_php">
    <?php highlight_string('<?php debug(findAllDivider(123)); ?>');?><br> 
  </div>
  <p>Функция вернет:</p>
  <?php 
function findAllDivider ($num) {
  //$num = 45;
  $out = [];
    for ($i = 1; $i <= $num; $i++) {
      if ($num % $i == 0) {
        $out[] = $i;
      }
    }
    return $out;
  }

  debug(findAllDivider(100));
 ?>
 <hr>
<div></div>
</div>

 <div class="code_block">
  <p>Дан массив <b>[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]</b>. Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше <b>10</b>.</p>
  <div class="code_block_php">
    <?php highlight_string('<?php $numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      $numSum = 0;
      $count = 0;
      foreach ($numArr as $value) {
        $numSum += $value;
        $count++;
        if ($numSum >= 10) {
          $outSum = "Использовано <b>" . $count . "</b> элементов, итоговое число: <b>" . $numSum . "</b>";
          break;
        }
  }; ?>');?><br>
    
  </div>
  <p>Вызовим нашу функцию с числом <b>123</b>: (функция <b>debug</b> - пользовательская, для удобнового вывода информации.)</p>
  <div class="code_block_php">
    <?php highlight_string('<?php debug(findAllDivider(123)); ?>');?><br> 
  </div>
  <p>В итоге получим:</p>
  <?php 
  $numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $numSum = 0;
  $count = 0;
  foreach ($numArr as $value) {
    $numSum += $value;
    $count++;
    if ($numSum >= 10) {
      $outSum = "Использовано <b>" . $count . "</b> элементa, итоговое число равно: <b>" . $numSum . "</b>";
      break;
    }
  }

 ?>
  <?php echo $outSum; ?>
 <hr>
<div></div>
</div>



<?php 
  require_once '../include/bootstrapFooter.php';
 ?>