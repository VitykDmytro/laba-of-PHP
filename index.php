<?php
// Змінні з різними типами даних
$name = "Дмитро";
$age = 18;
$is_student = true;
$favorite_fruits = array("яблуко", "банан", "апельсин");

// Виведення інформації
echo "Ім'я: " . $name . "<br>";
echo "Вік: " . $age . "<br>";
echo "Студент: " . ($is_student ? 'Так' : 'Ні') . "<br>";
echo "Улюблені фрукти: ";
foreach ($favorite_fruits as $fruit) {
    echo $fruit . ", ";
}
?>
