<?php 

	require_once '../include/header2.php';
	require_once '../include/functions.php';

 ?>
 <div class="main-wrap">
 <h2 class = "center">Задачи по объктно ориентированому програмированию PHP</h2>
<?php 

require_once "classes.php";

$employee1 = new Employee ('Ivan', 40, 1000);

// $employee1 = new Employee;
// $employee1->name = 'Ivan';
// $employee1->age = 40;
// $employee1->salary = 1000;

$employee2 = new Employee ('Maria', 36, 4000);

// $employee2 = new Employee;
// $employee2->name = 'Maria';
// $employee2->age = 36;
// $employee2->salary = 4000;
//echo $employee1->name;

echo ' У обекта <b>$employee1</b> свойство <b>name</b> имеет значение: <b>' . $employee1->getName() . "</b><br>";
echo ' У обекта <b>$employee1</b> свойство <b>age</b> имеет значение: <b>' . $employee1->getAge() . "</b><br>";
echo ' У обекта <b>$employee1</b> свойство <b>salary</b> имеет значение: <b>' . $employee1->getSalary() . "</b><br><br>";

echo 'Проверяем у обекта <b>$employee1</b> значение свойства <b>age</b>, больше ли оно 18: <b>' . $employee1->checkAge() . "</b><br>";

echo 'Сумма значений <b>salary</b>, объектов <b>$employee1</b>, и <b>$employee2</b> равна: ' . ($employee1->getSalary() + $employee2->getSalary()) . "<br>";

$employee1->doubleSolary();
echo 'Удвоим значение <b>salary</b> объекту <b>$employee1</b>, с помощью метода <b>doubleSolary()</b> и получим: ' . $employee1->getSalary() . "<br><br>";


$user1 = new User;

$user1->name = 'John';
$user1->age = 44;

echo ' У обекта <b>$user1</b> свойство <b>age</b> имеет значение: <b>' . $user1->age . "</b><br>";


$user1->setAge(23);
echo 'Изменим объекту <b>$user1</b> свойство <b>age</b> с помощью метода <b>setAge()</b> и получим: <b>' . $user1->age . "</b><br>";

$user1->addAge(2);
echo 'Добавим свойству <b>age</b> объекта <b>$user1</b> кол-во лет методом <b>addAge()</b> и если сумма будет больше 18 и меньше 60 этот метод сработает, иначе все останеться как было, итог: <b>' . $user1->age ."</b><br>";
$user1->subAge(5);
echo 'Вычтем из свойства <b>age</b> объекта <b>$user1</b> кол-во лет методом <b>subAge()</b> и если сумма будет больше 18 и меньше 60 этот метод сработает, иначе все останеться как было, итог: <b>' . $user1->age ."</b><br>";

$rectangle1 = new Rectangle;
$rectangle1->width = 45;
$rectangle1->height = 25;

echo ' У обекта <b>$rectangle1</b> свойство <b>width</b> имеет значение: <b>' . $rectangle1->width . "</b><br>";
echo ' У обекта <b>$rectangle1</b> свойство <b>height</b> имеет значение: <b>' . $rectangle1->height . "</b><br><br>";


echo 'Получим площадь объекта <b>$rectangle1</b> с помощью метода <b>getSquare()</b>: ' . $rectangle1->getSquare() . "<br>";
echo 'Получим сумму сторон объекта <b>$rectangle1</b> с помощью метода <b>getPerimeter()</b>: ' . $rectangle1->getPerimeter() . "<br><br><br>";

//$user1->isAgeCorrect($user1->age); обращение к приватному методу приводит к ошибке

$student1 = new Student;

$student1->name = 'Denis';
$student1->course = 3;

echo "Создали объект <b>student1</b><br>";
echo ' У обекта <b>$student1</b> свойство <b>name</b> имеет значение: <b>' . $student1->name . "</b><br>";
echo ' У обекта <b>$student1</b> свойство <b>course</b> имеет значение: <b>' . $student1->course . "</b><br>";

$student1->transferToNextCourse();
echo 'Применяем метод <b>transferToNextCourse()</b> к объекту <b>$student1</b> и получаем значение свойства <b>course</b> равно: <b>' . $student1->course . "</b><br>";

 ?>
</div>
<?php 

	require_once '../include/footer.php';

 ?>