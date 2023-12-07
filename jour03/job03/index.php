<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<?php
$str = "I'm Asorry Dave I'm afraid I can't do that";
$x = 0;
$a = "a";
$e = "e";
$i = "i";
$I = "I";
$y = "y";
$o = "o";
$u = "u";

$count = 0;
while (isset($str[$count])){
    $count ++;
}
while ($x < $count){
    if ($str[$x] == $a or $str[$x] == $e or $str[$x] == $i or $str[$x] == $o or $str[$x] == $u
    or $str[$x] == $I or $str[$x] == $y){
        echo $str[$x];
    }
    else {
    }
    $x ++;
}
?>

</body>
</html>