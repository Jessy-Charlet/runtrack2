<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

    <form name="formulaire" method="get" action="index.php">
        texte 1 : <input type="text" name="texte1" /> <br />
        texte 2 : <input type="text" name="texte2" /> <br />
        texte 3 : <input type="text" name="texte3" /> <br />
        <input type="submit" name="valider" value="OK" />
    </form>



    <?php
    $n = 0;
    echo "Vos données entrées : <br/>";

    if(isset($_GET['valider'])) {
        foreach($_GET as $index => $valeur) {
            if($index == "valider") {

            } else {
                echo '- '.$index.' : '.$valeur.'<br/>';
            }
            if($valeur == null or $valeur == "OK") {

            } else {
                $n++;
            }
        }

    }


    echo "Le nombre d’argument GET envoyé est : ".$n;
    ?>

</body>

</html>