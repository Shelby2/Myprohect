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
    return "Сумма двух чисел " . $a . " и " . $b . ": " . ($a + $b);
}

echo sum(10, 15);

function difference($a, $b)
{
    return "<br>" . "Разность двух чисел " . $a . " и " . $b . ": " . ($a - $b);
}

echo difference(10, 15);

function multiplication($a, $b)
{
    return '<br>' . "Умнржение двух чисел " . $a . " и " . $b . ": " . ($a * $b);
}

echo multiplication(34, 0);

error_reporting(0);

function division($a, $b)
{
    return '<br>' . "Частное двух чисел " . $a . " и " . $b . ": " . ($a / $b);
    if ($b === 0) {
        echo "Деление на 0 !!!";
    }
}

echo division(34, 0);

function remainder($a, $b)
{
    return '<br>' . "Остаток от деления " . $a . " и " . $b . ": " . ($a % $b);
}

echo remainder(20, 15);


function length_hypotenuse($a, $b)
{
    return '<br>' . "Длина гипотенузы прямоугольного треугольника со сторонами " . $a . " и " . $b . ":" . (hypot($a, $b));
}

echo length_hypotenuse(10, 15);

function logarifm($a)
{
    return '<br>' . "Натуральный логарифм числа " . $a . " : " . (log($a));
}

echo logarifm(10);

function rounding($a)
{
    return '<br>' . "Округление числа в меньшую сторону" . $a . " : " . (floor($a));
}

echo rounding(11.99);

function exponentiation($a, $b)
{
    return '<br>' . "Возведение " . $a . " в степень " . $b . ": " . (pow($a, $b));
}

echo exponentiation(2, 3);

function round_number($a)
{
    return '<br>' . "Округление числа " . $a . " : " . (round($a));
}

echo round_number(10.3);


?>

<div>
    <h2></h2>
    <?php
    $a = "Hello world!";
    $b = false;

    function bold($a, $b)
    {
        $new = [];
        if ($b == true) {
            foreach ($a as $value) {
                $new[] = '<b>' . $value . '</b>';
            }
        } else {
            echo $a;
        }
        return $new;
    }
    $new = bold($a);
    foreach ($new as $value) {
        echo $value . '<br>';
    }

    ?>
</div>

<div>
    <h1>Рекурсия</h1>
    <?php
    function factorial ($value)
    {
        if ($value == 0){
            return 1;
        }

            return $value * factorial( $value - 1);

    }
    $result = factorial(5);
    echo $result;
    ?>
</div>
</body>
</html>
