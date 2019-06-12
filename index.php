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
    <h3>Calculator on PHP with SWITCH</h3>
    <?php
    error_reporting(0);
    $a = 10;
    $b = 0;
    $c = "/";

    switch ($c) {
        case "+":
            $sum = $a + $b . "<br>";
            break;
        case "-":
            $diff = $a - $b . "<br>";
            break;
        case "*":
            $multipl = $a * $b . "<br>";
            break;
        case "/":
            $divis = $a / $b . "<br>";
            if ($b === 0) {
                echo "Деление на 0!!!" . "<<br>>";
            }
            break;
        case "%":
            $rem = $a % $b . "<br>";

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
    <h3>Calculator on PHP with IF/ELSE</h3>
    <?php
    error_reporting(0);
    $a1 = 1;
    $b1 = 0;
    $c1 = "/";

    if ($c1 === "+") {
        $d1 = $a1 + $b1 . "<br>";

    } elseif ($c1 === "-") {
        $f1 = $a1 + $b1 . "<br>";
    } elseif ($c1 === "*") {
        $e1 = $a1 * $b1 . "<br>";
    } elseif ($c1 === "/") {
        $g1 = $a1 / $b1 . "<br>";
        if ($b1 === 0) {
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
    $speed = 120;
    $b1 = 120;
    $array2 = [1, 2, 3, 5, 6, 6, 3, 3, 5];
    echo ($speed <= 60) ? "Speed normal" : "Speed not normal";
    echo "<br>";
    echo $speed ? $b1 : "Другое значение";
    echo "<br>";
    echo $speed ?? "Другое значение";

    ?>


</div>
<div>
    <?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    $arr1 = [];
    for ($i = 2; $i < 15; $i++) {
        if ($i > 11) {
            break;
        }
    }
    echo $i;
    $a = 10;
    while ($a < 20) {
        echo "<br>";
        echo "<pre>";
        echo $a++;

    }
    foreach ($arr as $value) {
        $value = $value * 2;
        $arr1[] = $value;
    }

    echo "<pre>";
    var_dump($arr1);

    foreach ($arr as $key => $value){
        $key;
        echo "{$key} => {$value}";
        echo "<br>";
        print_r($arr);
    }
    ?>
    </div>
    <div>
        <?php
        $arr = [];
        echo substr("hello world",6,5 );
        echo "<br>";
        echo strpos("hello world","world");
        echo "<br>";
        echo trim(" 1234567 ",' ');
        if (empty($arr)){
            echo "<br>";
            echo "Массив пустой!";
        }
        echo array_column($arr);

        $a12[] = "PHP";
        $a12[] = "HTML";
        $a12[] = "CSS";
        sort($a12);
        var_dump($a12);
        echo "<br>";
        echo current($a12);
        echo "<br>";
        echo next($a12);
        echo "<br>";
        echo prev($a12);
        echo "<br>";
        echo end($a12);
        echo "<br>";
        echo reset($a12);
        echo "<br>";

        var_dump( in_array("PHP",$a12));

        $b = ["1+",2,3,"5+",3,6,4,6];
        //$str = implode("+",$b);
        //echo $str;
        $str1 = explode("+",$str);
        echo $str1;


        ?>


    </div>
<div>
    <?php
    $a123["one"] = "PHP";
    $a123["two"] = "HTML";
    $a123["three"] = "CSS";
    $extr = extract($a123);
    var_dump( $one , $two , $three);


    $city = "San Francisco";
    $state = "CA";
    $event = "SIGGRAPH";

    $location_vars = array("city", "state");

    $result = compact("event", "nothing_here", $location_vars);
    echo "<br>";
    print_r($result);


    ?>

</div>
<div>
    <?php
   $arr11[] = "PHP";
   $arr11[] = "HTML";
   $arr11[] = "CSS";
   $arr22[] = "PHP";
   $arr22[] = "PHP 7.2";
   $r[] = array_diff($arr11,$arr22);
   $l[] = array_diff($arr22,$arr11);
   $rl = array_merge($r,$l);
   echo "<br>";
   var_dump($rl);
    ?>

</div>





</body>
</html>
