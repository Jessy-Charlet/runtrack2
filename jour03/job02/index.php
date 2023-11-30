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
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$x = 0;
while ($x <= strlen($str)){
    echo $str[$x];
    $x += 2;
}
?>
</table>
</body>
</html>