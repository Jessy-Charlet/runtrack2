<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<?php
$str = "Les choses que l'on possede finissent par nous posseder";
$count = 0;
$x = 0;

while (isset($str[$count])) {
    $count ++;
}
$count --;
while ($count >= $x){

    echo $str[$count];
    $count --;
}
?>
</body>
</html>