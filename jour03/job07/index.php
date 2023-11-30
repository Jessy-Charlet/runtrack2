<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$count = 1;
$x = 1;

while (isset($str[$count])) {
    $count ++;
}
$count -- ;
while ($x <= $count){
    if ($x == 1){
        echo ucfirst($str[$x]);
    }
    else {
    echo $str[$x];
    }
    $x ++;
}
$x = 0;
echo strtolower($str[$x]);
?>

</body>
</html>