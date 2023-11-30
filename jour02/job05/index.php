<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<?php

for ($number = 2; $number <= 1000; $number++) {
    $nbrDiv = 0;
    for ($j = 1; $j <= $number; $j++){
        if($number % $j == 0){
            $nbrDiv++;
        }
    }
    if($nbrDiv == 2){
        echo $number."<br>";
    }
}
?>
</body>
</html>