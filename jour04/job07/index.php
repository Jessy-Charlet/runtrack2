<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

<form name="formulaire" method="get" action="index.php">
    Largeur : <input type="text" name="largeur"/> <br/>
    Hauteur : <input type="text" name="hauteur"/> <br/>
    <input type="submit" name="ok" value="Dessiner"/>
</form>

<?php  


if (isset($_GET['ok'])) {
    $largeur = intval($_GET["largeur"]);
    $hauteur = intval($_GET["hauteur"]);

 //--------toit de la maison-----------

 for ($i = 0; $i <= $hauteur; $i++) {
    $prefixeEspace = ($hauteur-$i)*2;
    $interEspace = $i*2;
    $texte= "";

    for ($j = 1; $j <= $prefixeEspace; $j++) {
        $texte = $texte . "&nbsp";
    }
    $texte = $texte."/";
    
    for ($j = 1; $j <= $interEspace; $j++) {
            $texte = $texte."_";
    }
    $texte = $texte. "\\";
    echo $texte."<br>";
}





 //--------Murs et sol de la maison-----------
    for ($i = 1; $i <= $hauteur; $i++) {
        echo "|";
        if ($i == $hauteur){
            for ($a = 1; $a <= $largeur; $a++) {
                echo "_";
            }
        }
        else {
            for ($a = 1; $a <= ($largeur*2); $a++) {
                echo "&nbsp";
            }
        }

        echo "|<br>";
    }
}
?>
</body>
</html>