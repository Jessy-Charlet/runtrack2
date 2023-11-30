<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<?php
$number = 0 ;
while ($number <= 100) {
    if ($number <= 20) {
        echo "<i>".$number."</i><br>";
    }
    elseif ($number > 25) {
        if ($number < 50) {
            if ($number !=42) {
            echo "<u>".$number."</u><br>";
            }
            else {
            echo "LaPlateforme_<br>";
            }
        }
    }
else {
    echo $number."<br>";
}
$number ++;
}
?>
</body>
</html>