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

<div>
    <h3>Calculator on PHP with  SWITCH</h3>
    <?php
    $a = 10;
    $b = 4;
    $c = "";

    switch ($c){
        case "+":
            $sum = $a + $b . $sum . "<br>";
            break;
        case "-":
            $diff = $a - $b . $diff . "<br>";
            break;
        case "*":
            $multipl = $a * $b . $multipl . "<br>";
            break;
        case "/":
            $divis = $a / $b . $divis . "<br>";
            break;
        case "%":
            $rem = $a % $b . $rem . "<br>";
            break;
        default :
            echo "Введите значение";

    }
    echo $rem;
    echo $sum;
    echo $diff;
    echo $divis;
    echo $multipl;

    ?>
</div>
<div>
    <h3>Calculator on PHP with  IF/ELSE</h3>
    <?php
    $a1 = 1;
    $b1 = 5;
    $c1 = "/";

    if ($c1 === "+"){
        $d1 = $a1 + $b1. $d1 . "<br>";

    } elseif ($c1 === "-"){
        $f1 = $a1 + $b1. $f1 . "<br>";
    } elseif ($c1 === "*"){
        $e1 = $a1 * $b1. $e1 . "<br>";
    } elseif ($c1 === "/"){
        $g1 = $a1 / $b1. $g1 . "<br>";
        if ($b1 === 0){
            echo "Деление на 0 !!!";
        }
    }
    echo $d1;
    echo $f1;
    echo $e1;
    echo $g1;

    ?>
</div>
<div>
    <?php
    $d = 2;
    echo "Инкремент/дикремент", "<br>";
    echo $d++, "<br>";
    echo ++$d, "<br>";
    echo $d--, "<br>";
    echo --$d, "<br>";

    ?>
</div>
<div>
    <?php

    echo "Конкатенация", "<br>";
    $f = "Hello";
    $f = $f . " world";
    echo $f;
    $f .= "!!!";
    echo "<br>", $f;

    ?>

</div>
<div>
    <?php

    echo "<br>";
    $value = 10;
    $value += 5;
    echo $value;

    ?>

</div>
<div>
    <?php

    $t = 1;
    if ($t == "1") {
        echo "не строгое сравнение ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t === "1") {
        echo "<br>";
        echo "строгое стравнение ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t != "1") {
        echo "<br>";
        echo "нестрогое НЕ стравнение ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t !== "1") {
        echo "<br>";
        echo "строгое НЕ стравнение ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t > 1) {
        echo "<br>";
        echo "больше ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t < 1) {
        echo "<br>";
        echo "меньше ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t <= "1") {
        echo "<br>";
        echo "больше либо равно ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t >= "1") {
        echo "<br>";
        echo "меньше либо равно ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t && "1") {
        echo "<br>";
        echo "и ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t || "1") {
        echo "<br>";
        echo "или ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t xor "1") {
        echo "<br>";
        echo "Исключающее или ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }
    if ($t == false) {
        echo "<br>";
        echo "Равно ли чтсло  ";
        echo "true";
    } else {
        echo "<br>";
        echo "false";
    }


    ?>

</div>
<div>
    <?php
    $a = 100;
    echo "Применение Switch";
    echo "<br>";
    echo "<pre>";
    switch ($a) {
        case $a >= 70 :
            echo "Остановись";
            break;
        case $a == 60 :
            echo "Превышаешь";
            break;
        case $a <= 50 :
            echo "Норма";
            break;
    }

    ?>

</div>
<div>
    <?php
//   $speed=120;
   $b1=120;
   $array2 = [1,2,3,5,6,6,3,3,5];
   echo ($speed <= 60) ? "Speed normal" : "Speed not normal";
   echo "<br>";
   echo $speed ? $b1 : "Другое значение";
    echo "<br>";
   echo $speed ?? "Другое значение";

    ?>

</div>


</body>
</html>
