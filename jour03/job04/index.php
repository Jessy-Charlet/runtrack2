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
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;
while (isset($str[$count])){
    $count ++;
}
echo $count;
?>
</table>
</body>
</html>