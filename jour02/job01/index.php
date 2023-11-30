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
while ($number <= 1337) {
    if ($number == 42) {
        echo "<b><u>".$number."</u></b><br>";
    }
else {
    echo $number."<br>";
}
$number ++;
}
?>
</body>
</html>