<?php
function occurrences($str, $char) {
    $i = 0;
    $count = 0;
    $x = 0;
    while(isset($str[$i])) {
        $i++;
    }
    while($x < $i) {
        if($str[$x] == $char) {
            $count++;
        }
        $x++;
    }
    return ($count);
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
    $str = "Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre toujours.";
    $char = "m";
    echo "Le nombre de <b>\"" . $char . "\"</b> dans la citation : <b>\"" . $str . "\"</b> est de : <b>" . occurrences($str, $char) . "</b>.";
    ?>

</body>

</html>