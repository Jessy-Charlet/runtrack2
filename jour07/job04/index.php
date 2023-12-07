<?php
$a = 2;
$operation = "+";
$b = 4;
$result = 0;
function calcule($a, $b, $operation){
    if ($operation == "+"){
        return ($a + $b);
    }
    elseif ($operation == "-"){
        return ($a - $b);
    }
    elseif ($operation == "/"){
        return ($a / $b);
    }
    elseif ($operation == "*"){
        return ($a * $b);
    }
    elseif ($operation == "%"){
        return ($a % $b);
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<?php 
echo "<b>valeurs de bases : </b><br>";
var_dump($a);
var_dump($b);
echo "<br><b>types d'opérations : </b><br>";
$operation = "+";
echo "addition : " . calcule($a, $b, $operation) . "<br>";
$operation = "-";
echo "soustraction : " . calcule($a, $b, $operation) . "<br>";
$operation = "*";
echo "multiplicztion : " . calcule($a, $b, $operation) . "<br>";
$operation = "/";
echo "division : " . calcule($a, $b, $operation) . "<br>";
$operation = "%";
echo "modulo : " . calcule($a, $b, $operation) . "<br>";
?>

</body>
</html>