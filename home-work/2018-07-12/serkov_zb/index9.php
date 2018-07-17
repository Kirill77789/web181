<?php
/**
 * Date: 17.07.2018
 * Zakhar Serkov <zakharserkov@me.com>
 */

/*Задание:
Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
Какое число получится? Посчитайте количество итераций, необходимых для этого
*/
echo 'Вариант №1. С помощью цикла "while":<br>';
//Записываем значение 1000 в переменную $num
$num = 1000;

//Записываем значение 0 в переменную $i
$i = 0;

//Указываем условие для остановки цикла. Т.е. выполняем деление на 2 до тех пор, пока не получим значение меньше 50
while ($num > 50) {
    $num /= 2;
    $i++;
}
echo 'Число 1000 необходимо поделить на 2 (два) ' . $i . ' раз, чтобы получить значение ' . $num . ', которое меньше 50'.'<br>';


echo '<hr>';

echo 'Вариант №2. С помощью цикла "for":<br>';
//Это цикл без тела {}, все происходит внутри:
for ($num_2 = 1000, $j = 0; $num_2 > 50; $num_2 /= 2, $j++);

echo 'Число 1000 необходимо поделить на 2 (два) ' . $j . ' раз, чтобы получить значение ' . $num_2 . ', которое меньше 50'.'<br>';

// eof