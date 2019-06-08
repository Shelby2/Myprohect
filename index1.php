<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            border: 15px solid #dfc825;
            padding: 15px;
        }
    </style>
</head>
<body>
<div>
<form action="" method="post">
    <p>Введеите 1 значение: <input type="number" name="first" /></p>
    <p>+ <input type="radio" name="operator" value="+" /></p>
    <p>- <input type="radio" name="operator" value="-" /></p>
    <p>* <input type="radio" name="operator" value="*" /></p>
    <p>/ <input type="radio" name="operator" value="/" /></p>
    <p>Введите 2 значение: <input type="number" name="second" /></p>
    <p><input type="submit" name="do" /></p>
    <p><input type="reset" name="cansel" /></p>
</form>
<?php
$a = $_POST['first'];
$b = $_POST['second'];
$radio=$_POST['operator'];
if ($_POST['do']) {
    switch ($radio) {
    case $radio == "+":
        $c = $a + $b;
        echo "Результат: " . $c . '<br>';
        break;
    case $radio == "-":
        $d = $a - $b;
        echo "Результат: " . $d . '<br>';
        break;
    case $radio == "*":
        $e = $a * $b;
        echo "Результат: " . $e . '<br>';
        break;
    case $radio == "/":
        if ($b === 0) {
            $result = "деление на ноль";

    } else {

            $f = $a / $b;
            echo "Результат: " . $f . '<br>';
    };
        break;

    }
    }


?>




</div>
</body>
</html>