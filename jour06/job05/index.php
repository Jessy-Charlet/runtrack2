<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 

    if (isset($_GET['Changer'])) {
        foreach ($_GET as $index => $valeur) {
            if ($valeur == "classique"){
                echo '<link rel="stylesheet" href="style1.css">';
            }
            if ($valeur == "sombre"){
                echo '<link rel="stylesheet" href="style2.css">';
            }
            if ($valeur == "girly"){
                echo '<link rel="stylesheet" href="style3.css">';
            }

        }
    }
    else {
        echo '<link rel="stylesheet" href="style1.css">';
    }
    ?>
    <title>index</title>
</head>

<body>
<div>
    <h1>Changer le style de la page</h1>
<form name="formulaire" method="get" action="index.php">
<label for="style-select">Choisi ton style :</label>
<select name="styles" id="styles-select">
  <option value="classique">Classique</option>
  <option value="sombre">Sombre</option>
  <option value="girly">Girly</option>
</select><br>
<input type="submit" name="Changer" value="Changer"/>
</form>
</div>

</body>
</html>