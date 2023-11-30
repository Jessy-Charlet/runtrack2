<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <table>
<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$count =0;
$x = 0;
$a = "a";
$e = "e";
$i = "i";
$y = "y";
$o = "o";
$O = "O";
$u = "u";
$dic = array("voyelles" => 0 , "consones" => 0);
$space = " ";
$apo = "'";
$p = 0;

while (isset($str[$count])){
    $count ++;
}

while ($x < $count){
    if ($str[$x] == $a or $str[$x] == $e or $str[$x] == $i or $str[$x] == $o or $str[$x] == $u
    or $str[$x] == $O or $str[$x] == $y){
        $dic["voyelles"] = $dic["voyelles"] +1;
    }
    elseif ($str[$x] == $space or $str[$x] == $apo){
        $p ++;
    }
    else {
        $dic["consones"] = $dic["consones"] +1;
    }
    $x ++;
}
?>


<table style="border: 1px solid grey;">
<tr>
<th style="border: 1px solid grey;">
Voyelles
</th>
<th style="border: 1px solid grey;">
Consonnes
</th>
</tr>
<tr>
<td style="border: 1px solid grey;">
    <?= $dic["voyelles"] ?>
</td>
<td style="border: 1px solid grey;">
    <?= $dic["consones"] ?>
</td>
</tr>
</table>

</body>
</html>