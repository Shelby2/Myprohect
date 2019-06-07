<html>
<head>

    <style>
        body {
            background-color: #c5e6ff;
        }

        h2 {
            width: auto;
            float: left;
            background-color: gold;
            padding: 13px 12px 12px 118px;
            margin: 20px;
            border-radius: 25px;
        }

        h1 {
            background-color: aqua;
            border-radius: 25px;
            text-align: center;
        }
        div {
            margin: 60px;
            text-align: center;
            border: 10px solid #f3b321;
            padding: 20px 20px 19px 20;
            width: auto;
            height: auto;
        }
    </style>
</head>
<body>
<h1>First calculator on PHP</h1>
<div>
<?php
$a = 2;
$b = 5;



$sum = $a + $b;
$diff = $a - $b;
$multipl = $a * $b;
$divis = $a / $b;
$rem = $a % $b;

echo "<pre>";
echo "Сложение a и b: ", $sum , "<br>";
echo "Вычитание a и b: ", $diff , "<br>";
echo "Умножение a и b: ", $multipl , "<br>";
echo "Деление a и b: ", $divis , "<br>";
echo "Остаток от деления a и b: ", $rem , "<br>";
echo "Модуль числа: ", "<br>" , abs($sum) , "<br>" , abs($diff) ,"<br>" , abs($multipl) , "<br>" , abs($divis);
echo "<br>", "Преобразование числа в восьмеричное представление в виде строки: ", "<br>" , decoct($sum) , "<br>" , decoct($diff) ,"<br>" , decoct($multipl) , "<br>" , decoct($divis);


?>
</div>
<div>
    <?php
        $array1 = [4,3,4,3,6,4,7,4,3,2];
        $array = [
        "Name" => "Dmitriy",
        "Age" => 22,
        "Login" => true,
        ];
        print_r(array_filter($array1));
    echo "<br>";
    echo "<pre>";
        var_dump(count($array1));
    echo "<br>";
        print_r(array_chunk($array, 2));

    ?>
</div>


</body>
</html>
