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
$menu = [
    "Home" => '#',
    "About" => '#',
    "Contact" => '#'
];
echo '<ul style="list-style-type: none">';
foreach ($menu as $link => $href){
    echo "<li><a href='$href'>$link</a></li>";
}
echo '</ul>';
?>
</body>
</html>
