<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function sum($a, $b)
{
    echo "Сумма двух чисел " . $a . " и " . $b . ": " . ($a + $b);
}

sum(10, 15);

function difference($a, $b)
{
    echo "<br>" . "Разность двух чисел " . $a . " и " . $b . ": " . ($a - $b);
}

difference(10, 15);

function multiplication($a, $b)
{
    echo '<br>' . "Умнржение двух чисел " . $a . " и " . $b . ": " . ($a * $b);
}

multiplication(34, 0);

error_reporting(0);

function division($a, $b)
{
    echo '<br>' . "Частное двух чисел " . $a . " и " . $b . ": " . ($a / $b);
    if ($b === 0) {
        echo "Деление на 0 !!!";
    }
}

division(34, 0);

function remainder($a, $b)
{
    echo '<br>' . "Остаток от деления " . $a . " и " . $b . ": " . ($a % $b);
}

remainder(20, 15);


function length_hypotenuse($a, $b)
{
    echo '<br>' . "Длина гипотенузы прямоугольного треугольника со сторонами " . $a . " и " . $b . ":" . (hypot($a, $b));
}

length_hypotenuse(10, 15);

function logarifm($a)
{
    echo '<br>' . "Натуральный логарифм числа " . $a . " : " . (log($a));
}

logarifm(10);

function rounding($a)
{
    echo '<br>' . "Округление числа в меньшую сторону" . $a . " : " . (floor($a));
}

rounding(11.99);

function exponentiation($a, $b)
{
    echo '<br>' . "Возведение " . $a . " в степень " . $b . ": " . (pow($a, $b));
}

exponentiation(2, 3);

function round_number($a)
{
    echo '<br>' . "Округление числа " . $a . " : " . (round($a));
}
round_number(10.3);


?>
</body>
</html>
