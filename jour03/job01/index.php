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
$X =  array(200, 204, 173, 98, 171, 404, 459);
foreach ($X as $X) {
    if ($X %2) {
        $texte = "paire";
    }
    else {
        $texte = "impaire";
    }
    echo "<tr><td style=\"border: 1px solid grey;\">" . $X . " est " . $texte . "</td></tr>";
}
?>
</table>
</body>
</html>