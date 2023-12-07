<?php
function bonjour($jour){
    echo "Bon";
    if ($jour == true){
        echo "jour<br>";
    }
    elseif ($jour == false){
        echo "soir<br>";
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
$jour = true;
bonjour($jour);

$jour = false;
bonjour($jour);
?>

</body>
</html>