<?php 
//функция читабелных массивов
function debug ($name) {
	echo "<pre>" . print_r($name, true) . "</pre>";
}
// массив с меню
$top_menu = [
	['href' => 'http://learnphp/phpOop/index.php', 'link' =>'Объекты'],
	['href' => 'http://learnphp/forms/form.php', 'link' =>'Формы'],
	['href' => 'http://learnphp/func/function.php', 'link' =>'Задачи по функциям']
];
// функция отрисовки меню
function drowMenu ($array) {
	foreach ($array as $val) {
		echo "<li>";
		echo "<a href='{$val['href']}'>{$val['link']}</a>";
		echo "</li>";
	}
}



?>
<!-- <li><a href="http://learnphp/phpOop/index.php">Объекты</a></li> -->