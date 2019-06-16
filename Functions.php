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


function sum($a, $b){
    $SUM =$a +$b;
    return $SUM;
}
$return_result = sum(10,15);
echo "Сумма двух чисел:". $return_result;
?>
</body>
</html>
